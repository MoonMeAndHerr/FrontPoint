<?= $this->extend("layout/index.php") ?>

<?= $this->section("menu-home") ?>
    active
<?= $this->endSection() ?>

<?= $this->section("tittle") ?>
    SissyDigitalCard - Home
<?= $this->endSection() ?>

<?= $this->section("hero") ?>

<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sissy Digital Card</title>
	<link rel='stylesheet' href='mystyle.css'>
</head>

<body>
	
	 <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?= base_url('/'); ?>SissyDigitalCard/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h1 class="text-primary font-weight-medium m-0">We Have Been Serving</h1>
                        <h2 class="display-1 text-white m-0">Design, Personalize, and Send Digital Cards Instantly</h2>
                        <h2 class="text-white m-0">Sissy Digital Card is an innovative platform that allows users to effortlessly create and send personalized digital 
                        cards for any occasion. With a variety of customizable templates and instant sharing, we offer an eco-friendly and efficient solution to traditional paper cards.</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?= base_url('/'); ?>SissyDigitalCard/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h1 class="text-primary font-weight-medium m-0">We Have Been Serving</h1>
                        <h2 class="display-1 text-white m-0">"Design, Personalize, and Send Digital Cards Instantly</h2>
                        <h2 class="text-white m-0">Sissy Digital Card is an innovative platform that allows users to effortlessly create and send personalized digital 
                        cards for any occasion. With a variety of customizable templates and instant sharing, we offer an eco-friendly and efficient solution to traditional paper cards.</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?= base_url('/'); ?>SissyDigitalCard/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h1 class="text-primary font-weight-medium m-0">We Have Been Serving</h1>
                        <h2 class="display-1 text-white m-0">"Design, Personalize, and Send Digital Cards Instantly</h2>
                        <h2 class="text-white m-0">Sissy Digital Card is an innovative platform that allows users to effortlessly create and send personalized digital 
                        cards for any occasion. With a variety of customizable templates and instant sharing, we offer an eco-friendly and efficient solution to traditional paper cards.</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
            
                           
                               <div id='divlogin'>
                                <h1>Login</h1>
                                <form method='POST' action='<?=base_url("/login");?>' onsubmit='remember();'>
                                  Username:<input type='text' id='user' name='user'><br>
                                  <br>
                                  Password:<input type='text' style='-webkit-text-security: disc;' id='p' name='p'><br>
                                  <br>
                                  <input type='checkbox' id='rm' name='rm'>Remember<br>
                                  <br>
                                  <button class="btn btn-primary font-weight-bold px-3" id='btn' name='btn' input type="submit">Log in</button>
                                </form>
                                </div>                            
                 
                
<?= $this->section("footer") ?>
	Design by Dr. Suhailan
<?= $this->endSection() ?>


<script>
var r = localStorage.getItem("remember");
if (r == 1){
	var x = localStorage.getItem("user");
	var y = localStorage.getItem("pass");
	document.getElementById("rm").checked = true;
	document.getElementById("user").value = x;
	document.getElementById("p").value = y;
}



function remember(){
	var r = document.getElementById("rm").checked;
	if (r){
		var u = document.getElementById("user").value;
		var p = document.getElementById("p").value;
		localStorage.setItem("user",u);
		localStorage.setItem("pass",p);
		localStorage.setItem("remember",1);
	}else{
		localStorage.setItem("user","");
		localStorage.setItem("pass","");
		localStorage.setItem("remember","");
	}
}

</script>

</body>

</html>

<?= $this->endSection() ?>