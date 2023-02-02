<?php
    include "connect.php";

    if(isset($_POST['insert'])){
        $title = $_POST['title'];
        $text = $_POST['text'];
        $start = $_POST['start'];
        $end= $_POST['end'];
        $status = $_POST['status']; 

        $sql = "INSERT INTO `hub`.`announce` (`title`, `text`,`start`,`end`,`status`, `date`) VALUES ('$title','$text','$start','$end','$status',current_timestamp());";


        if($con->query($sql)==true){
    
            echo "Successfully inserted the bill.<br>Please wait for the payment";

        }
        else{
            echo "ERROR: $sql <br>";
        }

        
    }
?>