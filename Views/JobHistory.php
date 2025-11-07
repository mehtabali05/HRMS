<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
    <div
        class="table-responsive">
        <a href="../JobHistories/Create.php" class="btn btn-success m-3">Add Job History</a>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Job ID</th>
                    <th scope="col">Department ID</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                            require_once '../Public/JobHistories.php';
                            $jobHistory = new JobHistories();
                            $result = $jobHistory->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                    <tr class="">
                                        <td>'.$row['employee_id'].'</td>
                                        <td>'.$row['start_date'].'</td>
                                        <td>'.$row['end_date'].'</td>
                                        <td>'.$row['job_id'].'</td>
                                        <td>'.$row['department_id'].'</td>
                                    </tr>
                                
                                ';
                            }

                    ?>
            </tbody>
        </table>
    </div>

</div>
<?php require_once '../Templates/Footer.php'; ?>