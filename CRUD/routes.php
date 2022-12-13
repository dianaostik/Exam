<?php

include "TripController.php";

$edit = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(isset($_POST['save'])){
        TripController::store();
        header("Location: index.php");
        die;
    }      

    if(isset($_POST['edit'])){
    
        $trip = TripController::show();
        $trips = TripController::index();
        $edit = true;
    }  

    if(isset($_POST['update'])){
        
        TripController::update();
        header("Location: index.php");
        die;
    }

    if(isset($_POST['destroy'])){
        TripController::destroy();
        header("Location: index.php");
        die;
    }

}

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        
        if (count($_GET) == 0){
            $trips = TripController::index();
        }
    
        if(isset($_GET['search'])){
            $trips = TripController::search();
        }

    }

    ?>
