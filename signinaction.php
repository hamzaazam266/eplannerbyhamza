 <?php 
session_start();
if(isset($_POST['login']))
{
    include 'conn.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $chek = mysqli_query($con, "SELECT * FROM `users` WHERE u_email='$email' AND u_password='$password'");
    if(mysqli_num_rows($chek)>0)
    {
        $allData = mysqli_fetch_assoc($chek);
        $_SESSION['user'] = $allData;
        header("location:index.php");
    }
    else
    {
        echo $_SESSION['msg'] = 'Invalid Login Cardentials';
        header("location:Dashboard/login.html");
    }
}
?>