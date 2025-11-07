<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
    <div
        class="table-responsive">
        <a href="../Departments/Create.php" class="btn btn-success m-3">Add Department</a>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Department ID</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Manager ID</th>
                    <th scope="col">Location ID</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                            require_once '../Public/Departments.php';
                            $dept = new Departments();
                            $result = $dept->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                    <tr class="">
                                        <td>'.$row['department_id'].'</td>
                                        <td>'.$row['department_name'].'</td>
                                        <td>'.$row['manager_id'].'</td>
                                        <td>'.$row['location_id'].'</td>
                                    </tr>
                                
                                ';
                            }

                    ?>
            </tbody>
        </table>
    </div>

</div>
<?php require_once '../Templates/Footer.php'; ?>