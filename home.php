<?php 
    session_start();


    if(!$_SESSION['logged_in']){
        echo "<script>
          alert('Please log in to access the website');
        window.location = 'login.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Welcome Traveller</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>
      <div class="home-container">
            <div class="inner-row">
                  <div class="home-content">
                       <div class="icon-section">
                              <img src="icon.png" alt="travel-icon">
                        </div>
                        <div class="content-title">
                              <h1>Welcome to our Site</h1>
                              <p class="lead" id='text'>Rich experiences are found through travelling the world. We are happy to have you join us in this excursion.</p>
                        </div>
                         <div class="btn-section">
                               <form action="scripts.php" method="POST">
                                     <button name="logout">Log out</button>
                               </form>
                         </div>
                  </div>
            </div>
      </div>
</body>
</html>