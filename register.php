<?php 
	require_once (__ROOT__.'/classes/CSRFTokenHandler.php');
	$lCSRFTokenHandler = new CSRFTokenHandler("owasp-esapi-php/src/", $_SESSION["security-level"], "register-user");

	switch ($_SESSION["security-level"]){
		case "0": // This code is insecure
			// DO NOTHING: This is equivalent to using client side security
			$lEnableJavaScriptValidation = FALSE;
			$lEnableHTMLControls = FALSE;
			$lProtectAgainstMethodTampering = FALSE;
			$lEncodeOutput = FALSE;
			break;
	
		case "1": // This code is insecure
			// DO NOTHING: This is equivalent to using client side security
			$lEnableJavaScriptValidation = TRUE;
			$lEnableHTMLControls = TRUE;
			$lProtectAgainstMethodTampering = FALSE;
			$lEncodeOutput = FALSE;
			break;
	
		case "2":
		case "3":
		case "4":
		case "5": // This code is fairly secure
			/*
			 * Concerning SQL Injection, use parameterized stored procedures. Parameterized
			 * queries is not good enough. You cannot use least privilege with queries.
			 */
			$lEnableJavaScriptValidation = TRUE;
			$lEnableHTMLControls = TRUE;
			$lProtectAgainstMethodTampering = TRUE;
			$lEncodeOutput = TRUE;
			break;
	}// end switch

	$lNewCSRFTokenForNextRequest = $lCSRFTokenHandler->generateCSRFToken();
	$lFormSubmitted = isset($_REQUEST["register-php-submit-button"]);
?>

		  <div class="col-md-12 col-sm-3 col-12">
            <div class="info-box bg-gradient-info">              
				<label><FONT SIZE=6>Registrese para obtener una cuenta.</FONT></label>              
            </div>
          </div>


<br>

<?php
	if ($lFormSubmitted){
		
		try {					
			$lValidationFailed = false;
					
	   		if ($lProtectAgainstMethodTampering) {
   				$lUsername = $_POST["username"];
				$lPassword = $_POST["password"];
				$lConfirmedPassword = $_POST["confirm_password"];
				$lUserSignature = $_POST["my_signature"];
				$lPostedCSRFToken = $_POST['csrf-token'];
	   		}else{
	   			$lUsername = $_REQUEST["username"];
				$lPassword = $_REQUEST["password"];
				$lConfirmedPassword = $_REQUEST["confirm_password"];
				$lUserSignature = $_REQUEST["my_signature"];
				$lPostedCSRFToken = $_REQUEST['csrf-token'];
	   		}//end if
	   		
	   		if ($lEncodeOutput){
	   			$lUsernameText = $Encoder->encodeForHTML($lUsername);
	   		}else{
	   			//allow XSS by not encoding
	   			$lUsernameText = $lUsername;
	   		}//end if
	   		
			$LogHandler->writeToLog("Intentando agregar una cuenta para: " . $lUsername);				
		   	
			if (!$lCSRFTokenHandler->validateCSRFToken($lPostedCSRFToken)){
				throw (new Exception("Violación de seguridad: se detectó un intento de falsificación de solicitud entre sitios.", 500));
			}// end if
					
		   	if (strlen($lUsername) == 0) {
		   		$lValidationFailed = TRUE;
				echo '<h2 class="mensaje de error">Nombre de usuario no puede estar en blanco</h2>';
		   	}// end if
					
		   	if ($lPassword != $lConfirmedPassword ) {
				$lValidationFailed = TRUE;
		   		echo '<h2 class="error-message">Passwords do not match</h2>';
		   	}// end if
						   	
		   	if (!$lValidationFailed){					
		   		$lRowsAffected = $SQLQueryHandler->insertNewUserAccount($lUsername, $lPassword, $lUserSignature);
				echo '<h2 class="mensaje de éxito">Cuenta creada para ' . $lUsernameText .'. '.$lRowsAffected.' rows inserted.</h2>';
				$LogHandler->writeToLog("Cuenta agregada para: " . $lUsername);
		   	}// end if (!$lValidationFailed)
			
		} catch (Exception $e) {
			echo $CustomErrorHandler->FormatError($e, "No se pudo agregar la cuenta");
			$LogHandler->writeToLog("No se pudo agregar la cuenta para: " . $lUsername);			
		}// end try
			
	}// end if $lFormSubmitted
