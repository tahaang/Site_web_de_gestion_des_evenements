
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet"  href="card.css">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet">


		<!--stars rating test :worked but 3 lib alot
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
		-->

		<!-- test2 rating : working too but its like the first need alot and need jquery last version from website to be compatible with ...
		<link href="node_modules/bootstrap-star-rating/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.js"></script>
		<script src="node_modules/bootstrap-star-rating/js/star-rating.min.js" type="text/javascript"></script>-->
		

		<!-- Latest compiled and minified CSS :methode recomended in production -->
		<!-- 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		-->

		

		<title>page d'accueil</title>
	</head>
	<body >
			<div class="fullscreen">
  <div class="container">
    <div class="card card_1">
      <div class="date">
        11 June 2018
                <span class="tv_ico"><img src="http://www.cartaodental.com/nbase/image/pc.svg"></span>
      </div>
      <div class="content">
        <div class="title">
          La Casa de Papel
        </div>
        <div class="text">
          The most watch series in 2018, dont you miss any episode on Netflix!
        </div>
      </div>
      <div class="sinopse">
                  
          <iframe id="ytplayer" type="text/html" data-video="https://www.youtube.com/embed/ZAXA1DV4dtI?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&modestbranding=1&controls=0&showinfo=1&mute=1"
  src="" frameborder="0" autoplay allowfullscreen></iframe>
        
        <div class="content-sinopse">          
          <div class="title">Series Synopsis</div>
          <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in hendrerit nulla, sed congue lorem. Phasellus sollicitudin tortor dui, id scelerisque ipsum ultrices vitae. Cras sed laoreet odio, vel ornare enim. Quisque porta quam at augue posuere, id luctus velit ullamcorper. Aenean sapien ligula, malesuada in mollis eu, vestibulum ut quam.
          </div>
        </div>
        <div class="view series_lacasa"> Watch Full Series </div>
      </div>
    </div>
    <div class="card card_2">
 <div class="date">
        16 April 2019
                <span class="tv_ico"><img src="http://www.cartaodental.com/nbase/image/pc.svg"></span>
      </div>
      <div class="content">
        <div class="title">
          Game Of Thrones
        </div>
        <div class="text">
          For alot of people the best series ever created, the most proud son of HBO!
        </div>
      </div>
      <div class="sinopse">
        
          <iframe id="ytplayer" type="text/html" data-video="https://www.youtube.com/embed/giYeaKsXnsI?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&modestbranding=1&controls=0&showinfo=1&mute=1"
  src="" frameborder="0" autoplay allowfullscreen></iframe>
        
        <div class="content-sinopse">
          <div class="title">Series Synopsis</div>
          <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in hendrerit nulla, sed congue lorem. Phasellus sollicitudin tortor dui, id scelerisque ipsum ultrices vitae. Cras sed laoreet odio, vel ornare enim. Quisque porta quam at augue posuere, id luctus velit ullamcorper. Aenean sapien ligula, malesuada in mollis eu, vestibulum ut quam.
          </div>
        </div>
        <div class="view series_got"> Watch Full Series </div>
      </div>
    </div>
    <div class="card card_3">
 <div class="date">
        22 October 2018
                <span class="tv_ico"><img src="http://www.cartaodental.com/nbase/image/pc.svg"></span>
      </div>
      <div class="content">
        <div class="title">
          Vikings
        </div>
        <div class="text">
          One of the best series about Vikings and their way of living dont miss it!
        </div>
      </div>
      <div class="sinopse">
          
          <iframe class="vikings" data-video="https://www.youtube.com/embed/1j2sXLbzm9U?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&modestbranding=1&controls=0&showinfo=1&mute=1" id="ytplayer" type="text/html"
  src="" frameborder="0" autoplay allowfullscreen></iframe>
        
        <div class="content-sinopse">
          <div class="title">Series Synopsis</div>
          <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in hendrerit nulla, sed congue lorem. Phasellus sollicitudin tortor dui, id scelerisque ipsum ultrices vitae. Cras sed laoreet odio, vel ornare enim. Quisque porta quam at augue posuere, id luctus velit ullamcorper. Aenean sapien ligula, malesuada in mollis eu, vestibulum ut quam.
          </div>
        </div>
        <div class="view series_vikings"> Watch Full Series </div>
      </div>
    </div>
  </div>
</div>

<div class="fullserie">
  <div class="close"><img src="http://www.cartaodental.com/nbase/image/close.svg"></div>  

  <div class="episodes">
    <div class="episode episode_1" data-lacasa="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-616580.jpg" data-got="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-43195.jpg" data-vikings="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-504732.png">

    </div>
    <div class="episode episode_2" data-lacasa="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-616580.jpg" data-got="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-43195.jpg" data-vikings="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-504732.png">

    </div>
    <div class="episode episode_3" data-lacasa="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-616580.jpg" data-got="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-43195.jpg" data-vikings="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-504732.png">

    </div>
     <div class="episode episode_4" data-lacasa="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-616580.jpg" data-got="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-43195.jpg" data-vikings="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-504732.png">

    </div>
     <div class="episode episode_5" data-lacasa="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-616580.jpg" data-got="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-43195.jpg" data-vikings="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-504732.png">

    </div>
  </div>

</div>
		
		<script type="card.js"></script>
		
		<footer id="footer">
			<div id="footer-inner">
				<!--ecrire quelque chose-->
			</div>
		</footer>	

	<!-- jQuery library : recomended-->
	<!--
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	-->
	<!-- Latest compiled JavaScript -->
	<!--
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	-->
	</body>
</html>