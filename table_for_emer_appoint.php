<?php
$link = mysqli_connect("localhost", "root", "", "eyecare");
if ($link === false) {
    die("Error: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE TABLE emergency_form_hospital (
    First VARCHAR(50) NOT NULL,
    Last VARCHAR(50) ,
    Email VARCHAR(50),
    Phone VARCHAR(50) ,
    Dob varchar(30),
    Gender VARCHAR(10) NOT NULL,
    Address VARCHAR(200) NOT NULL,
    efirst VARCHAR(50) NOT NULL,
    elast varchar(50) ,
    ephone varchar(60) not null,
    medicine varchar(10) not null,
    if_yes varchar(90) )";

if (mysqli_query($link, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
