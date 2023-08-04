<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel</title>

	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

	<!-- custom css file link -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

	<!-- custom js file link -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	


</head>

<body>

	<!-- header section start -->
	<header class="header">

		<div id="menu-btn" class="fas fa-bars"></div>

		<a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i
				class="fas fa-paper-plane"></i>travel</a>

		<nav class="navbar">
			<a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
			<a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
			<a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">destination</a>
			<a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>
			<a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a>
			<a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a>
		</nav>

		<a data-aos="zoom-in-left" data-aos-delay="1300" href="user_page.php" class="btn">Profile</a>
	</header>

	<!-- header section ends -->

	<!-- home section start -->

	<section class="home" id="home">

		<div class="content">
			<span data-aos="fade-up" data-aos-delay="150">follow us</span>
			<h3 data-aos="fade-up" data-aos-delay="350">to the unknow</h3>
			<p data-aos="fade-up" data-aos-delay="450">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat
				cum, quasi pariatur
				adipisci ducimus
				unde! Nulla debitis odit nesciunt voluptatum?</p>
			<a data-aos="fade-up" data-aos-delay="600" href="book.php" class="btn">Забронювати</a>
		</div>

	</section>

	<!-- home section ends -->

	<!-- booking form section start -->

	<section class="book-form" id="book-form">

		<form id="bookingForm" action="send_booking.php" method="POST">
			<div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
				<span>Куди?</span>
				<input type="text" name="destination" placeholder="Назва місця" value="">
			</div>
			<div data-aos="zoom-in" data-aos-delay="350" class="inputBox">
				<span>Коли?</span>
				<input type="date" name="date" value="">
			</div>
			<div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
				<span>Скільки?</span>
				<input type="number" name="travelers" placeholder="Кількість мандрівників" value="">
			</div>
			<input data-aos="zoom-in" data-aos-delay="600" type="submit" value="знайти зараз" class="btn">
		</form>

	</section>

	<!-- booking form section ends -->

	<div id="popup" class="popup" style="display: none;">
		<div class="popup__body">
			<div id="popup-content" class="popup__content">	
					 
			</div>
			<a class="popup__close" onclick="closePopup()">закрити</a>						   		
	</div>    
