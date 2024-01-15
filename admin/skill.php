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
      <link rel="stylesheet" href="vendor/css/custom.css">
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
               <?php
                  $sql = "SELECT * FROM `skills`";
                  $query = mysqli_query($conn, $sql);
                  $result = mysqli_fetch_assoc($query);
               ?>
               <?php
                  if(isset($_POST['update'])){
                     $html = $_POST['html'];
                     $css = $_POST['css'];
                     $js = $_POST['js'];
                     $bootstrap = $_POST['bootstrap'];
                     $php = $_POST['php'];
                     $exprience = $_POST['exprience'];
                     $project_com = $_POST['project_com'];
                     $project_run = $_POST['project_run'];

                     $updated_at = date("Y-m-d");

                     $sql2 = "UPDATE `skills` SET `html`='$html',`css`='$css',`js`='$js',`bootstrap`='$bootstrap',`php`='$php',`exprience`='$exprience',`project_com`='$project_com',`project_run`='$project_run',`updated_at`='$updated_at'";
                     $query2 = mysqli_query($conn, $sql2);
                     if($query2){
                        header("Location: skill.php");
                     }
                  }
               ?>
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <!-- Page Heading -->
                  <h5 class="mb-2 text-gray-800">Skills</h5>
                  <!-- DataTales Example -->
                  <div class="card shadow">
                     <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="html" class="form-label text-uppercase fw-bold">HTML</label>
                                 <input type="number" name="html" value="<?= $result['html'] ?>" id="html" class="form-control">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="css" class="form-label text-uppercase fw-bold">CSS</label>
                                 <input type="number" name="css" value="<?= $result['css'] ?>"  id="css" class="form-control">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="js" class="form-label text-uppercase fw-bold">JS</label>
                                 <input type="number" name="js" id="js" value="<?= $result['js'] ?>"  class="form-control">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="bootstrap" class="form-label text-uppercase fw-bold">Bootstrap</label>
                                 <input type="number" name="bootstrap" value="<?= $result['bootstrap'] ?>"  id="bootstrap" class="form-control">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="php" class="form-label text-uppercase fw-bold">php</label>
                                 <input type="number" name="php" value="<?= $result['php'] ?>"  id="php" class="form-control">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="exprience" class="form-label text-uppercase fw-bold">Exprience</label>
                                 <input type="number" name="exprience" value="<?= $result['exprience'] ?>"  id="exprience" class="form-control">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="project_com" class="form-label text-uppercase fw-bold">Project Completed</label>
                                 <input type="number" value="<?= $result['project_com'] ?>"  name="project_com" id="project_com" class="form-control">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="project_run" class="form-label text-uppercase fw-bold">Project Running</label>
                                 <input type="number" value="<?= $result['project_run'] ?>"  name="project_run" id="project_run" class="form-control">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4 align-self-end">
                                <input type="submit" class="btn btn-primary" name="update" value="UPDATE">
                                 <a href="index.php" class="btn btn-dark">Back</a>
                              </div>
                           </div>
                        </form>
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
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="vendor/js/sb-admin-2.min.js"></script>
      <!-- Page level plugins -->
      <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
      <script>
         CKEDITOR.replace( 'blog_body' );
      </script>
   </body>
</html>