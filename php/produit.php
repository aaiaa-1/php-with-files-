
<?php



$filetoken = fopen("token.txt","r") or die('Ouverture du fichier token impossible !');
    while(!feof($filetoken)){
     $info = fgets($filetoken);
     $array= explode("|",$info);
    // print_r($array);
     
      $nameuser = $array[1].".".$array[2];
           
      $data =file("product/".$nameuser.".txt");
      if($data){
          $line = $data[count($data)-1];
           $chaine = explode("|",$line);
      }
    
      
     
       
        
   $rang =  count($data);
    //   echo '<div class="alert alert-primary" role="alert">
    //  Nombre de produits : '.$rang.' <a href="#" class="alert-link">
    // </div>';

        $fileUser = fopen("product/".$nameuser.".txt","r") or die("Ouverture du fichier fileuser impossible !");
       $i=0;
        while(!feof($fileUser)){
          if($rang==0){
            echo '
            <div class="alert alert-info w-100"  role="alert">
            pas de produits ! 
            </div>
               ';
              exit();
          }
          $i=$i+1;


            $product= fgets($fileUser);
            // echo $product."<br>";
             $array2= explode("|",$product);
             
            
              echo '  
                      <form action="supprimer.php" method="post">
                      
                        
              <div class="card mt-3  shadow p-3 mb-5 bg-body-tertiary rounded" style="max-width: 540px;margin-left:50px">
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
           PN° :     '.$array2[0].'       
              <span class="visually-hidden">unread messages</span>
            </span>
              <div class="row g-0">
                <div class="col-md-4">

                  <img src="'.$array2[3].'" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title" style="font-weight:700;">'.$array2[1].'</h5>
                    
                    <p class="card-text"><small class="text-muted">'.$array2[2].'</small></p>
                    <input type="hidden" name="id"  value='.$array2[0].'  class="btn btn-danger">
                    <input type="submit"  class="btn btn-danger" value="supprimer"></input>
                  </div>
                </div>
              </div>
            </div>

              </form>

  ';


               if($i==$rang){
              break;
           }
        }      
        fclose($fileUser);
  


    break;
   }


  fclose($filetoken);


  require_once "layout/footer.php";

  ?>







