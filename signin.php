<?php

$server = "localhost";
$username = "root";
$password = "root";
$db = "jobfinder";
$port = 3306;

$conn = mysqli_connect($server, $username, $password, $db, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function query_to_db($conn, $sql){
    $result = mysqli_query($conn, $sql);
    return $result;

}

function SignIn() {
    global $conn;
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $query = "SELECT* from users Where email = '$email' AND password ='$password'";
    $data = query_to_db($conn, $query);
    if($data->num_rows != 0) {
        echo "
        <!DOCTYPE html>
        <html>
          <head>
              <style type='text/css'>
                .signedin {
                  margin-top: 150px;
                }
              </style>
          </head>
          <center>
            <div class ='signedin'>
              <h2>Welcome Back!</h2>
              <p><a href ='survey_demo.php'>Find Your Dream Job</a></p>
            </div>
          </center>
        </html>";
    }
    else{
      echo "
      <html>
        <head>
            <style type='text/css'>
              .signedin {
                margin-top: 150px;
              }
            </style>
        </head>
        <center>
          <div class ='signedin'>
            <h2><a href ='signin_page.php'>Incorrect Try Again</a></h2>
          </div>
        </center>
      </html>";
    }
}
if(isset($_POST['submit'])) {
    SignIn();
}


?>
