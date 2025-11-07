<?php require_once '../Templates/Header.php'; ?>

<?php
    require_once '../Public/Employees.php';

    $emp = new Employees(); 

    if (isset($_POST['submit'])) {
        $emp_id =  (int)$_POST['employee_id'];
        $f_name = $_POST['first_name'];
        $l_name = $_POST['last_name'];
        $email = $_POST['email'];
        $ph_no = $_POST['phone_number'];
        $hire_date = $_POST['hire_date'];
        $job_id = $_POST['job_id'];
        $salary = floatval($_POST['salary']);
        $com_pct = floatval($_POST['commission_pct']);
        $manager_id = (int)$_POST['manager_id'];
        $dept_id = (int)$_POST['department_id'];
        $result = $emp->create($emp_id,$f_name,$l_name,$email,$ph_no,$hire_date,$job_id,$salary,$com_pct,$manager_id,$dept_id);
        if ($result) {
            header('location:../Views/Employee.php');
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
                    <input
                        type="text"
                        class="form-control"
                        name="employee_id"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Employee ID" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">First Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="first_name"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter First name" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Last Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="last_name"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Last name" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Email" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Phone Number</label>
                    <input
                        type="text"
                        class="form-control"
                        name="phone_number"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Phone Number" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Hire Date</label>
                    <input
                        type="date"
                        class="form-control"
                        name="hire_date"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Hire Date" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Job ID</label>
                    <select
                        class="form-select form-select-lg"
                        name="job_id"
                        required
                        id="">
                        <option selected value="" disabled>Select one</option>

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
                    <label for="" class="form-label">Salary</label>
                    <input
                        type="number"
                        class="form-control"
                        name="salary"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Salary" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Commission Pct</label>
                    <input
                        type="number"
                        class="form-control"
                        name="commission_pct"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Commission Pct" />
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
                    <label for="" class="form-label">Department ID</label>
                    <select
                        class="form-select form-select-lg"
                        name="department_id"
                        required
                        id="">
                        <option selected disabled value="">Select one</option>

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
                    <input type="submit" name="submit" value="Add Employee" class="btn btn-success text-center text-light">
                </div>

            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>