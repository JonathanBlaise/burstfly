<!DOCTYPE HTML>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Platz - Free Grid Wordpress Theme</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="img/small-logo-01.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='style.css' rel='stylesheet' type='text/css'>



</head>

<body>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->

<div id="wrapper-header">
	<div id="main-header" class="object">
		<div class="logo"><img src="img/logo-burst.png" alt="logo platz" height="38" width="90"></div>
        <div id="main_tip_search">
			<form>
				<input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
			</form>
		</div>
        <div id="stripes"></div>
    </div>
</div>

<!-- NAVBAR -->

<div id="wrapper-navbar">
		<div class="navbar object">

            <div id="wrapper-bouton-icon">
            	<div id="bouton-ai"><img src="img/icon-ai.svg" alt="illustrator" title="Illustrator" height="28" width="28"></div>
            	<div id="bouton-psd"><img src="img/icon-psd.svg" alt="photoshop" title="Photoshop" height="28" width="28"></div>
            	<div id="bouton-theme"><img src="img/icon-themes.svg" alt="theme" title="Theme" height="28" width="28"></div>
            	<div id="bouton-font"><img src="img/icon-font.svg" alt="font" title="Font" height="28" width="28"></div>
            	<div id="bouton-photo"><img src="img/icon-photo.svg" alt="photo" title="Photo" height="28" width="28"></div>
            	<div id="bouton-premium"><img src="img/icon-premium.svg" alt="premium" title="Premium" height="28" width="28"></div>
			</div>
    	</div>
    </div>

<!-- FILTER -->

	<div id="main-container-menu" class="object">
    	<div class="container-menu">

            <div id="main-cross">
            	<div id="cross-menu"></div>
            </div>

            <div id="main-small-logo">
            	<div class="small-logo"></div>
            </div>

            <div id="main-premium-ressource">
                <div class="premium-ressource"><a href="#">Premium resources</a></div>
            </div>

            <div id="main-themes">
                <div class="themes"><a href="#">Latest themes</a></div>
            </div>

            <div id="main-psd">
                <div class="psd"><a href="#">PSD goodies</a></div>
            </div>

            <div id="main-ai">
                <div class="ai"><a href="#">Illustrator freebies</a></div>
            </div>

            <div id="main-font">
                <div class="font"><a href="#">Free fonts</a></div>
            </div>

            <div id="main-photo">
                <div class="photo"><a href="#">Free stock photos</a></div>
            </div>

        </div>
    </div>


<!-- MESSAGE -->

	<div id="wrapper-container">

		<div class="container object">

			<div id="main-container-image">
                @if($success == 0)
                    <p class="newsletter-text">Email <span id="email">{{ $email }}</span> already exists in our database, please enter another email address</p>
                @else
					<p class="newsletter-text">Email <span id="email">{{ $email }}</span> successfully added to our database. Welcome in the family!</p>
                @endif
                <div style="text-align: center;">
                    <form action="{{ route('app_homepage') }}" method="post">
                        <input type="submit" value="Go back to homepage"
                               name="Submit" id="newsletter-redirect" />
                    </form>
                </div>

				</div>

			</div>


	<div id="wrapper-thank">
    	<div class="thank">
        	<div class="thank-text">pl<span style="letter-spacing:-5px;">a</span>tz</div>
    	</div>
	</div>


							<!-- Include FOOTER -->
							@include('partials.footer')

</div>



<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="js/fastclick.min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-shadow-min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script>





/* PRELOADER */

function preloader() {
	if (document.images) {
		var img1 = new Image();
		var img2 = new Image();
		var img3 = new Image();
		var img4 = new Image();
		var img5 = new Image();
		var img6 = new Image();
		var img7 = new Image();
		var img8 = new Image();
		var img9 = new Image();
		var img10 = new Image();
		var img11 = new Image();
		var img12 = new Image();
		var img13 = new Image();
		var img14 = new Image();
		var img15 = new Image();
		var img16 = new Image();
		var img17 = new Image();
		var img18 = new Image();
		var img19 = new Image();
		var img20 = new Image();

		img1.src = "img/psd-4.jpg";
		img2.src = "img/font-1.jpg";
		img3.src = "img/psd-1.jpg";
		img4.src = "img/psd-2.jpg";
		img5.src = "img/ai-1.jpg";
		img6.src = "img/theme-2.jpg";
		img7.src = "img/psd-3.jpg";
		img8.src = "img/font-2.jpg";
		img9.src = "img/font-3.jpg";
		img10.src = "img/ai-2.jpg";
		img11.src = "img/icons-1.jpg";
		img12.src = "img/ui-1.jpg";
		img13.src = "img/font-5.jpg";
		img14.src = "img/theme-2.jpg";
		img15.src = "img/psd-5.jpg";
		img16.src = "img/icons-3.jpg";
		img17.src = "img/font-4.jpg";
		img18.src = "img/theme-3.jpg";
		img19.src = "img/font-6.jpg";
		img20.src = "img/theme-4.jpg";
	}
}
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);

</script>


</body>


</html>
