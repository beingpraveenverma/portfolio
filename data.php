<?php

if (isset($_POST['submit'])){
    
    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $msg = test_input($_POST['msg']);
    



    
    $to='work.praveenverma@gmail.com';
    $subject ='Contact Form';
    $message ="Form details below."."\n\n"."Name: ".$name."\n"."Email: ".$email."\n"."Message: ".$msg;
    $headers="From: ".$email;

    if(mail($to,$subject,$message,$headers)){
        echo "<script type='text/javascript'> 
                alert('Form data is Submitted Succesfull'); 
            </script>" ;
        echo "<a href=index.html>CLICK TO FILL DIFFERENT RESPONSE</a>";
    }
    else {
        echo "something went wrong";
    }
}

?>