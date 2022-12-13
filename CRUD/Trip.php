<?php
include "DB.php";


  class Trip{
        public $id;
        public $name;
        public $month;
        public $number;
        public $distance;
        public $animals;

        public function __construct($id = null, $name = null, $month = null, $number = null, $distance = null, $animals = null){
            $this->id = $id;
            $this->name = $name;
            $this->month = $month;
            $this->number = $number;
            $this->distance = $distance;
            $this->animals = $animals;
        }

        public static function all(){
            $trips = [];
            $db = new DB();
            $query = "SELECT * FROM `trip`";
            $result = $db->conn->query($query);

                while($row = $result->fetch_assoc()){
                    $trips[] = new Trip ($row['id'], $row['name'], $row['month'], $row['max_people_allowed'], $row['distance'], $row['with_animals'] );

                }
            $db->conn->close();
            return $trips;
        }

        public static function create(){
            $db = new DB();
            $stmt = $db->conn->prepare("INSERT INTO `trip`(`name`, `month`, `max_people_allowed`, `distance`, `with_animals`) VALUES (?,?,?,?,?)");
            $stmt->bind_param("ssiis", $_POST['name'], $_POST['month'], $_POST['number'], $_POST['distance'], $_POST['animals']);
            $stmt->execute();

            $stmt->close();
            $db->conn->close();
            }

    public static function find($id){
            $trip = new Trip();
            $db = new DB();
            $query = "SELECT * FROM `trip` where `id`=". $id;
            $result = $db->conn->query($query);

                while($row = $result->fetch_assoc()){
                    $trip = new Trip($row['id'], $row['name'], $row['month'], $row['max_people_allowed'], $row['distance'], $row['with_animals'] );
                }
            $db->conn->close();
            return $trip;
        }

    public function update(){       
            $db = new DB(); 
            $stmt = $db->conn->prepare("UPDATE `trip` SET `name`= ? ,`month`= ? ,`max_people_allowed`= ? ,`distance`= ? , `with_animals`= ? WHERE `id` = ?");
            $stmt->bind_param("ssiisi", $_POST['name'], $_POST['month'], $_POST['number'], $_POST['distance'], $_POST['animals'], $_POST['id']);
            $stmt->execute();
    
            $stmt->close();
            $db->conn->close();
    }

    public static function destroy($id){
            $db = new DB();
            $stmt = $db->conn->prepare("DELETE FROM `trip` WHERE `id` = ?");
            $stmt->bind_param("i", $_POST['id']);
            $stmt->execute();
    
            $stmt->close();
            $db->conn->close(); 
    }

    public static function search(){
        $trips = [];
        $db = new DB();
        $query = "SELECT * FROM `trip` where `name` like \"%" . $_GET['search'] . "%\"";
        $result = $db->conn->query($query);

            while($row = $result->fetch_assoc()){
                $trips[] = new Trip ($row['id'], $row['name'], $row['month'], $row['max_people_allowed'], $row['distance'], $row['with_animals'] );

            }
        $db->conn->close();
        return $trips;
    }
  }

?>




