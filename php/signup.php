

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styleaayya/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <title>php 01</title>
</head>
<body>
        <div class="container">
           
            <div class="row">
            <div style="display: grid; place-items: center;">
                <img src="pics/setup/logo.png" style="width:170px; ">   
            </div>
                <h1 style="text-align: center; font-family: 'Montserrat', sans-serif; font-weight:700;">
                Create an account</h1>
                <div class="col-md-3"></div>
                
                    <div class="col-md-6 borderstyle" style="background-color:white; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border: none; padding:56px;">
                        
                        <form action="validation/validationlognup.php" method="post">

                            <div class="inputstyle">  
                                <label for="nome">Personal Information</label>    
                                <input type="text" name="nome" id="nome" placeholder="Enter your first name">
                            </div>
                            <div class="inputstyle">   
                                
                                <input type="text" name="prenom" id="prenom" placeholder="Enter your last name">
                                <p  style="font-family: 'Montserrat', sans-serif;font-size: 12px; color:rgb(133, 137, 131); margin-top:5px;">
                                    this will be your Username : firstname.lastname</p>
                            </div>
                            <div class="inputstyle">    
                                <label for="email">Account Security</label>    
                                <input type="email" name="email" id="email" placeholder="Enter your email address">
                            </div>
                            <div class="inputstyle">
                                   
                                <input type="password" name="password" id="password" placeholder="Enter your password">
                            </div>
                            <div>
                                <input type="submit" value="submit" name="submit" class="btn btn-primary" style="background-color: #4c956c;">
                            </div>

                        </form>                     
                    </div>

                <div class="col-md-3"></div>
                </div>
                </div>
</body>
</html>