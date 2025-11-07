<?php require_once '../Templates/Header.php'; ?>

<?php
    require_once '../Public/JobHistories.php';

    $jobHistory = new JobHistories(); 

    if (isset($_POST['submit'])) {
        $emp_id =  (int)$_POST['emp_id'];
        $s_date = $_POST['s_date'];
        $e_date = $_POST['e_date'];
        $job_id = $_POST['job_id'];
        $dept_id = (int)$_POST['dept_id'];
        $result = $jobHistory->create($emp_id,$s_date,$e_date,$job_id,$dept_id);
        if ($result) {
            header('location:../Views/JobHistory.php');
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
                    <label for="" class="form-label">Employee ID</label>
                    <select
                        class="form-select form-select-lg"
                        name="emp_id"
                        required
                        id="">
                        <option value="" selected disabled>Select one</option>

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
                    <label for="" class="form-label">Start Date</label>
                    <input
                        type="date"
                        class="form-control"
                        name="s_date"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Start Date" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">End Date</label>
                    <input
                        type="date"
                        class="form-control"
                        name="e_date"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter End Date" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Job ID</label>
                    <select
                        class="form-select form-select-lg"
                        name="job_id"
                        required
                        id="">
                        <option value="" selected disabled>Select one</option>

                        <?php
                            require_once '../Public/Jobs.php';
                            $job = new Jobs();
                            $result = $job->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                        <option value='.$row['job_id'].'>'.$row['job_id'].'</option> 
                                ';
                            }
                        ?>
                        
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Department ID</label>
                    <select
                        class="form-select form-select-lg"
                        name="dept_id"
                        required
                        id="">
                        <option value="" selected disabled>Select one</option>

                        <?php
                                require_once '../Public/Departments.php';
                                $dept = new Departments();
                            $result = $dept->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                        <option value='.$row['department_id'].'>'.$row['department_id'].'</option> 
                                ';
                            }
                        ?>
                        
                    </select>
                </div>

                <div>
                    <input type="submit" name="submit" value="Add Job History" class="btn btn-success text-center text-light">
                </div>

            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>