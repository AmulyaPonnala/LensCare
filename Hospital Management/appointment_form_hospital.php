<?php
    $link = mysqli_connect("localhost", "root", "", "Eyecare");
    if($link === false)
    {
        die("error: could not connect. " .mysqli_connect_error());
    }
    $sql = "create table appointment_form_hospital(Name varchar(50) not null, Email varchar(50),Phone varchar(50) not null,Appoint_date varchar(50) not null,
     Department varchar(250) not null, Doctor varchar(200) not null, Message varchar(90) not null)";
    if(mysqli_query ($link, $sql))
    {
        echo "table created successfully";
    }
    else
    {
        echo "error: could not able to execute $sql" . mysqli_error($link);
    }
    mysqli_close($link);
?>