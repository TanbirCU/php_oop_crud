<?php 

    include_once'classes/register.php';
    $re=new register();

    if(isset($_GET['delStd'])){
        $id=base64_decode($_GET['delStd']);
        $delStudent=$re->delStudent($id);
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
            <div class="row justify-content-center">
                <div class="col-md-12 mx-auto">
                    <div class="card shadow">
                    <?php
                        if(isset($delStudent)){
                            ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong><?=$delStudent ?></strong> 
                                        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button> -->
                                </div>

                            <?php
                        }                    
                    
                    
                    ?>

                      <div class="card-header">
                      <div class="row">
                            <div class="col-md-6">Manage Student</div>
                            <div class="col-md-6 ">
                                <a href="addStd.php" class="btn btn-outline-success float-end">Add Student</a>
                            </div>
                        </div>
                      </div>
        
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Photo</th>
                                    <th>Adress</th>
                                    <th>Action</th>
                                </tr>

                                <?php 
                                    $allStd=$re->allStudent();
                                    if($allStd){
                                        while($row=mysqli_fetch_assoc($allStd)){
                                            ?>
                                        <tr>
                                            <td><?=$row['name'] ?></td>
                                            <td><?=$row['email'] ?></td>
                                            <td><?=$row['phone'] ?></td>
                                            <td><img style="width:100px" src="<?=$row['photo'] ?>" class="img-fluid" alt=""?></td>
                                            <td><?=$row['address'] ?></td>
                                            <td>
                                                <a href="edit.php?id=<?=base64_encode($row['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="?delStd=<?base64_encode($row['id'])?>" onclick="return confirm('Are you sure to delete')" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                            
                                        </tr>
                                     <?php

                                        }
                                    }
                                
                                
                                
                                ?>


                               



                            </table>
                          
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
