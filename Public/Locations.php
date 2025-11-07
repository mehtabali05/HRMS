<?php
    require_once '../Config/Database.php';

    class Locations extends Database{
        public function read(){
            return $this->con->query("select * from locations");
        }

        public function create($loc_id,$street_add,$postal_code,$city,$province,$country_id){
            $sql = "insert into locations(location_id,street_address,postal_code,city,state_province,country_id) values(?,?,?,?,?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("isssss",$loc_id,$street_add,$postal_code,$city,$province,$country_id);
            return $stmt->execute();
        }
    }
?>