
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

<?php require_once "./layout/header.php"; ?>
       
       <div class="alert alert-success" role="alert"> Welcome back <?php  echo $nom; ?> ! </div>
         <div class="container">
             <div class ="row">
                 <div class="col-md-3"></div>
                 <div class="col-md-6">
                 <ul class="list-group">
                 <?php require_once "./informationsUser.php";
                 
                    echo '
                    <h3 style="font-weight: 700; margin:20px; color:#495057;">Your Personal Infos  </h3>
                    <li class="list-group-item">First Name: '.$nom.'  </li>
                    <li class="list-group-item">Last Name:'.$prenom.'</li>
                    <li class="list-group-item">Email :'.$email.' </li>
                    <li class="list-group-item">UID : '.$uid.' </li>
                    ';  

                 ?>

            </ul>
        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>