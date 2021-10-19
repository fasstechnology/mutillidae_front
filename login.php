<?php 
	try {	    	
    	switch ($_SESSION["security-level"]){
    		case "0": // This code is insecure.
				$lEnableJavaScriptValidation = FALSE;
				$lEnableHTMLControls = FALSE;
			break;

    		case "1": // This code is insecure.
				$lEnableJavaScriptValidation = TRUE;
				$lEnableHTMLControls = TRUE;
			break;

	   		case "2":
	   		case "3":
	   		case "4":
    		case "5": // This code is fairly secure
    			$lEnableJavaScriptValidation = TRUE;
				$lEnableHTMLControls = TRUE;
    		break;
    	}// end switch
    	
	} catch(Exception $e){
		echo $CustomErrorHandler->FormatError($e, "Error setting up configuration.");
	}// end try	
?>

<script type="text/javascript">
<!--
	<?php 
		if ($_SESSION["loggedin"]=="True") {
			echo "var l_loggedIn = true;" . PHP_EOL;
		}else {
			echo "var l_loggedIn = false;" . PHP_EOL;
		}// end if
	
		if (isset($lAuthenticationAttemptResult)){
			echo "var lAuthenticationAttemptResultFlag = {$lAuthenticationAttemptResult};" . PHP_EOL;
		}else{
			echo "var lAuthenticationAttemptResultFlag = -1;".PHP_EOL;
		}// end if
 
		if($lEnableJavaScriptValidation){
			echo "var lValidateInput = \"TRUE\"" . PHP_EOL;
		}else{
			echo "var lValidateInput = \"FALSE\"" . PHP_EOL;
		}// end if		
	?>

	function onSubmitOfLoginForm(/*HTMLFormElement*/ theForm){
		try{
			if(lValidateInput == "TRUE"){
				var lUnsafeCharacters = /[`~!@#$%^&*()-_=+\[\]{}\\|;':",./<>?]/;
				if (theForm.username.value.length > 15 || 
					theForm.password.value.length > 15){
						alert('Nombre de usuario demasiado largo. No queremos permitir demasiados personajes.\n\n Alguien puede tener suficiente espacio para ingresar a un intento de pirateo.');
						return false;
				};// end if
				
				if (theForm.username.value.search(lUnsafeCharacters) > -1 || 
					theForm.password.value.search(lUnsafeCharacters) > -1){
						alert('Dangerous characters detected. We can\'t allow these. This all powerful blacklist will stop such attempts.\n\nMuch like padlocks, filtering cannot be defeated.\n\nBlacklisting is l33t like l33tspeak.');
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

<div class="col-md-12 col-sm-3 col-12">
  <div class="info-box bg-gradient-info">              
	<label><FONT SIZE=6>Iniciar sesión.</FONT></label>              
  </div>
</div>
<br>
<br>

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Inicie sesión con su cuenta</h3>
    </div>

    <form action="index.php?page=login.php" method="post"  enctype="application/x-www-form-urlencoded" onsubmit="return onSubmitOfLoginForm(this);"	id="idLoginForm">

		<input name="csrf-token" type="hidden" value="<?php echo $lNewCSRFTokenForNextRequest; ?>" />
                

		
		<div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText" name="username" size="20" "
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
					<input type="password" class="form-control" id="inputPassword3" name="password" size="20"
					<?php
						if ($lEnableHTMLControls) {
							echo('minlength="1" maxlength="15" required="required"');
						}// end if
					?>
				>
		<br>
		<br>
				No tiene una cuenta? <a href="index.php?page=register.php">Regístrese aquí</a>

				</div>
		</div>
	
				

		</div>
                <!-- /.card-body -->
		<div class="card-footer">                  
			<button name="login-php-submit-button"  type="submit" class="btn btn-info" value="Login">Ingresar</button>							
		</div>

	</form>
</div>

<?php include_once (__ROOT__.'/includes/back-button.inc');?>
<?php include_once (__ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?>



<div id="id-log-out-div" style="text-align: center; display: none;">
	<table>
		<tr>
			<td colspan="2" class="hint-header">Has iniciado sesión como <?php echo $_SESSION['logged_in_user']; ?></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
			<td colspan="2" style="text-align:center;">
				<input class="button" type="button" value="Logout" onclick="document.location='index.php?do=logout'" />
			</td>
		</tr>
	</table>	
</div>

<script type="text/javascript">
	var cUNSURE = -1;
   	var cACCOUNT_DOES_NOT_EXIST = 0;
   	var cPASSWORD_INCORRECT = 1;
   	var cNO_RESULTS_FOUND = 2;
   	var cAUTHENTICATION_SUCCESSFUL = 3;
   	var cAUTHENTICATION_EXCEPTION_OCCURED = 4;
   	var cUSERNAME_OR_PASSWORD_INCORRECT = 5;
   	
   	var lMessage = "";
   	var lAuthenticationFailed = "FALSE";
   	
	switch(lAuthenticationAttemptResultFlag){
   		case cACCOUNT_DOES_NOT_EXIST: 
   	   		lMessage="La cuenta no existe"; lAuthenticationFailed = "TRUE";
   	   		break;
   		case cPASSWORD_INCORRECT: 
   	   		lMessage="Contraseña incorrecta"; lAuthenticationFailed = "TRUE"; 
   	   		break;
   		case cNO_RESULTS_FOUND: 
   	   		lMessage="No se han encontrado resultados"; lAuthenticationFailed = "TRUE"; 
   	   		break;
   		case cAUTHENTICATION_EXCEPTION_OCCURED: 
   	   		lMessage="Ocurrió una excepción"; lAuthenticationFailed = "TRUE"; 
   		break;
   		case cUSERNAME_OR_PASSWORD_INCORRECT: 
   	   		lMessage="Usuario o contraseña incorrectos"; lAuthenticationFailed = "TRUE"; 
   		break;
   	};

	if(lAuthenticationFailed=="TRUE"){
		document.getElementById("id-authentication-failed-tr").style.display="";
		document.getElementById("id-authentication-failed-td").innerHTML=lMessage;
	}// end if AuthenticationAttemptResultFlag

	if (!l_loggedIn){
		document.getElementById("id-log-in-form-div").style.display="";
		document.getElementById("id-log-out-div").style.display="none";
	}else{
		document.getElementById("id-log-in-form-div").style.display="none";
		document.getElementById("id-log-out-div").style.display="";		
	}// end if l_loggedIn	
</script>