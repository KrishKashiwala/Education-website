<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" type="text/css" href="sign-up.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
       
        <title>Sign In</title>
    </head>

    <body>
        <div class="container">
            <div class="des">
                <span>Become a Educore Member</span>
                <span>Sign Up Now</span>
            </div>
            <form action="userregistration.php" method="POST">
                <div class="form-group">
                      <label for="name"> Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="enter full name">
                  
                </div>

                <!-- this input will be submitted as fullname -->
                <div class="form-group">
                     <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="enter email">
                    <!-- this input will be submitted as email -->
                   
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="enter password">
                    <!-- this input will be submitted as password -->
                    
                    
                </div>
                 <i class="bi bi-eye-slash" id="togglePassword"></i>
               
                <button type="submit" class="btn btn-primary">Signin</button>
            </form>
            <small>By signing up , you will agree to our &nbsp;<a href="/">Terms Of Use</a>&nbsp;and &nbsp;<a
                    href="/">Privacy
                    Policy</a>
            </small>
            <span class="hr">
                <span id="end">Already an Educore member ? &nbsp;<a href="login.php">sign-up</a></span>
        </div>
        <script src="/js/sign-in.js"></script>
    </body>

</html>