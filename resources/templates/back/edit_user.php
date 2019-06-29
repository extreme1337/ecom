<?php 

if(isset($_GET['id'])){
    $query = query("SELECT * FROM users WHERE user_id =".escape_string($_GET['id']) . "");
    confirm($query);
    
    while($row = fetch_array($query)){
        $username = escape_string($row['username']);
        $email = escape_string($row['email']);
        $password = escape_string($row['password']);
        
    }
    
    update_user(); 
}




?>
                        <h1 class="page-header">
                            Edit User
                            <small><?php echo $username; ?></small>
                        </h1>

                      <div class="col-md-6 user_image_box">
                          
                    <a href="#" data-toggle="modal" data-target="#photo-library"><img class="img-responsive" src="" alt=""></a>

                      </div>


                    <form action="" method="post" enctype="multipart/form-data">

  


                        <div class="col-md-6">

<!--
                           <div class="form-group">
                           
                            <input type="file" name="file">
                               
                           </div>
-->


                           <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" value="<?php echo $username; ?>" class="form-control"  >
                               
                           </div>
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" value="<?php echo $email; ?>" name="email" class="form-control"   >
         
                            </div>


<!--
                            <div class="form-group">
                                <label for="first name">First Name</label>
                            <input type="text" name="first_name" class="form-control"  >
                               
                           </div>

                            <div class="form-group">
                                <label for="last name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" >
                               
                           </div>
-->


                            <div class="form-group">
                                <label for="password">Password</label>
                            <input type="password" value="<?php echo $password; ?>" name="password" class="form-control">
                               
                           </div>

                            <div class="form-group">

<!--                            <a id="user-id" class="btn btn-danger" href="">Delete</a>-->

                            <input type="submit" name="update_user" class="btn btn-primary pull-right" value="Update" >
                               
                           </div>


                            

                        </div>

                      

            </form>





    