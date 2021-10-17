<?php
    $lSecurityLevel = $_SESSION["security-level"];

    switch ($lSecurityLevel){
        case "0": // This code is insecure
            $lSecurityLevelMessage = "Nivel de seguridad: ".$lSecurityLevel." (Hosed)";
            break;
        case "1": // This code is insecure
            // DO NOTHING: This is equivalent to using client side security
            $lSecurityLevelMessage = "Nivel de seguridad: ".$lSecurityLevel." (Client-Side Security)";
            break;

        case "2":
        case "3":
        case "4":
        case "5": // This code is fairly secure
            $lSecurityLevelMessage = "Nivel de seguridad: ".$lSecurityLevel." (Secure)";
            break;
    }// end switch

	if($_SESSION['loggedin'] == "True"){

	    switch ($lSecurityLevel){
	   		case "0": // This code is insecure
	   		case "1": // This code is insecure
	   			// DO NOTHING: This is equivalent to using client side security
				$logged_in_user = $_SESSION['logged_in_user'];
			break;

	   		case "2":
	   		case "3":
	   		case "4":
	   		case "5": // This code is fairly secure
	   			// encode the entire message following OWASP standards
	   			// this is HTML encoding because we are outputting data into HTML
				$logged_in_user = $Encoder->encodeForHTML($_SESSION['logged_in_user']);
			break;
	   	}// end switch

	   	$lUserID = $_SESSION['uid'];

	   	$lUserAuthorizationLevelText = 'User';

	   	if ($_SESSION['is_admin'] == 'TRUE'){
	   		$lUserAuthorizationLevelText = 'Admin';
	   	}// end if

		$lAuthenticationStatusMessage =
			'Logged In ' .
			$lUserAuthorizationLevelText . ": " .
			'<span class="logged-in-user">'.$logged_in_user.'</span>'.
			'<a href="index.php?page=edit-account-profile.php&uid='.$lUserID.'">'.
            '<img src="images/edit-icon-20-20.png" /></a>';
	} else {
		$logged_in_user = "anonymous";
		$lAuthenticationStatusMessage = "Sin iniciar sesión";
	}// end if($_SESSION['loggedin'] == "True")

	if ($_SESSION["EnforceSSL"] == "True"){
		$lEnforceSSLLabel = "Drop TLS";
	}else {
		$lEnforceSSLLabel = "Enforce TLS";
	}//end if

	$lHintsMessage = "Consejos: ".$_SESSION["hints-enabled"];

?>
<!DOCTYPE HTML PUBLIC "-">
<html>
<head>
	<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="styles/global-styles.css" />
	<link rel="stylesheet" type="text/css" href="styles/ddsmoothmenu/ddsmoothmenu.css" />
	<link rel="stylesheet" type="text/css" href="javascript/jQuery/colorbox/colorbox.css" />
	<link rel="stylesheet" type="text/css" href="styles/gritter/jquery.gritter.css" />
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>



<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script> $.widget.bridge('uibutton', $.ui.button)</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="js/summernote-bs4.min.js"></script>
<script src="js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="js/dashboard.js"></script>
<script src="js/demo.js"></script>


	<script src="javascript/jQuery/jquery.js"></script>
	<script src="javascript/jQuery/colorbox/jquery.colorbox-min.js"></script>
	<script src="javascript/ddsmoothmenu/ddsmoothmenu.js"></script>
	<script src="javascript/gritter/jquery.gritter.min.js"></script>
	<script src="javascript/hints/hints-menu.js"></script>
	<script src="javascript/inline-initializers/jquery-init.js"></script>
	<script src="javascript/inline-initializers/ddsmoothmenu-init.js"></script>
	<script src="javascript/inline-initializers/populate-web-storage.js"></script>
	<script src="javascript/inline-initializers/gritter-init.js"></script>
	<script src="javascript/inline-initializers/hints-menu-init.js"></script>
</head>
<body>
<table class="main-table-frame">
	<tr class="main-table-frame-dark">
		<td class="main-table-frame-first-bar" colspan="2">
			<img src="images/coykillericon-50-38.png"/>
			OWASP Mutillidae II: Mantenga la calma y disfrute
		</td>
	</tr>
	<tr class="main-table-frame-dark">
		<td class="main-table-frame-second-bar" colspan="2">
			<?php /* Note: $C_VERSION_STRING in index.php */
			    echo $C_VERSION_STRING;
			?>
			<span><?php echo $lSecurityLevelMessage; ?></span>
			<span><?php echo $lHintsMessage; ?></span>
			<span><?php echo $lAuthenticationStatusMessage ?></span>
		</td>
	</tr>
	<tr class="main-table-frame-menu-bar">
		<td class="main-table-frame-menu-bar" colspan="2">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">

			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php?page=home.php&popUpNotificationCode=HPH0" class="nav-link">Inicio</a>
				</li>

				<li class="nav-item d-none d-sm-inline-block">
				<?php
				if ($_SESSION['loggedin'] == 'True'){
					echo '<a href="index.php?do=logout" class="nav-link">Salir</a>';
				} else {
					echo '<a href="index.php?page=login.php" class="nav-link">Acceso / Registro</a>';
				}// end if
			    ?>
				</li>
				
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php?do=toggle-hints&page='.$lPage.'" class="nav-link">Alternar sugerencias</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php?do=toggle-security&page=<?php echo $lPage?>" class="nav-link">Alternar seguridad</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
				<a href="index.php?do=toggle-enforce-ssl&page=<?php echo $lPage?>" class="nav-link"><?php echo $lEnforceSSLLabel; ?></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="set-up-database.php" class="nav-link">Reiniciar BD</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php?page=show-log.php" class="nav-link">Ver registro</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php?page=captured-data.php" class="nav-link">Ver datos de captura</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php?do=logout" class="nav-link">Salir</a>
				</li>

			</ul>

			<form class="form-inline ml-3">
			<div class="input-group input-group-sm">
				<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
				<button class="btn btn-navbar" type="submit">
					<i class="fas fa-search"></i>
				</button>
				</div>
			</div>
			</form>
  		</nav>
		</td>
	</tr>
	<tr>
		<td class="main-table-frame-left">
			<?php require_once 'main-menu.php'; ?>
			<div>&nbsp;</div>
			<div>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="45R3YEXENU97S">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="Donate Today!">
					<img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				Quiero ayudar?
			</div>
			<div>&nbsp;</div>
			<div>
				<a href="http://www.youtube.com/user/webpwnized" target="_blank">
					<img alt="Webpwnized YouTube Channel" src="./images/youtube-play-icon-40-40.png" />
					<br/>
					Tutoriales en vídeo
				</a>
			</div>
			<div>&nbsp;</div>
			<div>
				<a href="https://twitter.com/webpwnized" target="_blank">
					<img alt="Webpwnized Twitter Channel" src="./images/twitter-bird-48-48.png" />
					<br/>
					Anuncios
				</a>
			</div>
			<div>&nbsp;</div>
			<div>
				<a
					href="https://www.sans.org/reading-room/whitepapers/application/introduction-owasp-mutillidae-ii-web-pen-test-training-environment-34380"
					target="_blank"
					title="Whitepaper: Introduction to OWASP Mutillidae II Web Pen Test Training Environment"
				>
					<img align="middle" alt="Webpwnized Twitter Channel" src="./images/pdf-icon-48-48.png" />
					<br/>
					Empezando
				</a>
			</div>
			<div>&nbsp;</div>
		</td>
		<td class="main-table-frame-right">
			<!-- Begin Content -->
