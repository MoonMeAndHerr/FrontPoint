<?= $this->extend("layout/index") ?>

<?= $this->section("menu-contact") ?>
    active
<?= $this->endSection() ?>

<?= $this->section("tittle") ?>
    MySys - Contact
<?= $this->endSection() ?>

<?= $this->section("hero") ?>

<html>

<head>
	<title>About</title>
	<link rel='stylesheet' href='mystyle.css'>
</head>

<body>
<div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
    <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
	<div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
                <p><i class="fa fa-phone-alt mr-2"></i>+01119356674</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>khrnsaanrl@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
                <p>Stay connected with us on social media for the latest updates, offers, and digital card designs!</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
                <div>
                    <h6 class="text-white text-uppercase">Monday - Friday</h6>
                    <p>9.00 AM - 9.00 PM</p>
                    <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                    <p>2.00 PM - 7.00 PM</p>
                </div>
            </div>
            
            </div>
        </div>
    <div   
</div>
<?= $this->endSection() ?>

<?= $this->section("footer") ?>
   <footer>
	Design by Dr. Suhailan
   </footer>
<?= $this->endSection() ?>

</body>

</html>