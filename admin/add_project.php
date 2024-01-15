<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Dashboard</title>
      <!-- Custom fonts for this template-->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="vendor/css/sb-admin-2.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="../../vendor/css/custom.css">
   </head>
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <?php include "component/sidebar.php" ?>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <?php include "component/header.php" ?>
               <!-- End header -->
               <!-- Begin Page Content -->
               <div class="container-fluid">
               <div class="row justify-content-center">
                     <div class="col-12 col-md-10 col-lg-8">
                        <div class="card">
                           <div class="card-body">
                           <?php
                                $sql = "SELECT * FROM `project_catagory`";
                                $query = mysqli_query($conn, $sql);
                                if(isset($_POST["submit"])){
                                    $image_name = $_FILES['project_img']['name'];
                                    $tmp_name= $_FILES['project_img']['tmp_name'];

                                    $category_name = $_POST['project_category'];

                                    $sql = "INSERT INTO `projocts`(`projects_image`, `category_id`) VALUES ('$image_name','$category_name')";
                                    $query = mysqli_query($conn, $sql);
                                    if($query){
                                        move_uploaded_file($tmp_name, "upload./".$image_name);
                                        $success = "Data Insert Successfull";
                                     }else{
                                        $error = "Data Not Inserted";
                                     }
                                }

                           ?>
                               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                                 <h4 class="fs-4">Add Project</h4>
                                 <?php
                                    if(isset($success)){
                                 ?>
                                       <div class="alert alert-info alert-dismissible fade show" role="alert">
                                          <strong><?php echo $success ?></strong>
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                       </div>
                                 <?php
                                    }
                                 ?>
                                 <?php
                                    if(isset($error)){
                                 ?>
                                       <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          <strong><?php echo $error ?></strong>
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                       </div>
                                 <?php
                                    }
                                 ?>
                                 <hr>
                                <div class="mb-3 mt-3">
                                  <label for="project_img" class="form-label">Project Image:</label>
                                  <input type="file" class="form-control shadow-none" id="project_img"  name="project_img">
                                </div>
                                <div class="mb-3 mt-3">
                                  <label for="project_category" class="form-label">Project Category:</label>
                                  <select class="form-select shadow-none" id="project_category"  name="project_category">
                                    <option value="">Select Category</option>
                                    <?php foreach($query as $item){ ?>
                                        <option value="<?= $item['id'] ?>"><?= $item['category_name'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <a href="project.php" class="btn btn-danger">Back</a>
                              </form> 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto"> <span>Copyright &copy; Raihan's ICT 2022</span> </div>
               </div>
            </footer>
            <!-- End of Footer -->
         </div>
         <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>
      <!-- Bootstrap core JavaScript-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="../../vendor/jquery/jquery.min.js"></script>
      <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="../../vendor/js/sb-admin-2.min.js"></script>
      <!-- Page level plugins -->
      <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
      <script>
         CKEDITOR.replace( 'blog_body' );
      </script>
   </body>
</html>