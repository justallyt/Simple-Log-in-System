<?php 
session_start();


//generating passwords
if(isset($_POST['submit'])){
      $email = $_POST['email'];

      if($email === ""){
         echo "<script>alert('Please enter an email address to generate a password')
             window.location = 'index.html';
         </script>";
      }else{
         $user = false;
         $readFile = fopen("data.txt","r") or die("Sorry cannot open file");
         while(!feof($readFile)){
            $line = fgets($readFile);
            $arrayLines = explode("-",$line);
            if(trim($arrayLines[0]) == $_POST['email']){
              $user = true;
               break;
            }
          }
        fclose($readFile);    

        if($user){
          echo "<script>alert('Email address already exists')
              window.location = 'index.html';
          </script>";

        }else{
         $random_pass = mt_rand(10000,99999);
         $file = fopen("data.txt","a") or die("Sorry cannot open file");
         fwrite($file,$email."-".$random_pass. "\r\n");
        
         //mail functionality
         $subject = "PASSWORD GENERATION FROM SITE";
         $message = "Thank you for your interest in our site. Your generated password is: ".$random_pass. "\r\n You can use this to login to the site";
         $email_from = "enter your email address here!!!!";
         $headers = "From: ".$email_from;

         $send_mail = mail($email,$subject,$message,$headers);
         if($send_mail){
            echo "<script>alert('Your generated password has been sent to your email');
                     window.location = 'login.php';
            </script>";
         }else{
            echo "<script>alert('There was an error generating your password.');
            
            </script>";
         }
         
         fclose($file);
        }
      }
}

//Logging in User

if(isset($_POST['login'])){
   $email_input = $_POST['email'];
   $password_input = $_POST['password'];

   if(empty($email_input) || empty($password_input)){
      echo "<script>alert('Please enter both your email address and password')
              window.location = 'login.php';
      </script>";
   }else{
      $data_read = fopen('data.txt','r') or die("Sorry cannot open file");
      $status = false;
      while(!feof($data_read)){
         $data_line = fgets($data_read);
         $data_list = explode("-",$data_line);

         if(trim($data_list[0]) == $email_input && trim($data_list[1]) == $password_input){
            $status = true;
            break;
         }
      }
      if($status){
         echo "<script>
                window.location = 'home.php'; 
         </script>";
         $_SESSION['logged_in'] = true;
      }else{
         echo "<script>alert('Log in failed due to incorrect password or email. Please try again')
               window.location = 'login.php';
         </script>";
      }

      fclose($data_read);
   }
}
//Logging out user
if(isset($_POST['logout'])){
   $_SESSION['logged_in'] = false;
   echo "<script>window.location = 'login.php'</script>";
}