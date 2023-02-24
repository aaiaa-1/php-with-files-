


<div class="container" style="margin-top:90px;">
      <div class="row">
           <div class="col-md-3"></div>
           
           <div class="col-md-6" >
              <h3 style="font-weight: 700; margin:20px; color:#495057;">Add a new product :</h3>

           <form action="submitproduct.php" method="post" enctype="multipart/form-data" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding:30px; border-radius:10px">

                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="Enter the name of the Product">
                  </div>
                  <label for="fileToUpload">Image</label>
                  <br>
                  <input type="file"  id="fileToUpload" name="fileToUpload"> 
                  
                  <div class="mb-3">
                    <br>
                    <label for="formGroupExampleInput2" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description"  id="formGroupExampleInput2" placeholder="Enter an appropriate description for your product">
                  </div>


                <input type="submit" value="submit" name="submit">


          </form>



        </div>
           <div class="col-md-3"></div>
      </div>
</div>



