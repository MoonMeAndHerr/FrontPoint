<?= $this->extend("layout/index") ?>

<?= $this->section("menu-service") ?>
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
<div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Services</h4>
                <h1 class="display-4">Custom Digital Cards</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="<?=base_url('/')?>/SissyDigitalCard/img/service-1.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Personalized Digital Cards</h4>
                            <p class="m-0">Create unique and personalized digital cards for every occasion. Whether it’s a wedding, birthday, or special event, you can design cards that truly reflect your style</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="<?=base_url('/')?>/SissyDigitalCard/img/service-2.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-DIGITALCARD service-icon"></i>Instant Delivery</h4>
                            <p class="m-0">Design and personalize your digital cards, then send them instantly to your loved ones, no delays, just immediate sharing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="<?=base_url('/')?>/SissyDigitalCard/img/service-3.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>Best Quality Digital Cards</h4>
                            <p class="m-0">Create stunning, high-resolution digital cards with professional designs, customizable features, and 
                            seamless delivery across all devices for the best quality experience</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section("footer") ?>
   <footer>
	Design by Dr. Suhailan
   </footer>
<?= $this->endSection() ?>

</body>

</html>