<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 1); 
    include_once("./includes/db_config.php");
    include_once("./includes/Biography.php");

    //Create an empty array that will be filled with albums. Get variables...if (is set) checks to see if the variable exists; 
    //double && means that BOTH halves of the variable must be TRUE; and cannot equal an empty string; 
    //if genre is not set, or if genre is blank, then it will just load everything
    if(isset($_GET['tag']) && $_GET['tag'] != ''){
        $bios = Biography::load($_GET['tag']);
    } else {
        $bios = Biography::load();//refers to static method function in Album.php
    }

    //This loop iterates through the $albums array and prints out the data for each album
    for($i=0; $i<count($bios); $i++){
        print_r("<p>");
        $bios[$i]->getData();
        print_r('</p>');
    }
?>