</div>

	<!-- about section start -->

	<section class="about" id="about">

		<div class="video-container" data-aos="fade-right" data-aos-delay="350">
			<video src="images/Video/about-vid-1.mp4" muted autoplay loop class="video"></video>
			<div class="controls">
				<span class="control-btn" data-src="images/Video/about-vid-1.mp4"></span>
				<span class="control-btn" data-src="images/Video/about-vid-2.mp4"></span>
				<span class="control-btn" data-src="images/Video/about-vid-3.mp4"></span>
			</div>
		</div>

		<div class="content" data-aos="fade-right" data-aos-delay="600">
			<span>Чому обирати нас?</span>
			<h3>Величність природи чекає</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam praesentium iure consectetur natus ex ad,
				maxime dignissimos sapiente quo libero!</p>
			<a href="about.php" class="btn">Детальніше</a>
		</div>

	</section>

	<!-- about section ends -->

	<!-- destinations section start -->

	<section class="destination" id="destination">

		<div class="heading">
			<span>наші пункти призначення</span>
			<h1>Зробіть своє призначення</h1>
		</div>

		<div class="box-container">

			<div class="box" data-aos="fade-up" data-aos-delay="150">
				<div class="image">
					<img src="images/des-1.jpg" alt="">
				</div>
				<div class="content">
					<h3>Лондон</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
					<a href="page_Iceland.php">Детальніше <i class="fas fa-angle-right"></i></a>
				</div>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="350">
				<div class="image">
					<img src="images/des-2.jpg" alt="">
				</div>
				<div class="content">
					<h3>tours & travel</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
					<a href="#">Детальніше <i class="fas fa-angle-right"></i></a>
				</div>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="450">
				<div class="image">
					<img src="images/des-3.jpg" alt="">
				</div>
				<div class="content">
					<h3>tours & travel</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
					<a href="#">Детальніше <i class="fas fa-angle-right"></i></a>
				</div>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="600">
				<div class="image">
					<img src="images/des-4.jpg" alt="">
				</div>
				<div class="content">
					<h3>tours & travel</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
					<a href="#">Детальніше <i class="fas fa-angle-right"></i></a>
				</div>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="750">
				<div class="image">
					<img src="images/des-5.jpg" alt="">
				</div>
				<div class="content">
					<h3>tours & travel</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
					<a href="#">Детальніше <i class="fas fa-angle-right"></i></a>
				</div>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="900">
				<div class="image">
					<img src="images/des-6.jpg" alt="">
				</div>
				<div class="content">
					<h3>tours & travel</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
					<a href="#">Детальніше <i class="fas fa-angle-right"></i></a>
				</div>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="1150">
				<div class="image">
					<img src="images/des-7.jpg" alt="">
				</div>
				<div class="content">
					<h3>tours & travel</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
					<a href="#">Детальніше <i class="fas fa-angle-right"></i></a>
				</div>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="1300">
				<div class="image">
					<img src="images/des-8.jpg" alt="">
				</div>
				<div class="content">
					<h3>tours & travel</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
					<a href="#">Детальніше <i class="fas fa-angle-right"></i></a>
				</div>
			</div>

		</div>

	</section>

	<!-- destinations section ends -->


	<!--	services section start -->

	<section class="services" id="services">

		<div class="heading">
			<span>Наші послуги</span>
			<h1>Незліченна кількість переживань</h1>
		</div>

		<div class="box-container">

			<div class="box" data-aos="zoom-in-up" data-aos-delay="150">
				<i class="fas fa-globe"></i>
				<h3>світовий</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quia?</p>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="350">
				<i class="fas fa-hiking"></i>
				<h3>пригоди</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quia?</p>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="450">
				<i class="fas fa-utensils"></i>
				<h3>Їжа та напої</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quia?</p>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="600">
				<i class="fas fa-hotel"></i>
				<h3>Доступні готелі</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quia?</p>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="750">
				<i class="fas fa-wallet"></i>
				<h3>доступна ціна</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quia?</p>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="900">
				<i class="fas fa-headset"></i>
				<h3>24/7 підтримка</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quia?</p>
			</div>

		</div>

	</section>

	<!--	services section end -->

	<!--	gallery section start -->

	<section class="gallery" id="gallery">

		<div class="heading">
			<span>Наша Галерея</span>
			<h1>ми записуємо спогади</h1>
		</div>

		<div class="box-container">

			<div class="box" data-aos="zoom-in-up" data-aos-delay="150">
				<img src="images/gallery-img-1.jpg" alt="">
				<span>місце для подорожей</span>
				<h3>Ісландія</h3>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="350">
				<img src="images/gallery-img-2.jpg" alt="">
				<span>місце для подорожей</span>
				<h3>Гренландія</h3>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="450">
				<img src="images/gallery-img-6.jpg" alt="">
				<span>місце для подорожей</span>
				<h3>Аляска</h3>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="150">
				<img src="images/gallery-img-4.jpg" alt="">
				<span>місце для подорожей</span>
				<h3>Тайланд</h3>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="350">
				<img src="images/gallery-img-5.jpg" alt="">
				<span>місце для подорожей</span>
				<h3>Бразилія</h3>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="450">
				<img src="images/gallery-img-3.jpg" alt="">
				<span>місце для подорожей</span>
				<h3>Мальдіви</h3>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="150">
				<img src="images/gallery-img-7.jpg" alt="">
				<span>місце для подорожей</span>
				<h3>Ісландія</h3>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="350">
				<img src="images/gallery-img-8.jpg" alt="">
				<span>місце для подорожей</span>
				<h3>Аляска</h3>
			</div>

			<div class="box" data-aos="zoom-in-up" data-aos-delay="450">
				<img src="images/gallery-img-8.jpg" alt="">
				<span>місце для подорожей</span>
				<h3>Мальдіви</h3>
			</div>

		</div>

	</section>

	<!--	gallery section ends -->


	<!--	review section start -->

	<section class="review">

		<div class="content" data-aos="fade-left" data-aos-delay="300">
			<span>відгуки</span>
			<h3>Гарні новини від наших клієнтів</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, corrupti. Harum, nostrum. Animi nostrum
				ullam beatae quas fugit, consectetur quae.</p>
		</div>

		<div class="box-container" data-aos="fade-left" data-aos-delay="600">

			<div class="box">
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, labore!</p>
				<div class="user">
					<img src="images/pic-1.png" alt="">
					<div class="info">
						<h3>jhon deo</h3>
						<span>designer</span>
					</div>
				</div>
			</div>

			<div class="box">
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, labore!</p>
				<div class="user">
					<img src="images/pic-2.png" alt="">
					<div class="info">
						<h3>jhon deo</h3>
						<span>designer</span>
					</div>
				</div>
			</div>

			<div class="box">
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, labore!</p>
				<div class="user">
					<img src="images/pic-3.png" alt="">
					<div class="info">
						<h3>jhon deo</h3>
						<span>designer</span>
					</div>
				</div>
			</div>

			<div class="box">
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, labore!</p>
				<div class="user">
					<img src="images/pic-4.png" alt="">
					<div class="info">
						<h3>jhon deo</h3>
						<span>designer</span>
					</div>
				</div>
			</div>

		</div>

	</section>

	<!--	review section ends -->


	<!--	blogs section start -->

	<section class="blogs" id="blogs">

		<div class="heading">
			<span>Блоги та публікації</span>
			<h1>нерозказані історії</h1>
		</div>

		<div class="box-container">

			<div class="box" data-aos="fade-up" data-aos-delay="150">
				<div class="image">
					<img src="images/blog-1.jpg" alt="">
				</div>
				<div class="content">
					<a href="#" class="link">Life is a journey, not a destination</a>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, enim.</p>
					<div class="icon">
						<a href="#"><i class="fas fa-clock"></i> 21st may, 2023</a>
						<a href="#"><i class="fas fa-user"></i> by admin</a>
					</div>
				</div>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="350">
				<div class="image">
					<img src="images/blog-2.jpg" alt="">
				</div>
				<div class="content">
					<a href="#" class="link">Life is a journey, not a destination</a>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, enim.</p>
					<div class="icon">
						<a href="#"><i class="fas fa-clock"></i> 21st may, 2023</a>
						<a href="#"><i class="fas fa-user"></i> by admin</a>
					</div>
				</div>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="450">
				<div class="image">
					<img src="images/blog-3.jpg" alt="">
				</div>
				<div class="content">
					<a href="#" class="link">Life is a journey, not a destination</a>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, enim.</p>
					<div class="icon">
						<a href="#"><i class="fas fa-clock"></i> 21st may, 2023</a>
						<a href="#"><i class="fas fa-user"></i> by admin</a>
					</div>
				</div>
			</div>

		</div>

	</section>
	<!--	blogs section ends -->



	<!--	banner section start -->

	<div class="banner">
		<div class="content" data-aos="zoom-in-up" data-aos-delay="300">
			<span>розпочніть свої пригоди</span>
			<h3>Давайте дослідимо цей світ</h3>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem quia voluptates, aut ipsa fugit sapiente
				assumenda dolores. Saepe, sunt cupiditate.</p>
			<a href="#book-form" class="btn">Забронюйте зараз</a>
		</div>
	</div>

	<!--	banner section ends -->


	<!--	footer section start -->

	<section class="footer">

		<div class="box-container">

			<div class="box" data-aos="fade-up" data-aos-delay="150">
				<a href="" class="logo"> <i class="fas fa-paper-plane"></i>travel</a>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, sed!</p>
				<div class="share">
					<a href="#" class="fab fa-facebook-f"></a>
					<a href="#" class="fab fa-twitter"></a>
					<a href="#" class="fab fa-instagram"></a>
					<a href="#" class="fab fa-linkedin"></a>
				</div>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="350">
				<h3>посилання</h3>
				<a href="#home" class="links"><i class="fas fa-arrow-right"></i> home </a>
				<a href="#about" class="links"><i class="fas fa-arrow-right"></i> about </a>
				<a href="#destination" class="links"><i class="fas fa-arrow-right"></i> destination </a>
				<a href="#services" class="links"><i class="fas fa-arrow-right"></i> services </a>
				<a href="#gallery" class="links"><i class="fas fa-arrow-right"></i> gallery </a>
				<a href="#blogs" class="links"><i class="fas fa-arrow-right"></i> blogs </a>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="450">
				<h3>Контакти</h3>
				<p><i class="fas fa-map"></i> kherson, ukraine</p>
				<p><i class="fas fa-phone"></i> +123-456-7890 </p>
				<p><i class="fas fa-envelope"></i> misha7103@gmail.com </p>
				<p><i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
			</div>

			<div id="form_area" class="box" data-aos="fade-up" data-aos-delay="600">
			<h3>Бюлетень</h3>
				<p>підписатися на останні оновлення</p>
					<span id="msg"></span>
					<form id="userForm" name="submit-to-google-sheet" method="POST" action="send_email.php">
						<input type="email" name="email" placeholder="введіть свою електронну адресу" class="email" id="email">
						<input type="submit" value="підписатися" class="btn" name="sub_process" id="subloader">
				</form>
			</div>

		</div>

	</section>

	<div class="credit">створено <span>Misha</span> | Все добре зарезервовано!</div>

	<!--	footer section ends -->

	<!--	pop up section start -->
	<!--
	<div class="popup" id="popup">
		<div class="popup__body">
			<div class="popup__content">
				<a href="#header" class="popup__close">X</a>
				<h2 class="popup__title">DAsdda</h2>
				<p class="popup__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolorem nobis natus
					architecto, placeat delectus qui. Blanditiis dolore ipsa sed?</p>
			</div>
		</div>
	</div-->>

	<!--	pop up section ends -->

	<script src="js/scripts.js" defer></script>
	<script src="js/booking.js"></script>
	<script src="js/emailForm.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

	<script>

		AOS.init({
			duration: 800,
			offset: 150,
		});
		/*
		const scriptURL = 'https://script.google.com/macros/s/AKfycbw9FlDteaLoc-9Y7O_XtKCk5XpFFaTu-OAa-xrRNn8_S9rkuSGTFc-PbInjlxWDyxHb8w/exec'
		const form = document.forms['submit-to-google-sheet']
		const msg = document.getElementById("msg")

		form.addEventListener('submit', e => {
			e.preventDefault()
			fetch(scriptURL, { method: 'POST', body: new FormData(form) })
				.then(response => {
					msg.innerHTML = "Thak You For Subscribe!"
					setTimeout(function () {
						msg.innerHTML = ""
					}, 5000)
					form.reset()
				})
				.catch(error => console.error('Error!', error.message))
		})	 
		*/
	</script>
</body>

</html>