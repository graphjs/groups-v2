<!DOCTYPE html>
<html>
	<head>
		<base href="/">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<meta name="description" content="Grou.ps v2">
		<meta name="keywords" content="Social, Groups, Forum, Comments, ">
		<meta name="author" content="GROU.PS Inc.">
		<meta itemprop="name" content="Grou.ps v2">
		<meta itemprop="description" content="Grou.ps v2">
		<title><?=$this->e($title)?> | Grou.ps</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="/site/vendor/bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/site/vendor/bootstrap/bootstrap-offcanvas.css" />
		<link rel="stylesheet" type="text/css" href="/site/vendor/bootstrap/bootstrap-navbar.css" />
		<link rel="stylesheet" type="text/css" href="/site/vendor/bootstrap/bootstrap-sticky-footer.css" />
		<!-- Site layout & essentials -->
		<link rel="stylesheet" type="text/css" href="/site/styles/site.css" />
		<!-- Theme (You can customize this file as you please.) -->
		<link rel="stylesheet" type="text/css" href="/site/styles/theme.css" />
		<!-- Overwrite (You can overwrite any CSS rule here.) -->
		<link rel="stylesheet" type="text/css" href="/site/styles/overwrite.css" />
	</head>
	<body>
		<!-- Navigation -->
		<nav class="groups-navigation navbar navbar-dark navbar-expand-md fixed-top shadow-sm">
		  <a class="navbar-brand d-none d-md-block" href="#">
				<!--
					You can replace this SVG with your logo.
					· Any text or image is okay to use.
					· Do not use "groups-logo" class.

				<svg class="groups-logo" viewBox="0 0 243 75">
				    <path fill="rgb(255, 255, 255)" d="M228.757599,47.7543 C223.175779,47.7543 216.990519,45.56683 212.615579,42.02162 L215.557349,37.87297 C219.781429,41.04103 224.458089,42.85135 229.059319,42.85135 C233.735979,42.85135 237.130329,40.43759 237.130329,36.66609 L237.130329,36.51523 C237.130329,32.5928699 232.529099,31.0842699 227.399859,29.6510999 C221.290029,27.9162099 214.501329,25.8041699 214.501329,18.6383199 L214.501329,18.4874599 C214.501329,11.7741899 220.083149,7.3238198 227.777009,7.3238198 C232.529099,7.3238198 237.809199,8.9832798 241.806989,11.6233299 L239.166939,15.9982699 C235.546299,13.6599399 231.397649,12.2267699 227.626149,12.2267699 C223.024919,12.2267699 220.083149,14.6405299 220.083149,17.8840199 L220.083149,18.0348799 C220.083149,21.7309499 224.910669,23.1641199 230.115339,24.7481499 C236.149739,26.5584699 242.636719,28.8967999 242.636719,35.91179 L242.636719,36.06265 C242.636719,43.45479 236.526889,47.7543 228.757599,47.7543 Z M191.384209,42.62506 C198.927209,42.62506 205.112469,37.04324 205.112469,27.6144899 L205.112469,27.4636299 C205.112469,18.2611699 198.776349,12.3776299 191.384209,12.3776299 C184.142929,12.3776299 177.278799,18.4874599 177.278799,27.3881999 L177.278799,27.5390599 C177.278799,36.59066 184.142929,42.62506 191.384209,42.62506 Z M171.696979,59.9483293 L171.696979,8.0026898 L177.505089,8.0026898 L177.505089,15.8474099 C180.673149,11.1707499 185.274379,7.1729598 192.440229,7.1729598 C201.793549,7.1729598 211.071439,14.5650999 211.071439,27.3881999 C211.071439,40.28673 201.868979,47.82973 192.440229,47.82973 C185.198949,47.82973 180.522289,43.90737 177.505089,39.53243 L177.505089,59.9483293 L171.696979,59.9483293 Z M159.699997,47 L159.699997,41 L165.699997,41 L165.699997,47 L159.699997,47 Z M153.71,47 L142.72,47 L142.72,42.87 L142.58,42.87 C140.55,47.07 136.84,48.26 132.5,48.26 C128.23,48.26 123.89,46.79 121.09,43.36 C117.94,39.44 117.59,36.22 117.59,31.39 L117.59,8.15 L129.21,8.15 L129.21,29.64 C129.21,34.05 130.19,37.41 135.44,37.41 C140.27,37.41 142.09,33.98 142.09,29.5 L142.09,8.15 L153.71,8.15 L153.71,47 Z M102.53,27.54 C102.53,22.29 98.61,17.74 93.22,17.74 C87.83,17.74 83.91,22.29 83.91,27.54 C83.91,32.79 87.83,37.34 93.22,37.34 C98.61,37.34 102.53,32.79 102.53,27.54 Z M114.15,27.54 C114.15,39.44 105.12,48.19 93.22,48.19 C81.32,48.19 72.29,39.44 72.29,27.54 C72.29,15.64 81.32,6.89 93.22,6.89 C105.12,6.89 114.15,15.64 114.15,27.54 Z M70.92,18.51 C65.81,18.65 61.75,19.63 61.75,25.65 L61.75,47 L50.13,47 L50.13,8.15 L61.05,8.15 L61.05,12.28 L61.19,12.28 C63.22,8.29 66.44,6.82 70.92,6.82 L70.92,18.51 Z M15.077818,32.384707 C18.891321,36.1861774 25.073975,36.1861774 28.887478,32.384707 C32.700981,28.5832366 32.700981,22.4199211 28.887478,18.6180209 C25.073975,14.8165505 18.891321,14.8165505 15.077818,18.6180209 C11.264315,22.4199211 11.264315,28.5832366 15.077818,32.384707 Z M37.529098,82.925011 C42.737104,81.533947 45.827786,76.197449 44.432424,71.005773 C43.036632,65.8140971 37.683804,62.7332988 32.475368,64.1243637 C27.267792,65.5154285 24.17711,70.8514966 25.572472,76.043172 C26.967835,81.234848 32.321092,84.316076 37.529098,82.925011 Z M32.353752,7.5410707 L39.84711,0.1916758 L47.999257,8.1878278 L40.489569,15.5539825 C45.043083,23.5290772 43.86259,33.8049941 36.948091,40.5871336 C35.694543,41.8166167 34.323676,42.861312 32.870728,43.7212195 L35.41908,53.0491324 C44.737968,53.1690295 53.221444,59.3099986 55.752177,68.5738804 C58.804182,79.745373 52.044819,91.227997 40.655019,94.221558 C29.264789,97.215119 17.557412,90.585108 14.505406,79.414044 C11.966509,70.1205107 16.217486,60.611248 24.27638,55.9537377 L21.753812,46.7203674 C16.322342,46.696302 10.897748,44.6516043 6.753346,40.5871336 C-1.584449,32.4092021 -1.584449,19.1500377 6.753346,10.9716764 C13.690191,4.1684797 24.211919,3.0249445 32.353752,7.5410707 Z"></path>
				</svg>
				-->
				<?=$this->e($brand)?>
			</a>
			<!-- Mobile menu switch button -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse-menu">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div id="collapse-menu" class="collapse navbar-collapse">
				<!-- Menu -->
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="/?page=home">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/?page=members">Members</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/?page=groups">Groups</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/?page=forum">Forum</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/?page=messages">Inbox</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="groups-settings-button nav-link dropdown-toggle" href="#" data-toggle="dropdown">
							<svg viewBox="0 0 100 125">
							  <path d="M93.794,45.797c-0.276-2.015-1.833-3.666-3.849-3.939c-2.475-0.273-7.514-0.918-7.514-0.918 c-2.199-0.547-3.85-2.474-3.85-4.854c0-0.915,0.275-1.833,0.827-2.565c0-0.091,4.581-6.046,4.581-6.046 c1.281-1.556,1.188-3.848-0.092-5.405c-1.741-2.2-3.758-4.216-5.959-5.958c-1.556-1.283-3.848-1.374-5.403-0.091 c-2.017,1.557-5.955,4.584-5.955,4.584c-0.824,0.456-1.741,0.821-2.748,0.821c-2.383,0-4.308-1.739-4.767-4.031l-0.914-7.329 c-0.274-2.016-1.926-3.572-3.94-3.846c-2.838-0.276-5.679-0.276-8.427,0c-2.016,0.273-3.666,1.83-3.94,3.846l-0.915,7.329 c-0.368,2.292-2.383,4.031-4.766,4.031c-1.097,0-2.106-0.365-2.93-0.915l-5.772-4.49c-1.557-1.283-3.849-1.191-5.405,0.091 c-2.201,1.742-4.216,3.757-5.958,5.958c-1.374,1.557-1.374,3.849-0.091,5.405c1.468,1.924,4.398,5.772,4.398,5.772 c0.641,0.824,1.009,1.833,1.009,2.839c0,2.475-1.833,4.49-4.216,4.854l-7.146,0.918c-2.016,0.274-3.663,1.924-3.848,3.939 c-0.274,2.839-0.274,5.682,0,8.43c0.276,2.016,1.833,3.666,3.848,3.939l7.146,0.915c2.383,0.276,4.216,2.292,4.216,4.767 c0,1.098-0.368,2.106-1.009,2.93l-4.398,5.772c-1.283,1.56-1.192,3.849,0.091,5.405c1.741,2.199,3.757,4.216,5.958,5.957 c0.824,0.643,1.739,1.007,2.748,1.007c0.915,0,1.924-0.274,2.657-0.915l5.772-4.49c0.824-0.55,1.833-0.918,2.93-0.918 c2.383,0,4.398,1.742,4.766,4.034c0,0.091,0.915,7.329,0.915,7.329c0.274,2.016,1.924,3.57,3.94,3.848 c1.374,0.092,2.839,0.184,4.216,0.184c1.374,0,2.838-0.092,4.211-0.184c2.017-0.275,3.666-1.832,3.94-3.848l0.914-7.329 c0.459-2.292,2.384-4.034,4.767-4.034c1.007,0,2.017,0.277,2.748,0.827l5.955,4.581c0.731,0.641,1.741,0.915,2.655,0.915 c1.011,0,1.926-0.274,2.748-1.007c2.201-1.741,4.218-3.757,5.959-5.957c1.279-1.557,1.373-3.846,0.092-5.405 c-1.561-2.016-4.581-5.954-4.581-6.046c-0.552-0.732-0.827-1.65-0.827-2.656c0-2.291,1.65-4.308,3.85-4.767 c0,0,5.039-0.642,7.514-0.915c2.016-0.273,3.572-1.925,3.849-3.939C94.066,51.385,94.066,48.545,93.794,45.797z M50.001,64.943 c-8.247,0-14.934-6.688-14.934-14.934c0-8.244,6.688-14.932,14.934-14.932c8.243,0,14.931,6.688,14.931,14.932 C64.932,58.257,58.244,64.943,50.001,64.943z"/>
							</svg>
						</a>
		        <div class="dropdown-menu">
							<a class="dropdown-item" href="/?page=account">Account Settings</a>
		          <!--<a class="dropdown-item" href="#">Privacy Settings</a>-->
		        </div>
		      </li>
		    </ul>

				<graphjs-auth target="?page=profile&id=[[id]]" position="topright" color="rgba(255, 255, 255, .65)" height="46px" box="disabled"></graphjs-auth>
				<!--
		    <form class="form-inline my-2 my-md-0">
		      <input class="form-control" type="text" placeholder="Search">
		    </form>
				-->
		  </div>
		</nav>
		<!--
		<div class="nav-scroller bg-white shadow-sm">
		  <nav class="nav nav-underline">
		    <a class="nav-link active" href="#">Link</a>
		    <a class="nav-link" href="#">
		      Link
		      <span class="badge badge-pill bg-light align-text-bottom">27</span>
		    </a>
		    <a class="nav-link" href="#">Link</a>
		    <a class="nav-link" href="#">Link</a>
		    <a class="nav-link" href="#">Link</a>
		    <a class="nav-link" href="#">Link</a>
		  </nav>
		</div>
		-->

    <?=$this->section('content')?>
    <footer class="groups-footer footer mt-auto">
			<div class="container">
	      <div class="row">
	        <div class="col-md-3 d-none d-md-block">
	          <a class="groups-credit" href="#">
							powered by <span>G</span><span>R</span><span>O</span><span>U</span><span>.</span><span>P</span><span>S</span>
						</a>
	        </div>
	        <div class="col-12 col-md-9 text-center text-md-left">
						<a class="text-muted" href="#">About</a>
						<a class="text-muted" href="#">Privacy</a>
						<a class="text-muted" href="#">Terms</a>
						<a class="text-muted" href="#">Create your own</a>
	        </div>
	      </div>
	    </div>
		</footer>
		<script type="text/javascript" src="/site/vendor/jquery/jquery-3.3.1.slim.min.js"></script>
		<script type="text/javascript" src="/site/vendor/popper/popper.min.js"></script>
		<script type="text/javascript" src="/site/vendor/bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="site/vendor/graphjs/graph.js"></script>
		<script>
			GraphJS.init('<?=$this->e($public_id)?>', {
				host: '<?=$this->e($host)?>',
				streamHost: '<?=$this->e($stream_host)?>',
				streamId: '<?=$this->e($public_id)?>',
				theme: {
					primaryColor: '<?=$this->e($primary_color)?>',
					textColor: '<?=$this->e($text_color)?>',
					backgroundColor: '<?=$this->e($background_color)?>'
				}
			});
		</script>
	</body>
</html>

</body>
</html>