<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
    <div
        class="table-responsive">
        <a href="../Jobs/Create.php" class="btn btn-success m-3">Add Job</a>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Job ID</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Minimum Salary</th>
                    <th scope="col">Maximum Salary</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                            require_once '../Public/Jobs.php';
                            $job = new Jobs();
                            $result = $job->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                    <tr class="">
                                        <td>'.$row['job_id'].'</td>
                                        <td>'.$row['job_title'].'</td>
                                        <td>'.$row['min_salary'].'</td>
                                        <td>'.$row['max_salary'].'</td>
                                    </tr>
                                
                                ';
                            }

                    ?>
            </tbody>
        </table>
    </div>

</div>
<?php require_once '../Templates/Footer.php'; ?>