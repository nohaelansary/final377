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

function NewUser() {
    global $conn;
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $query = "INSERT INTO users (email, password) VALUES ('$email', '$password');";
    $data = query_to_db($conn, $query);
    if($data) {
        echo "
        <!DOCTYPE html>
        <html>
          <head>
              <style type='text/css'>
                .registration {
                  margin-top: 150px;
                }
              </style>
          </head>
          <center>
            <div class ='registration'>
              <h2>Your Registration is Completed.</h2>
              <p><a href ='survey_demo.php'>Find Your Dream Job</a></p>
            </div>
          </center>
        </html>";
    }
}

function SignUp(){
  global $conn;
  $email = $_POST['email'];
  $password = $_POST['psw'];
  $query ="Select* from users where email = '$email'";
  $data = query_to_db($conn, $query);
  if($data->num_rows != 0){
    echo "
    <!DOCTYPE html>
    <html>
      <head>
          <style type='text/css'>
            .registration {
              margin-top: 150px;
            }
          </style>
      </head>
      <center>
        <div class ='registration'>
          <h2>You are already registered</h2>
          <p><a href ='signin_page.php'>Sign In </a></p>
        </div>
      </center>
    </html>";
  }
  else{
    NewUser();
  }
}

if(isset($_POST['submit'])) {
    SignUp();
}


?>
