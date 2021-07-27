<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" type="text/css" href="sign-up.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
        
        <title>Login</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <span>Get 15 days free access Educore premium</span>
                <span>Login to continue</span>
            </div>
            <form action="index.php" method="POST">
                <div class="form-group">
                     <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="enter email">
                   
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control"  name="password"placeholder="enter password"> 
                       
                    <!-- this input will be submitted as password -->
                    
                </div>
                 <i class= "bi bi-eye-slash" id="togglePassword" id="password"></i>

                
                <button type="submit" class="btn btn-primary">login</button>
             
            </form>
            <div class="option">
                <span id="horizontal-line"></span>
                <span>Or</span>
                <span id="horizontal-line"></span>
            </div>
            <div class="icons">
                <button class="form-control mb-3"><img class="text-icon" src="/images/facebook-icon.png" alt="">Continue
                    with
                    facebook</button>
                <button class="form-control mb-3"><img class="text-icon" src="/images/google-icon.png" alt="">Continue
                    with
                    google</button>
                <button class="form-control mb-3"><img class="text-icon" src="/images/apple-icon.png" alt="">Continue
                    with apple </button>
            </div>

            <span id="end">Not a member yet ? &nbsp;<a href="sign-up.php">login</a></span>
        </div>
        <script src="/js/sign-in.js"></script>

        

        
    </body>

</html>