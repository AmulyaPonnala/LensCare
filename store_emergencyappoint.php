<?php
            $link = mysqli_connect("localhost", "root", "", "Eyecare");
            if($link === false)
            {
                die("error: could not connect". mysqli_connect_error());
            }
            $sql = "INSERT INTO emergency_form_hospital(First,
            Last,
            Email,
            Phone,
            Dob,
            Gender,
            Address,
            efirst,
            elast,
            ephone,
            medicine,
            if_yes) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            if($stmt = mysqli_prepare ($link, $sql))
            {
            mysqli_stmt_bind_param($stmt, "ssssssssssss", $First_Name,$last_name, $Email, $Phone,$dob,$gender,$Address, $efirst, $elast, $ephone, $medicine, $if_yes);
                $First_Name = $_POST['fName'];
                $last_name = $_POST['lName'];
                $Email = $_POST['Email'];
                $Phone = $_POST['Phone'];
                $dob = $_POST['Text'];
                $gender = $_POST['gen'];
                $Address= $_POST['Message'];
                $efirst = $_POST['efname'];
                $elast = $_POST['elname'];
                $ephone = $_POST['ephone'];
                $medicine = $_POST['selector1'];
                $if_yes = $_POST['emessage'];
                
                

                mysqli_stmt_execute($stmt);
               header("location: eyecare.php");
             // echo "RECORD INSERTED SUCCESSFULLY";//: <br> <br>$first_name <br> <br>$last_name <br><br> $email <br> <br>$regd_id <br><br> $section <br><br> $department <br><br> $address <br><br> $mobile_no <br> <br>$year_of_joining  ";
            }
            else
            {
                echo "error: could not connect $sql." . mysqli_error($link);
    
            }
            mysqli_stmt_close($stmt);
            mysqli_close ($link);

?>