<?php 
	try{
    	switch ($_SESSION["security-level"]){
    		case "0": // This code is insecure
				$lEnableHTMLControls = FALSE;
    			$lFormMethod = "GET";
				$lEnableJavaScriptValidation = FALSE;
				$lProtectAgainstMethodTampering = FALSE;
				$lEncodeOutput = FALSE;
				break;
    		
    		case "1": // This code is insecure
				$lEnableHTMLControls = TRUE;
    			$lFormMethod = "GET";
				$lEnableJavaScriptValidation = TRUE;
				$lProtectAgainstMethodTampering = FALSE;
				$lEncodeOutput = FALSE;
			break;
	    		
			case "2":
			case "3":
			case "4":
    		case "5": // This code is fairly secure
				$lEnableHTMLControls = TRUE;
    			$lFormMethod = "POST";
				$lEnableJavaScriptValidation = TRUE;
				$lProtectAgainstMethodTampering = TRUE;
				$lEncodeOutput = TRUE;
			break;
    	}//end switch

    	$lFormSubmitted = FALSE;
		if (isset($_POST["user-info-php-submit-button"]) || isset($_REQUEST["user-info-php-submit-button"])) {
			$lFormSubmitted = TRUE;
		}// end if
		
		if ($lFormSubmitted){
	    	if ($lProtectAgainstMethodTampering) {
	   			$lUserInfoSubmitButton = $_POST["user-info-php-submit-button"];
				$lUsername = $_POST["username"];
				$lPassword = $_POST["password"];
	    	}else{
    			$lUserInfoSubmitButton = $_REQUEST["user-info-php-submit-button"];
				$lUsername = $_REQUEST["username"];
				$lPassword = $_REQUEST["password"];
	    	}// end if $lProtectAgainstMethodTampering
		}// end if $lFormSubmitted

   	} catch (Exception $e) {
		echo $CustomErrorHandler->FormatError($e, $lQueryString);
   	}// end try;
?>

<script type="text/javascript">
	<?php 
	if($lEnableJavaScriptValidation){
		echo "var lValidateInput = \"TRUE\"" . PHP_EOL;
	}else{
		echo "var lValidateInput = \"FALSE\"" . PHP_EOL;
	}// end if		
	?>
			
	function onSubmitOfForm(/*HTMLFormElement*/ theForm){
		try{
			var lUnsafeCharacters = /[`~!@#$%^&*()-_=+\[\]{}\\|;':",./<>?]/;

			if(lValidateInput == "TRUE"){
				if (theForm.username.value.length > 15 || 
					theForm.password.value.length > 15){
						alert('Username too long. We dont want to allow too many characters.\n\nSomeone might have enough room to enter a hack attempt.');
						return false;
				}// end if
				
				if (theForm.username.value.search(lUnsafeCharacters) > -1 || 
					theForm.password.value.search(lUnsafeCharacters) > -1){
						alert('Dangerous characters detected. We can\'t allow these. This all powerful blacklist will stop such attempts.\n\nMuch like padlocks, filtering cannot be defeated.\n\nBlacklisting is l33t like l33tspeak.');
						return false;
				}// end if
			}// end if(lValidateInput)
			
			return true;
		}catch(e){
			alert("Error: " + e.message);
		}// end catch
	}// end function onSubmitOfForm(/*HTMLFormElement*/ theForm)
	
</script>


<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Búsqueda de usuarios (SQL)</h3>
    </div>

    <form action="./index.php?page=user-info.php" method="<?php echo $lFormMethod; ?>"  enctype="application/x-www-form-urlencoded" onsubmit="return onSubmitOfLoginForm(this);">

	<input type="hidden" name="page" value="user-info.php" />
                
		<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta</h5>
                  Ingrese nombre de usuario y contraseña para ver los detalles de la cuenta
                </div>
		
		<div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText" name="username" size="20" 
			    <?php
						if ($lEnableHTMLControls) {
							echo('minlength="1" maxlength="20" required="required"');
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
							echo('minlength="1" maxlength="20" required="required"');
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
			<button name="user-info-php-submit-button"  type="submit" class="btn btn-info" value="View Account Details">Ver detalles de la cuenta</button>							
		</div>

	</form>
</div>

<div class="callout callout-danger">
<?php
	if ($lFormSubmitted){
		try {
			try {
				$LogHandler->writeToLog("Recieved request to display user information for: " . $lUsername);					
			} catch (Exception $e) {
				//do nothing
			}// end try
	    			
			$lQueryResult = $SQLQueryHandler->getUserAccount($lUsername, $lPassword);
	    	
	   		$lResultsFound = FALSE;
	   		$lRecordsFound = 0;
	   		if (isset($lQueryResult->num_rows)){
				if ($lQueryResult->num_rows > 0) {
	   				$lResultsFound = TRUE;
	   				$lRecordsFound = $lQueryResult->num_rows;
				}//end if
			}//end if

    		/* Print out table header */
			if($lEncodeOutput){
				$lUsername = $Encoder->encodeForHTML($lUsername);
			}// end if


				echo'	<div class="callout callout-info">
				Resultado de &quot;<span style="color:#770000;">'
				.$lUsername.
				'</span>&quot;  '.$lRecordsFound.' registros encontrados.
				</div>';



    		/* Print out results */
			if ($lResultsFound){
			    while($row = $lQueryResult->fetch_object()){
			    	try {
						$LogHandler->writeToLog("user-info.php: Displayed user-information for: " . $row->username);				
			    	} catch (Exception $e) {
			    		// do nothing
			    	}//end try
					
					if(!$lEncodeOutput){
						$lUsername = $row->username;
						$lPassword = $row->password;
						$lSignature = $row->mysignature;
					}else{
						$lUsername = $Encoder->encodeForHTML($row->username);
						$lPassword = $Encoder->encodeForHTML($row->password);
						$lSignature = $Encoder->encodeForHTML($row->mysignature);			
					}// end if
					
					echo "<span style=\"font-weight:bold;\">Usuario=</span><span>{$lUsername}</span><br/>";
					echo "<span style=\"font-weight:bold;\">Contraseña=</span><span>{$lPassword}</span><br/>";
					echo "<span style=\"font-weight:bold;\">Firma=</span><span>{$lSignature}</span><br/><br/>";
				}// end while
	
			} else {
				echo '<script>document.getElementById("id-bad-cred-tr").style.display=""</script>';
			}// end if ($lResultsFound)
    	} catch (Exception $e) {
			echo $CustomErrorHandler->FormatError($e, "Error attempting to display user information");
       	}// end try;
    	
	}// end if (isset($_POST)) 
?>

</div>

<?php include_once (__ROOT__.'/includes/back-button.inc');?>
<?php include_once (__ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?>

<span>
	<a style="text-decoration: none; cursor: pointer;" href="./webservices/soap/ws-user-account.php">
		<img style="vertical-align: middle;" src="./images/ajax_logo-75-79.jpg" height="75px" width="78px" />
		<span style="font-weight:bold;">Cambiar a la versión del servicio web SOAP</span>
	</a>
</span>
&nbsp;&nbsp;&nbsp;
<span>
	<a href="index.php?page=user-info-xpath.php">
		<img src="./images/xml-logo-64-64.png" />
		<span class="label">Cambiar a la versión XPath</span>
	</a>
</span>


