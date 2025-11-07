<?php require_once '../Templates/Header.php'; ?>

<?php
    require_once '../Public/Jobs.php';

    $job = new Jobs(); 

    if (isset($_POST['submit'])) {
        $job_id =  $_POST['job_id'];
        $job_title = $_POST['job_title'];
        $min_salary = floatval($_POST['min_salary']);
        $max_salary = floatval($_POST['max_salary']);
        $result = $job->create($job_id,$job_title,$min_salary,$max_salary);
        if ($result) {
            header('location:../Views/Job.php');
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
                    <label for="" class="form-label">Job ID</label>
                    <input
                        type="text"
                        class="form-control"
                        name="job_id"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Job ID" />
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">Job Title</label>
                    <input
                        type="text"
                        class="form-control"
                        name="job_title"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Job Title" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Minimum Salary</label>
                    <input
                        type="number"
                        class="form-control"
                        name="min_salary"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Minimum Salary" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Maximum Salary</label>
                    <input
                        type="number"
                        class="form-control"
                        name="max_salary"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Maximum Salary" />
                </div>

                <div>
                    <input type="submit" name="submit" value="Add Job" class="btn btn-success text-center text-light">
                </div>

            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>