<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title href="signup_page.html">Login</title>
    
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                       
                <!-------------      image     ------------->
                
                <img src="images/white.png" alt="">
                
                
            </div>

            <div class="col-md-6 right">
                
                <div class="input-box">
                   <form action="./connection.php" method="POST">
                   <header>Create account</header>
                   <div class="input-field">
                        <input type="text" name="first_name" class="input" id="first_name" required  >
                        <label for="first_name">First Name</label> 
                    </div> 
                    <div class="input-field">
                        <input type="text" name="last_name" class="input" id="last_name" required autocomplete="off" >
                        <label for="last_name">Last Name</label> 
                    </div>
                    <div class="input-field">
                        <input type="text" name="email" class="input" id="email" required autocomplete="off" >
                        <label for="email">Email</label> 
                    </div>
                   <div class="input-field">
                        <input type="password" name="password" class="input" id="pass" required="" >
                        <label for="pass">Password</label>
                    </div> 
                   <div class="input-field">
                        <input type="password" class="input" id="pass2" required>
                        <label for="pass2">Confirm Password</label>
                    </div> 
                   <div class="input-field">
                        
                        <input  type="submit" name="submit" class="submit" value="Sign Up" >
                    </form>
                        <script>
                            function home(){
                                window.location.href='home.html'
                            }
                            
                        </script>
                    
                   </div> 
                   <div class="signin">
                    <span>Already have an account? <a href="login_page.html">Log in here</a></span>
                   </div>
                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>