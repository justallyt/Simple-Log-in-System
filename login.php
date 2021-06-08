<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Log In</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>
      <div class="landing-container">
            <div class="inner-row">
                  <div class="content-box">
                        <div class="icon-section">
                              <img src="icon.png" alt="travel-icon">
                        </div>
                        <div class="content-title">
                              <h1>Hey, good to see you again!</h1>
                              <p class="lead">Enter your email address to generate a password.</p>
                        </div>
                        <div class="content-form">
                              <form action="scripts.php" method="POST">
                                    <label for="email-address">Your email:</label>
                                    <input type="email" name="email" class="form-control">
                                    <label for="password">Your Password:</label>
                                    <input type="text" name="password" class="form-control">
                                    <div class="btn-section">
                                          <button type="submit" name="login">Log In</button>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
       </div>
</body>
</html>