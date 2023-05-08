<?php 

    include_once'classes/register.php';
    $re=new register();

    if(isset($_GET['id'])){
        $id=base64_decode($_GET['id']);
    }

    if( $_SERVER['REQUEST_METHOD']== 'POST'){
        $register=$re->updateStudent($_POST,$_FILES,$id);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card shadow">
                    <?php
                        if(isset($register)){
                            ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong><?=$register ?></strong> 
                                        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button> -->
                                </div>

                            <?php
                        }                    
                    
                    
                    ?>

                        <div class="card-header">
                            <div class="row">
                                 <div class="col-md-6">Update Student Info</div>
                                <div class="col-md-6 ">
                                    <a href="index.php" class="btn btn-outline-success float-end">Manage Student</a>
                                </div>
                        </div>
                      </div>
                        <div class="card-body">
                        <?php
                            $getStd=$re->getStdById($id);
                            if($getStd){
                                while($row=mysqli_fetch_assoc($getStd)){
                                    ?>


                                <form action="" method="post" enctype="multipart/form-data">
                               
                               <div class="form-group row">
                                   <div class="col-md-3 col-form-label">Name</div>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control" name="name" value="<?=$row['name'] ?>">
                                   </div>
                               </div>
                               <div class="form-group row mt-3">
                                   <div class="col-md-3 col-form-label">Email</div>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control" name="email" value="<?=$row['email'] ?>">
                                   </div>
                               </div>
                               <div class="form-group row mt-3">
                                   <div class="col-md-3 col-form-label">phone</div>
                                   <div class="col-md-9">
                                       <input type="number" class="form-control" name="phone" value="<?=$row['phone'] ?>">
                                   </div>
                               </div>
                               <div class="form-group row mt-3">
                                   <div class="col-md-3 col-form-label">photo</div>
                                   <div class="col-md-9">
                                       <input type="file" class="form-control" name="photo" >
                                       <img src="<?=$row['photo'] ?>" alt="" style="width:150px" class="img-thumbnail" >
                                   </div>
                               </div>
                               <div class="form-group row mt-3">
                                   <div class="col-md-3 col-form-label">Address</div>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control" name="address" value="<?=$row['address'] ?>">
                                   </div>
                               </div>

                               <div class="form-group row mt-3">
                                   <div class="col-md-3 col-form-label"></div>
                                   <div class="col-md-9">
                                       <input type="submit" class="btn btn-outline-success" value="Update Student" />
                                   </div>
                               </div>

                           </form>



                                        <?php

                                }
                            }
                        
                        
                        
                        
                        ?>



                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   


<link rel="stylesheet" href="js/jquery-3.6.0.min.js">
<link rel="stylesheet" href=js/bootstrap.min.js">
</body>
</html>
