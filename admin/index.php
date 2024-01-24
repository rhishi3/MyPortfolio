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
               <?php
                  $sql = "SELECT * FROM `contact`";
                  $result = mysqli_query($conn, $sql);
               ?>
               <!-- End header -->
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                       <tr>
                                          <th>Sr.No</th>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Subject</th>
                                          <th>Massage</th>
                                          <th colspan="2">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php $count = 1 ?>
                                       <?php foreach($result as $item){ ?>
                                          <tr>
                                             <td><?= $count++ ?></td>
                                             <td>
                                                <p><?= $item['name'] ?></p>
                                             </td>
                                             <td>
                                                <p><?= $item['email'] ?></p>
                                             </td>
                                             <td>
                                                <p><?= $item['subject'] ?></p>
                                             </td>
                                             <td>
                                                <p><?= $item['massage'] ?></p>
                                             </td>
                                             <td>
                                                <a href="#test<?= $item['id'] ?>" class="text-info" data-bs-toggle="modal" style="text-decoration: none">
                                                   <i class="far fa-eye"></i>
                                                </a>
                                                <a href="mailto:<?= $item['email'] ?>" class="text-success ms-2" style="text-decoration: none">
                                                   <i class="fas fa-envelope"></i>
                                                </a>
                                                <a href="" class="text-danger ms-2">
                                                   <i class="fas fa-trash"></i>
                                                </a>
                                             </td>
                                          </tr>
                                          <div class="modal fade" id="test<?= $item['id'] ?>">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLabel"><?= $item['name'] ?></h5>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <div class="modal-body">
                                                      <p><b>Name:</b> <?= $item['name'] ?></p>
                                                      <p><b>E-mail:</b> <?= $item['email'] ?></p>
                                                      <p><b>Subject:</b> <?= $item['subject'] ?></p>
                                                      <p><b>Message:</b> <?= $item['massage'] ?></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       <?php } ?>
                                    </tbody>
                                 </table>
                              </div>
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