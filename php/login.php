<?php include('server.php') ?>
<!-- <?php
if (isset($_POST['verification_code'])) {
    $entered_code = $_POST['verification_code'];
    $stored_code = 123456;// Retrieve the stored code from the database for the user's email

    if ($entered_code == $stored_code) {
        echo "Veryfication successful";
        header('Location: ../account.php');
        // Verification successful
        // Update the user's account to mark it as verified in the database
        // For example, you can set a 'verified' flag in the user's record to '1'
        // Update the database with the verification status
        // Example: $updateQuery = "UPDATE users SET verified = 1 WHERE email = '$user_email'";
        // Execute the update query here

        // Redirect to account.php
       
    } else {
        // Verification failed
        // Display an error message
        echo "Verification failed. Please check the code and try again.";
    }
}?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wellness Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- Navbar End -->

	
		<!-- <link rel="stylesheet" href="css/formstyle.css"> -->
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap"
      rel="stylesheet"
    />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,maximum-scale=1"
    />

   
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
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  <style>
    :root {
    --primary-color: hsl(229, 89%, 53%);
    --secondary-color: hsl(218, 89%, 53%);
    --black: #000000;
    --white: #ffffff;
    --gray: #efefef;
    --gray-2: #757575;

    --facebook-color: #4267B2;
    --google-color: #DB4437;
    --twitter-color: hsl(229, 80%, 63%);
    --insta-color: #E1306C;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



.container1 {
    position: relative;
    min-height: 100vh;
    overflow: hidden;
    top: -40px;
}

.row1 {
    display: flex;
    flex-wrap: wrap;
    height: 100vh;
}

.col {
    width: 50%;
}

.align-items-center {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.form-wrapper {
    width: 100%;
    max-width: 22rem;
    margin-left: 1200px;
}

.form {
    padding: 1rem;
    background-color: var(--white);
    border-radius: 1.5rem;
    width: 100%;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    transform: scale(0);
    transition: .5s ease-in-out;
    transition-delay: 1s;
    
}

.input-group {
    margin: 10px 0px 10px 0px;
  }



.input-group input {
    width: 100%;
    align-items: center;
    padding: 0.3rem 0.3rem;
    align-items: center;
    font-size: 1rem;
    background-color: var(--gray);
    border-radius: 0.5rem;
    border: 0.125rem solid var(--white);
    outline: none;
}

.input-group input:focus {
    border: 0.125rem solid var(--primary-color);
}

.form button {
    cursor: pointer;
    width: 100%;
    padding: .6rem 0;
    border-radius: .5rem;
    border: none;
    background-color: var(--primary-color);
    color: var(--white);
    font-size: 1.2rem;
    outline: none;
    
}

.form p {
    margin: 1rem 0;
    font-size: .7rem;
}

.flex-col {
    flex-direction: column;
}

.social-list {
    margin: 2rem 0;
    padding: 1rem;
    border-radius: 1.5rem;
    width: 100%;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    transform: scale(0);
    transition: .5s ease-in-out;
    transition-delay: 1.2s;
}

.social-list>div {
    color: var(--white);
    margin: 0 .5rem;
    padding: .7rem;
    cursor: pointer;
    border-radius: .5rem;
    cursor: pointer;
    transform: scale(0);
    transition: .5s ease-in-out;
}

.social-list>div:nth-child(1) {
    transition-delay: 1.4s;
}

.social-list>div:nth-child(2) {
    transition-delay: 1.6s;
}

.social-list>div:nth-child(3) {
    transition-delay: 1.8s;
}

.social-list>div:nth-child(4) {
    transition-delay: 2s;
}

.social-list>div>i {
    font-size: 1.5rem;
    transition: .4s ease-in-out;
}

.social-list>div:hover i {
    transform: scale(1.5);
}

.facebook-bg {
    background-color: var(--facebook-color);
}

.google-bg {
    background-color: var(--google-color);
}

.twitter-bg {
    background-color: var(--twitter-color);
}

.insta-bg {
    background-color: var(--insta-color);
}

.pointer {
    cursor: pointer;
}

.container1.sign-in .form.sign-in,
.container1.sign-in .social-list.sign-in,
.container1.sign-in .social-list.sign-in>div,
.container1.sign-up .form.sign-up,
.container1.sign-up .social-list.sign-up,
.container1.sign-up .social-list.sign-up>div {
    transform: scale(1);
}

.content-row {
    position: absolute;
    top: 0;
    left: 0;
    pointer-events: none;
    z-index: 6;
    width: 100%;
}

.text {
    margin: 4rem;
    color: var(--white);
}

.text h2 {
    font-size: 3.0rem;
    font-weight: 800;
    margin: 9rem 30rem;
    transition: 1s ease-in-out;
    text-align: center;
    margin-left: 520px;
}

.text p {
    font-weight: 600;
    transition: 1s ease-in-out;
    transition-delay: .2s;
}

.img img {
    width: 30vw;
    transition: 1s ease-in-out;
    transition-delay: .4s;
}

.text.sign-in h2,
.text.sign-in p,
.img.sign-in img {
    transform: translateX(-250%);
}

.text.sign-up h2,
.text.sign-up p,
.img.sign-up img {
    transform: translateX(250%);
}

.container1.sign-in .text.sign-in h2,
.container1.sign-in .text.sign-in p,
.container1.sign-in .img.sign-in img,
.container1.sign-up .text.sign-up h2,
.container1.sign-up .text.sign-up p,
.container1.sign-up .img.sign-up img {
    transform: translateX(0);
}

/* BACKGROUND */

.container1::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    height: 100vh;
    width: 300vw;
    transform: translate(35%, 0);
    background-image: linear-gradient(-45deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    transition: 1s ease-in-out;
    z-index: 6;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-bottom-right-radius: max(50vw, 50vh);
    border-top-left-radius: max(50vw, 50vh);
}

.container1.sign-in::before {
    transform: translate(0, 0);
    right: 50%;
}

.container1.sign-up::before {
    transform: translate(100%, 0);
    right: 50%;
}

/* RESPONSIVE */

@media only screen and (max-width: 425px) {

    .container1::before,
    .container1.sign-in::before,
    .container1.sign-up::before {
        height: 100vh;
        border-bottom-right-radius: 0;
        border-top-left-radius: 0;
        z-index: 0;
        transform: none;
        right: 0;
    }

    /* .container.sign-in .col.sign-up {
        transform: translateY(100%);
    } */

    .container1.sign-in .col.sign-in,
    .container1.sign-up .col.sign-up {
        transform: translateY(0);
    }

    .content-row {
        align-items: flex-start !important;
    }

    .content-row .col {
        transform: translateY(0);
        background-color: unset;
    }

    .col {
        width: 100%;
        position: absolute;
        padding: 2rem;
        background-color: var(--white);
        border-top-left-radius: 2rem;
        border-top-right-radius: 2rem;
        transform: translateY(100%);
        transition: 1s ease-in-out;
    }

    .row1 {
        align-items: flex-end;
        justify-content: flex-end;
    }

    .form,
    .social-list {
        box-shadow: none;
        margin: 0;
        padding: 0;
    }

    .text {
        margin: 0;
    }

    .text p {
        display: none;
    }

    .text h2 {
        margin: .5rem;
        font-size: 2rem;
    }
}
  </style>
    <!-- <link rel="stylesheet" href="css/formstyle.css"> -->
</head>
 <body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
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
                        <a href="../404.html" class="dropdown-item active">404 էջ</a>
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Մուտք</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#"> </a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Իմ օգտահաշիվը</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Մուտք</»li>
                </ol>
            </nav>
        </div>
    </div>
 <!-- Main Start -->


   <div id="container1" class="container1">
   <div class="header">
        <h2>Login</h2>
  </div>
  <div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
                    <form method="post" action="login.php">
					<?php include('errors.php'); ?>
       
                    <div class="input-group">
                      <label>Օգտանուն</label>
                      <input type="text" name="username" >
                  </div>
                   <div class="input-group">
                    <label>Գաղտնաբառ</label>
                    <input type="password" name="password">
                   </div>
                   <div class="input-group">
                     <button type="submit" class="btn2" name="login_user">Մուտք</button>
                </div>
						<p>
						
               Գրանցվա՞ծ չեք <a href="register.php">Գրանցվեք հիմա</a>
        </p>
						
					</div>
				</div>
                </form>
				<div class="form-wrapper">
		
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
        <div class="row1 content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				
			</div>
            </div>
            </div>


     
     
        
   

 

<!-- Main End -->


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
	container.classList.toggle('sign-in')
	container.classList.toggle('sign-up')
}

setTimeout(() => {
	container.classList.add('sign-in')
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
    <script src="../js/form.js"></script>
  







   