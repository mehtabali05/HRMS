<?php
    require_once '../Config/Database.php';

    class JobHistories extends Database{
        public function read(){
            return $this->con->query("select * from job_history");
        }

        public function create($emp_id,$start_date,$end_date,$job_id,$dept_id){
            $sql = "insert into job_history(employee_id,start_date,end_date,job_id,department_id) values(?,?,?,?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("isssi",$emp_id,$start_date,$end_date,$job_id,$dept_id);
            return $stmt->execute();
        }
    }
?>