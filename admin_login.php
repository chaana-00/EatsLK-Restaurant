<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  Admin Login - View Databse Connection Page
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
$login_username=$_POST['admin_username'];
$login_password=$_POST['admin_password'];

if($login_username=='admin' && $login_password=='pass'){
    header("Location: http://localhost/Demo-Static-Website/php/database_content.php");
}else{
    header('Location: http://localhost/Demo-Static-Website/login.html',true);
}
?>