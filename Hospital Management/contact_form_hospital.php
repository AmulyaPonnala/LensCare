<?php
    $link = mysqli_connect("localhost", "root", "", "Eyecare");
    if($link === false)
    {
        die("error: could not connect. " .mysqli_connect_error());
    }
    $sql = "create table contact_form_hospital(Name varchar(50) not null, Email varchar(50),Subject varchar(50) not null,
     Message varchar(250) not null)";
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