<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wellness Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">
        
     
</head>
 <body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Հալաբյան 44/56, Երևան </small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Երկ - Ուրբ : 09.00  - 21.00 </small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">  
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+374 101 110</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Wellness Center</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="../index.html" class="nav-item nav-link ">Գլխավոր էջ</a>
                <a href="../about.html" class="nav-item nav-link ">Մեր մասին</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Ավելին</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="../feature.html" class="dropdown-item">Նկարագրություն</a>
                        <a href="../team.html" class="dropdown-item ">Մեր բժիշկները</a>
                        <a href="../appointment.html" class="dropdown-item">Հերթագրում</a>
                        <a href="../testimonial.html" class="dropdown-item">Կարծիքներ</a>
                        <a href="../404.html" class="dropdown-item ">404 էջ</a>
                        <a href="../account.php" class="dropdown-item">Իմ օգտահաշիվը</a>
                    </div>
                </div>
                <a href="../contact.html" class="nav-item nav-link">Կապ</a>
            </div>
            <a href="../account.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Իմ օգտահաշիվը<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Գրանցում</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#"> </a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#"></a>Իմ օգտահաշիվը</li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Գրանցում</li>
                </ol>
            </nav>
        </div>
    </div>
 <!-- Main Start -->
 <div id="container1" class="container1">
		<!-- FORM SECTION -->
		<div class="row1">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
                    <form method="post" action="register.php">
                    <?php include('errors.php'); ?>
                       <div class="input-group">
                         <label>Օգտանուն</label>
                          <input type="text" name="username" value="<?php echo $username; ?>">
                      </div>
						<div class="input-group">
                            <label>Էլ․ հասցե</label>
                            <input type="email" name="email" value="<?php echo $email; ?>">
                       </div>
                       <div class="input-group">
                          <label>Գաղտնաբառ</label>
                          <input type="password" name="password_1">
                       </div>
                       <div class="input-group">
                          <label>Հաստատել գաղտնաբառը</label>
                          <input type="password" name="password_2">
                        </div>
                        <div class="input-group">
                       <button type="submit" class="btn2" name="reg_user">Գրանցվել</button>
                              </div>
                     <p>
                Արդեն գրանցվե՞լ եք? <a href="login.php">Մուտք գործեք</a>
                   </p>
  </form>
				</div>
			
                </div>
                </div>
                </div>
                
			<!-- END SIGN UP -->
		

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Հասցե</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Հալաբյան 44/56, Երևան</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+374 101 010</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@WellnessCenter.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Ծառայություն</h5>
                    <a class="btn btn-link" href="">Սրտաբանություն</a>
                    <a class="btn btn-link" href="">Ատամնաբուժություն</a>
                    <a class="btn btn-link" href="">Նյարդաբանություն</a>
                    <a class="btn btn-link" href="">Օրթոպեդիա</a>
                    <a class="btn btn-link" href="">Լաբորատորիա</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Արագ հղումներ</h5>
                    <a class="btn btn-link" href="">Մեր մասին</a>
                    <a class="btn btn-link" href="">Կապ</a>
                    <a class="btn btn-link" href="">Մեր ծառայությունները</a>
                    <a class="btn btn-link" href="">Պայմաններ և դրույթներ</a>
                    <a class="btn btn-link" href="">Աջակցություն</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Տեղեկագիր</h5>
                    <p>Նոր Տարվան ընդառաջ, մեծ զեղչեր</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <a href="register.php"><button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" id="signup">Գրանցվել հիմա</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Wellness Center</a>, Բոլոր իրավունքները պաշտպանված են.
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script>
let container = document.getElementById('container1')

toggle = () => {
	container.classList.toggle('sign-up')
	container.classList.toggle('sign-in')
}

setTimeout(() => {
	container.classList.add('sign-up')
}, 200)
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>

  







   