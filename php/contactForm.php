<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  Contact Details Database Connection Page
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php

header('Location: http://localhost/Demo-Static-Website/contacts.html',true);

 $con=new mysqli("127.0.0.1","root","","EatsLK_DB");

 if($con->connect_error){
    echo"failed";
}
else{
   echo"successfull";
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  Submit Contact Details
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    $sql="INSERT INTO Contacts VALUES('$name', '$email' ,'$subject' ,'$message')";
    $con->query($sql);

}