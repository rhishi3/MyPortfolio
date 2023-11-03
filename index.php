<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Templete</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <linkn rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- menu section start -->
    <section id="Menu">
        <nav class="navbar navbar-expand-lg bgnav navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand text-white" href="#">NAFISA NABA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ms-3">
                            <a class="nav-link active text-uppercase" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-uppercase" href="#about">About</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-uppercase" href="#service">Services</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-uppercase" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-uppercase" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-uppercase" href="#contact">Contract</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- menu section end -->

    <!-- slider section start -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="wrap">
              <h2 data-aos="fade-down">Slider Title</h2>
              <p data-aos="zoom-in">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Blanditiis deserunt sapiente iusto amet aliquam minima alias aut, ab, ipsa voluptas.</p>
              <a data-aos="fade-up" href="#" class="btn btn-primary">Click Me</a>
          </div>
        </div>
        <div class="carousel-item carousel-item2">
          <div class="wrap">
              <h2 data-aos="fade-down">Slider Title 2</h2>
              <p data-aos="zoom-in">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Blanditiis deserunt sapiente iusto amet aliquam minima alias aut, ab, ipsa voluptas.</p>
              <a data-aos="fade-up" href="#" class="btn btn-primary">Click Me</a>
          </div>
        </div>
        <div class="carousel-item carousel-item3">
          <div class="wrap">
              <h2 data-aos="fade-down">Slider Title 3</h2>
              <p data-aos="zoom-in">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Blanditiis deserunt sapiente iusto amet aliquam minima alias aut, ab, ipsa voluptas.</p>
              <a data-aos="fade-up" href="#" class="btn btn-primary">Click Me</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- slider section end -->

    <!-- about section start -->
    <section class="about py-5 my-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 about_title">
                    <h2 class="fw-bold text-uppercase text-center mb-5">About Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5 animate__animated animate__bounce">
                    <img src="images/about.jpg" alt="Img Not Found" class="img-fluid animate__bounceOutUp">
                </div>
                <div class="col-12 col-md-7 align-self-center mt-3 mt-md-0">
                    <h2 class="fw-bold">Rhishi Kesh Bhowmik</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Soluta quia perspiciatis saepe at, eligendi praesentium explicabo facilis quae excepturi nihil temporibus earum ullam dolores consequuntur. Rerum a odio quos, omnis quae, ea quam. Laborum, facilis, nemo ratione rerum commodi cumque corrupti nesciunt sed unde placeat distinctio totam soluta neque similique.</p>
                    <a href="" class="btn btn-info btn-lg">Hire Me!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- service-section-start -->
    <section class="service pb-5 mb-5" id="service">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="fw-bold text-uppercase text-center">Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="zoom-in">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="images/service-1.jpg" alt="Img Not Found" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Web Design</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio inventore tenetur adipisci odit itaque, nobis voluptates?</p>
                            <button href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="zoom-in">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="images/service-2.jpg" alt="Img Not Found" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio inventore tenetur adipisci odit itaque, nobis voluptates?</p>
                            <a href="#" class="btn btn-primary" target="_blank">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="zoom-in">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="images/service-3.jpg" alt="Img Not Found" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">SEO</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio inventore tenetur adipisci odit itaque, nobis voluptates?</p>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- service-section-end -->

     <!-- skills-section-start -->
     <section class="pb-5 mb-5" id="skills">
         <div class="container">
            <div class="row">
                <h2 class="text-center text-uppercase fw-bold">My skills</h2>
            </div>
             <div class="row mt-5">
                 <div class="col-12 col-md-6">
                     <div class="progress mt-3">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width:90%">HTML</div>
                    </div>
                    <div class="progress mt-3">
                        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width:85%">CSS</div> 
                    </div>
                    <div class="progress mt-3">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:70%">JS</div>
                    </div>
                    <div class="progress mt-3">
                        <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width:80%">BOOTSTRAP</div> 
                    </div>
                    <div class="progress mt-3">
                        <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated" style="width:30%">PHP</div> 
                    </div>
                 </div>
                 <div class="col-12 col-md-6 mt-4 mt-md-0">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="circle-progress" id="progress1">
                                <span>4 Years +</span>
                            </div>
                            <h2 class="text-uppercase fs-5 mt-2 text-center circle-progress-title">Experience</h2>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="circle-progress" id="progress2">
                                <span>100+</span>
                            </div>
                            <h2 class="text-uppercase fs-5 mt-2 text-center circle-progress1-title">Complete Project</h2>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div>
                                <div class="circle-progress" id="progress3">
                                    <span>13+</span>
                                </div>
                                <h2 class="text-uppercase fs-5 mt-2 text-center circle-progress2-title">Running Project</h2>
                            </div>
                        </div>
                    </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- skills-section-end -->
     <!-- projects-start -->
     <section id="projects" class="projects py-5">
         <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center text-uppercase fw-bold">Our Projects</h2>
                </div>
            </div>
             <div class="row">
                 <div class="col-12 btns mt-4 d-flex justify-content-center" id="buttons">
                     <button class="btn btn-secondary mx-2 mt-2" data-filter="">All</button>
                     <button class="btn btn-primary mx-2 mt-2" data-filter=".cat">Web Design</button>
                     <button class="btn btn-success mx-2 mt-2" data-filter=".fish">Web Development</button>
                     <button class="btn btn-info mx-2 mt-2" data-filter=".fruit">Seo</button>
                 </div>
             </div>
             <div class="row" id="items">
                 <div class="col-12 col-md-4 mt-4 item cat">
                     <img src="images/cat.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="col-12 col-md-4 mt-4 item cat">
                     <img src="images/cat1.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="col-12 col-md-4 mt-4 item fish">
                     <img src="images/fish.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="col-12 col-md-4 mt-4 item fish">
                     <img src="images/fish1.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="col-12 col-md-4 mt-4 item fruit">
                     <img src="images/fruit.jpg" alt="img" class="img-fluid">
                 </div>
                 <div class="col-12 col-md-4 mt-4 item fruit">
                     <img src="images/fruit1.jpg" alt="img" class="img-fluid">
                 </div>
             </div>
         </div>
     </section>
     <!-- projects-end -->
     <!-- contact-section-start -->
     <section class="contact mb-5 pb-5" id="contact">
         <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center text-uppercase fw-bold">Contact me</h2>
                </div>
            </div>
             <div class="row">
                 <div class="col-12 col-md-8 mt-4">
                     <form action="#" method="POST" class="shadow-lg p-4">
                         <div class="row">
                             <div class="col-12 col-sm-6 mt-2">
                                <label for="name" class="form-label">Name</label>
                                 <input type="text" class="form-control shadow-none" placeholder="Name" id="name" name="name">
                             </div>
                             <div class="col-12 col-sm-6 mt-2">
                                <label for="email" class="form-label">Email</label>
                                 <input type="email" class="form-control shadow-none" placeholder="Email" id="email" name="name">
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-12 mt-2">
                                 <label for="Subject" class="form-label">Subject</label>
                                 <input type="text" class="form-control shadow-none" placeholder="Subject" id="Subject0" name="Subject">
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-12 mt-2">
                                 <label for="message" class="form-label">Message</label>
                                 <textarea name="message" id="message" rows="3" class="form-control shadow-none" placeholder="Massage"></textarea>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-12">
                                 <button type="submit" class="form-control text-uppercase bg-info btn mt-4">Send</button>
                             </div>
                         </div>
                     </form>
                 </div>
                 <div class="col-12 col-md-4 align-self-center mt-4 mt-md-0">
                    <div class="card address px-4 py-5 shadow-lg">
                        <h3 class="text-uppercase fs-4">contact me</h3>
                        <hr>
                        <h4 class="fs-5">Address:</h4>
                        <p>Dhaka, Bangladesh</p>
                        <h4 class="fs-5">Email:</h4>
                        <p>admin@gmail.com</p>
                        <h4 class="fs-5">Phone:</h4>
                        <p>015428584257</p>
                        <div class="socal-icon">
                           <a href="">
                               <i class="fa-brands fa-facebook"></i>
                           </a> 
                           <a href="">
                               <i class="fa-brands fa-github"></i>
                           </a>  
                           <a href="">
                               <i class="fa-brands fa-linkedin"></i>
                           </a> 
                        </div>
                    </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- contact-section-end -->
     <!-- footer-start -->
     <footer class="py-4 text-center">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <p class="mb-0 text-uppercase">Design By : Me!</p>
                 </div>
             </div>
         </div>
     </footer>
     <!-- footer-end -->

    <!-- service-modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Web Design</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-4">
                    <img src="images/service-1.jpg" alt="Img Not Found" class="card-img-top">
                </div>
                <div class="col-8">
                    <h2>Web Design</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A ut reprehenderit aliquam voluptatem quo cupiditate exercitationem, tenetur illum, possimus quisquam eveniet, magni eos ipsum alias neque similique, maxime natus fuga.</p>
                    <h4>FAQ</h4>
                    <div class="card">
                        <div class="card-header">
                          <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                            What is HTML?
                          </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                          <div class="card-body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores doloribus placeat earum at, sunt quis!
                          </div>
                        </div>
                      </div>

                      <div class="card mt-2">
                        <div class="card-header">
                          <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                            How we use HTML?
                          </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                          <div class="card-body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, nulla. Quos tempora veritatis neque reiciendis.
                          </div>
                        </div>
                      </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- all script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    
    <script>
      AOS.init();
    </script>
    <script>
      $('#progress1').circleProgress({
        value: 1,
        startAngle: 1.5,
        size: 120,
        fill: {
          gradient: ["purple", "blue"]
        }
      });
    </script>
    <script>
      $('#progress2').circleProgress({
        value: 0.50,
        size: 120,
        startAngle: 1.5,
        fill: {
          gradient: ["blue", "purple"]
        }
      });
    </script>
    <script>
      $('#progress3').circleProgress({
        value: 0.30,
        size: 120,
        startAngle: 1.5,
        fill: {
          gradient: ["blue", "blue" ,"red"]
        }
      });
    </script>
    <script type="text/javascript">
        var $grid = $('#items').isotope({
        });
        $('#buttons').on( 'click', 'button', function() {
          var filterValue = $(this).attr('data-filter');
          $grid.isotope({ filter: filterValue });
        });
    </script>
</body>
</html>