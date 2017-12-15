<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
      .container {
        background-image: url('../images/home_bg.jpg');
        width: 650px;
        background-repeat: no-repeat;
        margin-top: -100px;
      }
      #signup {
        background-size:500px 500px;
        margin-top:150px;
        margin-bottom:150px;
        margin-right:150px;
        margin-left:150px;
        padding:9px 35px;
      }
      td {
         padding: 10px;
      }
    </style>

</head>
<body>
<center>
  <h1>JobFinder</h1>
  <div class="container">
    <div id = "signup">
      <h3> Sign In to Find Your Dream Job!</h3>
      <table border="0" >
        <form action="signin.php" method="post">
            <tr>
                <td><b>Email</b></td>
                <td><input type="text" placeholder="Enter Email" name="email" required></td>
            </tr>
            <tr>
                <td><b>Password</b></td>
                <td><input type="password" placeholder="Enter Password" name="psw" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Sign In</button></td>
                <td><input type="checkbox" checked="checked"> Remember me</td>
            </tr>
          </table>
        </form>
        <p>Do not have an account? <a href="index.php">Sign Up Here.</a></p>
      </div>
    </div>
</center>

</body>
</html>
