<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Polo360</title>
		<meta name="author" content="Alexandre wavelet"/>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
		<link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/assets/main.css" />
		<?php Loader::element('header_required'); ?>
	</head>
	<body>
		<div class="pure-g-r" id="header">
			<div class="pure-u-2-24"></div>

			<div class="pure-u-5-24">
				<img src="<?php echo $this->getThemePath(); ?>/assets/images/logo.PNG">
			</div>

			<div class="pure-u-2-24"></div>

			<div class="pure-u-13-24">
				<div class="pure-menu pure-menu-open pure-menu-horizontal">
					<?php 
						$a = new GlobalArea('menu');
						$a->display();
					?>
				</div>
			</div>

			<div class="pure-u-2-24"></div>
		</div>