<?php
 session_start();

 $username = $_SESSION['username'];
 $password = md5($_SESSION['password']);

 
//login.php
/**
 * Start the session.
 */
 

/**
 * Include our MySQL connection.
 */
include '../connect.php';


if(isset($_COOKIE["type"]))
{
 header("location:../panel.php");
}

$message = '';

if(isset($_POST["login"]))
{
 if(empty($_POST["username"]))
 {
  $message = "<div class='alert alert-danger'>Both Fields are required</div>";
 }
 else
 {
  $query = "SELECT * FROM register WHERE username = :username";
  $statement = $con->prepare($query);
  $statement->execute(
   array(
    'username' => $_POST["username"]
    
   )
  );
 
  $count = $statement->rowCount();
  if($count > 0)
  {
   $result = $statement->fetchAll();
   foreach($result as $row)
   {

    if(md5($_POST["password"]) == $row["password"]) {

     setcookie("type", $_POST['username'], time()+3600, "/");
     header("location:../panel.php");
    }
    else
    {
        echo "username or password wrong";
    }
   }
  }
  else
  {
    echo "username or password is wrong";
}
 }
}
?>