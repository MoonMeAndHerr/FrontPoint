<?= $this->extend("layout/index") ?>

<?= $this->section("menu-about") ?>
    active
<?= $this->endSection() ?>

<?= $this->section("tittle") ?>
    SissyDigitalCard - About
<?= $this->endSection() ?>

<?= $this->section("hero") ?>
<html>

<head>
	<title>About</title>
	<link rel='stylesheet' href='mystyle.css'>
</head>
   
    <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
                <h1 class="display-4">Serving Since 2019</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Story</h1>
                    <h5 class="mb-3">Our journey began in 2019, with a vision to revolutionize the way we celebrate lifes moments</h5>
                    <p>As the world shifted towards digital, we recognized the need for an eco-friendly, fast, and personalized solution to send invitations, 
                    greeting cards, and announcements. Sissy Digital Card was born out of a passion for creativity and sustainability, offering a platform 
                    where anyone can design custom digital cards for any occasion, from weddings to birthdays, holidays, and beyond.</p>
                    <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 200px;">
                    <div class="position-relative h-50">
                        <img class="position-absolute w-100 h-100" src="<?=base_url('/')?>/SissyDigitalCard/img/about.png" style="object-fit: cover;">
                    </div>
                    <div class="about-me">
                    <div class="about-image">
                     <img src="your-image-path.jpg" alt="About Me" class="about-img">
                    </div>
                    <div class="about-text">
                    <h2>About Me</h2>
                    <p>Hi, I’m Nurul Khairunnisa Binti Khairul Nizam, the creator behind Sissy Digital Card. I’m passionate about providing a unique, eco-friendly, and efficient way for people to send digital invitations, greeting cards, and announcements for every occasion. With the increasing need for digital solutions, I wanted to make it easy for everyone to personalize and share special moments with loved ones instantly.</p>
                    </div>
                    </div>

                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Vision</h1>
                    <p>At Sissy Digital Card, we envision a world where digital invitations and greetings are the norm, not the exception. Our goal is to create a 
                    platform that not only makes designing and sending cards easy but also allows users to express their creativity. We aim to make each celebration, 
                    big or small, memorable with a personalized touch.</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Customization</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Simplicity</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Sustainability</h5>
                    <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                </div>
            </div>
	
<?= $this->endSection()	?>

<?= $this->section("footer")	?>	
   <footer>
	Design by Dr. Suhailan
   </footer>
<?= $this->endSection()	?>
</body>

</html>