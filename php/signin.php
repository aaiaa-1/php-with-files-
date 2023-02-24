<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styleaayya/style.css">
    <title>Document</title>
</head>
<body >

        <div class="container">
            <div class="row">
                <div style="display: grid; place-items: center;">
                    <img src="pics/setup/logo.png" style="width:170px; ">   
                </div>
                <h1 style="text-align: center; font-family: 'Montserrat', sans-serif; font-weight:700;">
                    Sign In</h1>
                <div class="col-md-3"></div>
                    <div class="col-md-6 borderstyle" style="background-color:white; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border: none; padding:56px;">
                        
                    <form action="validation/validationsignin.php" method="post">

                    <div class="inputstyle">
                    <label for="nom_prenom">Username</label>
                    <input required type="text" name="nom_prenom" id="nom_prenom" placeholder="firstname.lastname"><br></div>
                            <div class="inputstyle">
                                <label for="email">Email</label>    
                                <input required type="email" name="email" id="email" placeholder="example@example.com">
                            </div>
                            <div class="inputstyle">
                                <label for="password">Password</label>  
                                <input required type="password" name="password" id="password" placeholder="Enter the password">
                                <br>
                            </div>
                            <div>
                                <a href="signup.php">créer un nouveau compte</a><br>
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
                          