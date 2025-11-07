<?php require_once '../Templates/Header.php'; ?>

<?php
    require_once '../Public/Departments.php';

    $dept = new Departments(); 

    if (isset($_POST['submit'])) {
        $dept_id =  (int)$_POST['dept_id'];
        $dept_name = $_POST['dept_name'];
        $manager_id = (int)$_POST['manager_id'];
        $location_id = (int)$_POST['location_id'];
        $result = $dept->create($dept_id,$dept_name,$manager_id,$location_id);
        if ($result) {
            header('location:../Views/Department.php');
            exit();
        } else {
            echo '<p class="container bg-danger text-center text-light">Failed TO Store<p>';
        }
    }

?>

<div class="container-fluid my-3">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Department ID</label>
                    <input
                        type="text"
                        class="form-control"
                        name="dept_id"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Department ID" />
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">Department Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="dept_name"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Department name" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Manager ID</label>
                    <select
                        class="form-select form-select-lg"
                        name="manager_id"
                        required
                        id="">
                        <option selected disabled value="">Select one</option>

                        <?php
                                require_once '../Public/Employees.php';
                                $emp = new Employees();
                            $result = $emp->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                        <option value='.$row['employee_id'].'>'.$row['employee_id'].'</option> 
                                ';
                            }
                        ?>
                        
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Location ID</label>
                    <select
                        class="form-select form-select-lg"
                        name="location_id"
                        required
                        id="">
                        <option selected disabled value="">Select one</option>

                        <?php
                                require_once '../Public/Locations.php';
                                $loc = new Locations();
                            $result = $loc->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                        <option value='.$row['location_id'].'>'.$row['location_id'].'</option> 
                                ';
                            }
                        ?>
                        
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" name="submit" value="Add Department" class="btn btn-success text-center text-light">
                </div>

            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>