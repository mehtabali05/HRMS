<?php 
    require_once '../Config/Database.php';
    class Jobs extends Database
    {
        public function read()
        {
            return $this->con->query("Select * from jobs");
        }
        public function create($job_id,$job_title,$min_sal,$max_sal)
        {
            $sql = "insert into jobs(job_id,job_title,min_salary,max_salary) values (?,?,?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('ssdd',$job_id,$job_title,$min_sal,$max_sal);
            return $stmt->execute();
        }
    }

?>