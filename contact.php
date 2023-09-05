<?php


$connection = mysqli_connect('localhost','root');

// if($connection){
//     echo "success";
// }else{
//     echo "fail";
// }

mysqli_select_db($connection,'personalwebdata');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userdata (name,email,mobile,comment)
values ('$name','$email','$mobile','$comment')";

mysqli_query($connection, $query);

header('location:index.php');

//  if(isset($_POST['submit'])) {
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $subject = $_POST['subject'];
    //     $message = $_POST['message'];
      
        
    //     $mailTo = "omganeshpatil@gmail.com";
    //     $headers = "form: ".$email;
    //     $txt = "you have recived an e-mail from ".$name.".\n\n".$message;
    
    
    //     mail($email,$subject,$txt,$headers);
    //     header("Location: contact.php?emailsend");
    
    // }

?>