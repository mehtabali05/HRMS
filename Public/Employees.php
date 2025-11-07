<?php 
    require_once '../Config/Database.php';
    class Employees extends Database
    {
        public function read()
        {
            return $this->con->query("Select * from employees");
        }
        public function create($emp_id,$f_name,$l_name,$email,$ph_no,$hire_date,$job_id,$salary,$com_pct,$manager_id,$dept_id)
        {
            $sql = "insert into employees(employee_id,first_name,last_name,email,phone_number,hire_date,job_id,salary,commission_pct,manager_id,department_id) values (?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('issssssddii',$emp_id,$f_name,$l_name,$email,$ph_no,$hire_date,$job_id,$salary,$com_pct,$manager_id,$dept_id);
            return $stmt->execute();
        }
    }

?>