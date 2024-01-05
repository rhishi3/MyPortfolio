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
                  $sql = "SELECT * FROM `about`";
                  $query = mysqli_query($conn, $sql);
                  $result = mysqli_fetch_assoc($query);
               ?>
               <?php
                  if(isset($_POST['update'])){
                     $logo_name = $_FILES['logo']['name'];
                     $logo_tmp_name= $_FILES['logo']['tmp_name'];

                     $about_name = $_FILES['about_image']['name'];
                     $about_tmp_name= $_FILES['about_image']['tmp_name'];

                     $name = $_POST['auth_name'];
                     $address = $_POST['address'];
                     $email = $_POST['email'];
                     $phone = $_POST['phone'];
                     $fb_url = $_POST['fb_url'];
                     $linkedin_url = $_POST['linkedin_url'];
                     $github_url = $_POST['github_url'];
                     $auth_des = $_POST['auth_des'];

                     $updated_at = date("Y-m-d");

                     $logo_destination = "upload/about/". $result["logo"];
                     $aboutImage_destination = "upload/about/". $result["about_image"];

                     if(empty($logo_name) && empty($about_name)){
                        $sql = "UPDATE `about` SET `auth_name`='$name',`auth_des`='$auth_des',`address`='$address',`email`='$email',`phone`='$phone',`fb_url`='$fb_url',`github_url`='$github_url',`linkedin_url`='$linkedin_url',`updated_at`='$updated_at'";
                        $query = mysqli_query($conn, $sql);
                     }elseif(empty($logo_name)){
                        $sql = "UPDATE `about` SET `about_image`='$about_name',`auth_name`='$name',`auth_des`='$auth_des',`address`='$address',`email`='$email',`phone`='$phone',`fb_url`='$fb_url',`github_url`='$github_url',`linkedin_url`='$linkedin_url',`updated_at`='$updated_at'";
                        $query = mysqli_query($conn, $sql);
                        move_uploaded_file($about_tmp_name, "upload/about./".$about_name);
                        unlink($aboutImage_destination);
                     }elseif(empty($about_name)){
                        $sql = "UPDATE `about` SET `logo`='$logo_name',`auth_name`='$name',`auth_des`='$auth_des',`address`='$address',`email`='$email',`phone`='$phone',`fb_url`='$fb_url',`github_url`='$github_url',`linkedin_url`='$linkedin_url',`updated_at`='$updated_at'";
                        $query = mysqli_query($conn, $sql);
                        move_uploaded_file($logo_tmp_name, "upload/about./".$logo_name);
                        unlink($logo_destination);
                     }else{
                        $sql = "UPDATE `about` SET `logo`='$logo_name',`about_image`='$about_name',`auth_name`='$name',`auth_des`='$auth_des',`address`='$address',`email`='$email',`phone`='$phone',`fb_url`='$fb_url',`github_url`='$github_url',`linkedin_url`='$linkedin_url',`updated_at`='$updated_at'";
                        $query = mysqli_query($conn, $sql);
                        move_uploaded_file($about_tmp_name, "upload/about./".$about_name);
                        move_uploaded_file($logo_tmp_name, "upload/about./".$logo_name);
                        unlink($aboutImage_destination);
                        unlink($logo_destination);
                     }
                  }
               ?>
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <!-- Page Heading -->
                  <h5 class="mb-2 text-gray-800">About</h5>
                  <!-- DataTales Example -->
                  <div class="card shadow">
                     <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="logo" class="form-label text-uppercase fw-bold">Logo</label>
                                 <input type="file" name="logo" id="logo" class="form-control">
                                 <img src="upload/about/<?= $result['logo'] ?>" alt="" width="80" class="mt-2">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="about_image" class="form-label text-uppercase fw-bold">About Image</label>
                                 <input type="file" name="about_image" id="about_image" class="form-control">
                                 <img src="upload/about/<?= $result['about_image'] ?>" alt="" width="80" class="mt-2">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="auth_name" class="form-label text-uppercase fw-bold">Name</label>
                                 <input type="text" value="<?= $result['auth_name'] ?>" name="auth_name" id="auth_name" class="form-control" placeholder="Name">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="address" class="form-label text-uppercase fw-bold">Address</label>
                                 <input type="text" name="address" value="<?= $result['address'] ?>" id="address" class="form-control" placeholder="Address">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="email" class="form-label text-uppercase fw-bold">Email</label>
                                 <input type="text" name="email" value="<?= $result['email'] ?>" id="email" class="form-control" placeholder="Email">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="phone" class="form-label text-uppercase fw-bold">Phone</label>
                                 <input type="text" name="phone" value="<?= $result['phone'] ?>" id="phone" class="form-control" placeholder="Phone">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="fb_url" class="form-label text-uppercase fw-bold">Facebook URL</label>
                                 <input type="text" name="fb_url" value="<?= $result['fb_url'] ?>" id="fb_url" class="form-control" placeholder="Facebook URL">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="github_url" class="form-label text-uppercase fw-bold">Github URL</label>
                                 <input type="text" name="github_url" value="<?= $result['github_url'] ?>" id="github_url" class="form-control" placeholder="Github URL">
                              </div>
                              <div class="col-12 col-md-6 col-lg-4 mt-4">
                                 <label for="linkedin_url" class="form-label text-uppercase fw-bold">Linkedin URL</label>
                                 <input type="text" name="linkedin_url" value="<?= $result['linkedin_url'] ?>" id="linkedin_url" class="form-control" placeholder="Linkedin URL">
                              </div>
                              <div class="col-12 mt-4">
                                 <label for="auth_des" class="form-label text-uppercase fw-bold">Description</label>
                                 <textarea name="auth_des" rows="5" id="auth_des" class="form-control" placeholder="Description"><?= $result['auth_des'] ?></textarea>
                              </div>
                              <div class="col-12 mt-4">
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