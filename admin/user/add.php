
<?php require_once  $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/leftbar.php'; ?>

<script type="text/javascript">
    document.title='Add User | VinaEnter Edu';
</script>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Thêm người dùng</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php 
                                    $name = "";
                                    $fullName = "";
                                    if(isset($_POST['submit'])){
                                        $name = $_POST['name'];
                                        $fullName = $_POST['fullname'];
                                        $password = $_POST['password'];
                                        $sqlAddUser = "INSERT INTO users(username,password,fullname) VALUES('{$name}','{$password}','{$fullName}')";
                                        $resultAddUser = $mysqli->query($sqlAddUser);
                                        if($resultAddUser==true){
                                            header('location:/admin/user/index.php?msg=success');
                                            echo "Thêm người dùng thành công";

                                        }   else echo "Có lỗi khi thêm";
                                    }                                   
                                   
                                ?>
                                <form role="form" action="" method="POST">
                                    <div class="form-group">
                                        <label>UserName</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $name;?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>FullName</label>
                                        <input type="text" name="fullname" class="form-control" value="<?php echo $fullName;?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input type="password" name="password" class="form-control"  />
                                    </div>


                                    <button type="submit" name="submit" class="btn btn-success btn-md">Thêm</button>
                                </form>



                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/footer.php'; ?>