?>

<br>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Elija su nombre de usuario, contraseña y firma</h3>
    </div>

    <form class="form-horizontal" action="index.php?page=register.php" method="post" enctype="application/x-www-form-urlencoded"
	    onsubmit="return onSubmitOfForm(this);>

		<input name="csrf-token" type="hidden" value="<?php echo $lNewCSRFTokenForNextRequest; ?>" />
                
		<div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText" name="username" size="15" "
			    <?php
					if ($lEnableHTMLControls) {
				    	echo('minlength="1" maxlength="15" required="required"');
					}// end if
				?>
				>
            </div>
        </div>

		<div class="form-group row">
			<label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword3" name="password" size="15"
					<?php
						if ($lEnableHTMLControls) {
							echo('minlength="1" maxlength="15" required="required"');
						}// end if
					?>
				>
				</div>
		</div>
		<div class="form-group row">
			<label for="inputPassword3" class="col-sm-2 col-form-label">Confirmar contraseña</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword3" name="confirm_password" size="15"
					<?php
						if ($lEnableHTMLControls) {
							echo('minlength="1" maxlength="15" required="required"');
							}// end if
					?>
				>
				</div>
		</div>
		<div class="form-group row">
		<label for="inputPassword3" class="col-sm-2 col-form-label">Firma</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="3" cols="50" name="my_signature"
			<?php
				if ($lEnableHTMLControls) {
				echo('minlength="1" maxlength="100" required="required"');
				}// end if
			?>
			></textarea>
		</div>
	  </div>

     <a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>" target="_blank">Generador de contraseñas</a>

		</div>
                <!-- /.card-body -->
		<div class="card-footer">                  
										
			<button name="register-php-submit-button"  type="submit" class="btn btn-info" value="Create Account">Crear cuenta</button>
		</div>
		<div>
			<span>
				<a style="text-decoration: none; cursor: pointer;" href="./webservices/rest/ws-user-account.php">
					<img style="vertical-align: middle;" src="./images/ajax_logo-75-79.jpg" height="75px" width="78px" />
						<span style="font-weight:bold;">Cambiar a la versión de servicio web RESTful de esta página</span>
				</a>
			</span>
		</div>
	</form>
</div>


<script type="text/javascript">
<!--
	<?php 
		if($lEnableJavaScriptValidation){
			echo "var lValidateInput = \"TRUE\"" . PHP_EOL;
		}else{
			echo "var lValidateInput = \"FALSE\"" . PHP_EOL;
		}// end if		
	?>

	function onSubmitOfForm(/*HTMLFormElement*/ theForm){
		try{
			if(lValidateInput == "TRUE"){
				var lUnsafeCharacters = /[`~!@#$%^&*()-_=+\[\]{}\\|;':",./<>?]/;
				if (theForm.username.value.length > 15 || 
					theForm.password.value.length > 15){
						alert('Nombre de usuario demasiado largo. No queremos permitir demasiados personajes.\n\nAlguien puede tener suficiente espacio para ingresar a un intento de pirateo.');
						return false;
				};// end if
				
				if (theForm.username.value.search(lUnsafeCharacters) > -1 || 
					theForm.password.value.search(lUnsafeCharacters) > -1){
						alert('Caracteres peligrosos detectados. No podemos permitir estos. Esta lista negra todopoderosa detendrá tales intentos.\n\nAl igual que los candados, el filtrado no se puede anular..\n\nLa lista negra es l33t como l33tspeak.');
						return false;
				};// end if
			};// end if(lValidateInput)
			
			return true;
		}catch(e){
			alert("Error: " + e.message);
		};// end catch
	};// end function onSubmitOfLoginForm(/*HTMLFormElement*/ theForm)
//-->
</script>



<?php include_once (__ROOT__.'/includes/back-button.inc');?>
<?php include_once (__ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?>

<?php
	if ($lFormSubmitted) {
		echo $lCSRFTokenHandler->generateCSRFHTMLReport();
	}// end if
?>