<? php
//    if(isset($_POST['submit'])){
//     $name = $_POST['name'];
//     $subject = $_POST['subject'];
//     $mailFrom = $_POST['email'];
//     $message = $_POST['message'];

//     $mailTo = "Ankur.Aggarwal@georgebrown.ca"
//     $headers = "From: ". $mailFrom;
//     $txt = "You have received an email from ". $name.".\n\n".$message;

//     mail($mailTo,$subject,$txt,$headers);
//     header("Location:index.php?mailsend");
    $message = "Your Form is getting submitted";
    echo "<script type='text/javascript'>alert('$message');</script>";
//    }
//    else{
//        console.log("No form found ")
//    }
?>