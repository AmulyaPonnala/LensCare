<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EyeCare</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css" />
</head>

    <body class="form-login-body"> 
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto login-desk">
                       <div class="row">
                            <div class="col-md-7 detail-box">
                                <img class="logo" src="assets/images/logo.png" alt=""> 
                                <div class="detailsh">
                                     <img class="help" src="assets/images/help.png" alt="">
                                    <h3>24 x 7 Premium Chat Support</h3>
                                    <p>blow off well pardon me old lurgy absolutely bladdered bodge</p>
                                </div>
                            </div>
                            <div class="col-md-5 loginform">
                                 <h4>Welcome !</h4>                   
                                 <p>Register your Account</p>
                                 <div class="login-det">
                                    <div class="form-row">
                                         <label for="">Username</label>
                                             <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="far fa-user"></i>
                                                </span>
                                              </div>
                                              <input type="text" name = "username" class="form-control" placeholder="Enter Username" aria-label="Username" aria-describedby="basic-addon1">
                                         </div>
                                    </div>
                                     <div class="form-row">
                                         <label for="">Password</label>
                                             <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="fas fa-lock"></i>
                                                </span>
                                              </div>
                                              <input type="text" name = "password"class="form-control" placeholder="New Password" aria-label="Username" aria-describedby="basic-addon1">
                                         </div>
                                    </div>

                                    <div class="form-row">
                                        <label for="">Password</label>
                                            <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                               <span class="input-group-text" id="basic-addon1">
                                                   <i class="fas fa-lock"></i>
                                               </span>
                                             </div>
                                             <input type="text" name = "confirm_password" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                   </div>
                                    
                                   <!-- <p class="forget"><a href="register.php">Forget Password?</a></p>-->
                                    
                                    <button class="btn btn-sm btn-danger">Login</button>
                                    
                                    
                                 
                                    
                                 </div>
                            </div>
                       </div>
                      
                    </div>
                </div>
            </div>
        </form>
    </body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Free Tour and Travel Website Tempalte | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>
             
             
             
    </body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>