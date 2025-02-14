<?php
            $link = mysqli_connect("localhost", "root", "", "Eyecare");
            if($link === false)
            {
                die("error: could not connect". mysqli_connect_error());
            }
            $sql = "INSERT INTO emergency_form_hospital(Name, Email, Phone, Appoint_date,Department,Doctor, Message) VALUES (?,?,?,?,?,?,?)";
            if($stmt = mysqli_prepare ($link, $sql))
            {
            mysqli_stmt_bind_param($stmt, "sssssss", $First_Name, $Email, $Phone,$Appoint_date,$Department,$Doctor, $Message);
                $First_Name = $_POST['name'];
                $Email = $_POST['email'];
                $Phone = $_POST['phone'];
                $Appoint_date = $_POST['date'];
                $Department = $_POST['department'];
                $Doctor = $_POST['doctor'];
                $Message = $_POST['message'];
                
                

                mysqli_stmt_execute($stmt);
               // header("location: alc.php");
              echo "RECORD INSERTED SUCCESSFULLY";//: <br> <br>$first_name <br> <br>$last_name <br><br> $email <br> <br>$regd_id <br><br> $section <br><br> $department <br><br> $address <br><br> $mobile_no <br> <br>$year_of_joining  ";
            }
            else
            {
                echo "error: could not connect $sql." . mysqli_error($link);
    
            }
            mysqli_stmt_close($stmt);
            mysqli_close ($link);

?>