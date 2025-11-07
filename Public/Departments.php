<?php
    require_once '../Config/Database.php';

    class Departments extends Database{
        public function read(){
            return $this->con->query("select * from departments");
        }

        public function create($dept_id,$dept_name,$manager_id,$location_id){
            $sql = "insert into departments(department_id,department_name,manager_id,location_id) values(?,?,?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("isii",$dept_id,$dept_name,$manager_id,$location_id);
            return $stmt->execute();
        }
    }
?>