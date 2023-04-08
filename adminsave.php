<?php

$emaill = $_POST["adminemail"];
$password = $_POST["adminpassword"];
echo $emaill;
$con = mysqli_connect("localhost", "root", "Tan.1234", "contactusinfo");
if($con->connect_error)
{
    die("failed to connect: ".$con->connect_error);
}
else
{
    $stmt = $con->prepare("SELECT * FROM admininfo WHERE Email= ? ");
    $stmt-> bind_param("s", $emaill);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0)
    {
        $data = $stmt_result->fetch_assoc();
        
    }
    else{
        echo "Invalid Email";
    }


}
// if(isset($_POST['adminlogin']))
//  {
//      $admin_query = "SELECT * FROM 'admininfo' WHERE 'Email' = '$emaill'
//      AND 'Passwrd' = '$password";
//      $resultt = mysqli_query($con, $admin_query);
//      if(mysqli_($resultt)==1)
//      {
//          session_start();
//          $_SESSION['AdminLoginID'] = $_POST['Email'];
//          header("location: contactform.php");
//      }
//      else{
//          echo"incorrect";
//      }
 
//  }

?>

