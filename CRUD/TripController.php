<?php
include "Trip.php";

class TripController{

    public static function index(){
        $trips = Trip::all();
        return $trips;
    }


    public static function store(){
        Trip::create();
    }

    public static function show(){
        $trip = Trip::find($_POST['id']);
        return $trip;
    }

    public static function update(){
       $trip = new Trip();
       $trip->id = $_POST['id'];
       $trip->name = $_POST['name'];
       $trip->month = $_POST['month'];
       $trip->number = $_POST['number'];
       $trip->distance = $_POST['distance'];
       $trip->animals = $_POST['animals'];
       $trip->update();
    }

    public static function destroy(){
       Trip::destroy($_POST['id']);
    }

    public static function search(){
        return Trip::search();
     }

}
?>