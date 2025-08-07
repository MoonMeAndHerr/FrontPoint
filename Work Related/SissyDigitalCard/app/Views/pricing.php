<?= $this->extend("layout/index") ?>

<?= $this->section("menu-pricing") ?>
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
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Pricing</h4>
                <h1 class="display-4">Competitive Pricing</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Creative Digital Cards</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?=base_url('/')?>/SissyDigitalCard/img/menu-1.jpg" alt="">
                           
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Invitation Cards</h4>
                            <p class="m-0">Design personalized invitation cards for any occasion, from weddings to parties. Our platform allows you to choose
                    the perfect template and customize every detail to make your event special.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?=base_url('/')?>/SissyDigitalCard/img/menu-2.jpg" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Greeting Cards</h4>
                            <p class="m-0">Create beautiful greeting cards for birthdays, holidays, or just to brighten someones day. With a variety of templates
                    and customization options, you can send heartfelt messages with style.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?=base_url('/')?>/SissyDigitalCard/img/menu-3.jpg" alt="">
                           
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Announcement Cards</h4>
                            <p class="m-0">Announce life special moments, such as births or engagements, with a personalized announcement card. Choose from a range
                    of designs and tailor the card to suit your unique announcement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Revenue Model</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?=base_url('/')?>/SissyDigitalCard/img/menu-1.jpg" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Basic Cards</h4>
                            <p class="m-0">Users that purchase a single card for a fixed price</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?=base_url('/')?>/SissyDigitalCard/img/menu-2.jpg" alt="">
                            <h5 class="menu-price">$30</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Subscription</h4>
                            <p class="m-0">Users pay a monthly or yearly subscription for unlimited card designs and downloads</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?=base_url('/')?>/SissyDigitalCard/img/menu-3.jpg" alt="">
                            <h5 class="menu-price">$10</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Premium Features</h4>
                            <p class="m-0">Offer advanced customization options, exclusive templates, and high-resolution cards as paid features</p>
                        </div>
                    </div>
                    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
                    <div class="container py-5">
                    <h1 class="display-3 text-primary mt-3">20% OFF</h1>
                    <h1 class="text-white mb-3">Sunday Special Offer</h1>
                    <h4 class="text-white font-weight-normal mb-4 pb-3">Only for Sunday <3</h4>
                    <form class="form-inline justify-content-center mb-4">
                    </div>
                </form>
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