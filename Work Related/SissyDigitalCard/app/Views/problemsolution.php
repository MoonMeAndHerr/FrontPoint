<?= $this->extend("layout/index") ?>

<?= $this->section("menu-problemsolution") ?>
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
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Problem Solution</h4>
                <h1 class="display-4">Design Your Own Digital Cards</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="<?=base_url('/')?>/SissyDigitalCard/img/service-1.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Cost of Printing and Shipping Paper Cards</h4>
                            <p class="m-0">Printing and mailing physical cards can be expensive, especially for large events like weddings. 
                            With Sissy Digital Card, users can create and send personalized cards at a fraction of the cost of traditional cards, with no need for printing or postage fees.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="<?=base_url('/')?>/SissyDigitalCard/img/service-2.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-DIGITALCARD service-icon"></i>Limited Customization in Physical Cards</h4>
                            <p class="m-0">Physical cards often come with limited design choices and can’t fully reflect a person’s unique style. Sissy Digital Card offers a wide variety of customizable
                            templates, allowing users to personalize every aspect of their cards, so they can create the perfect card for any occasion.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="<?=base_url('/')?>/SissyDigitalCard/img/service-3.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>Card Delivery Delays</h4>
                            <p class="m-0">Traditional cards, especially for distant recipients, may take days or even weeks to reach their destination, causing timing issues for time-sensitive events. 
                            Sissy Digital Card offers immediate delivery, ensuring cards are sent in real time without delays.</p>
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