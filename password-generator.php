<?php
/*
 * Vulnerabilities
 * Reflected Cross-site Scripting
 * JavaScript Injection
 * Method Tampering
 * DOM-based Cross-site Scripting
 */
	try {
		$lUsernameForJS = "";
		$lPasswordJSMessage = "";
		
    	switch ($_SESSION["security-level"]){
	    		case "0": // This code is insecure.
	    		case "1": // This code is insecure.
					// Grab inputs insecurely. $_REQUEST allows any input paramter. Not just POST.
					if (isset($_REQUEST["username"])){
	    				$lUsernameForJS = $_REQUEST["username"]; // allow javascript and xss injection
					}//end if
	    		break;

	    		case "2":
	    		case "3":
	    		case "4":
	    		case "5": // This code is fairly secure
					/* Protect against one form of patameter pollution 
					 * by grabbing inputs only from GET parameters. */ 
					if (isset($_GET["username"])){
	    				$lUsernameForJS = $Encoder->encodeForJavaScript($_GET["username"]);
					}
					break;
	    	}// end switch
	    	
	    	if (strlen($lUsernameForJS) > 0) {
	    		$lPasswordJSMessage = "This password is for {$lUsernameForJS}";	
	    	}
	    	
    	} catch (Exception $e) {
			echo $CustomErrorHandler->FormatError($e, "Input: " . $lUsernameForHTML);
    	}// end try
?>

<script>
	function onSubmitOfGeneratorForm(/*HTMLFormElement*/ theForm){
		try{

		    var lPasswordText = "";
		    var lPasswordCharset = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_-+=[]{}\|;',./:?";

		    for( var i=0; i < 15; i++ ){
		    	lPasswordText += lPasswordCharset.charAt(Math.floor(Math.random() * lPasswordCharset.length));
		    }// end for i
			
			document.getElementById("idPasswordInput").innerHTML = "Contraseña: <span style=\"color:red;border-width:1px;border-color:black;\">" + lPasswordText + "</span>";
			document.getElementById("idPasswordTableRow").style.display = "";
			return false;

		}catch(e){
			alert("Error: " + e.message);
		}// end catch
	}// end function onSubmitOfGeneratorForm(/*HTMLFormElement*/ theForm)
</script>



<div class="card card-info" id="id-generator-form-div">
    <div class="card-header">
        <h3 class="card-title">Generador de contraseñas</h3>
    </div>

    <form enctype="application/x-www-form-urlencoded" id="idGeneratorForm">

	<table>
			<tr><td></td></tr>
			<tr>
				<td class="label"  style="text-align: center;">
					Es importante crear contraseñas seguras. Haga clic en el botón de abajo para generar una contraseña.
				</td>
			</tr>
			<tr><td></td></tr>
			<tr style="text-align: center;">
				<td id="idUsernameInput" class="label"></td>
			</tr>
			<tr id="idPasswordTableRow" style="display: none;">
				<td class="label" id="idPasswordInput"></td>
			</tr>
			<tr><td></td></tr>
		</table>
                

		
		
		
	
				

	
                <!-- /.card-body -->
		<div class="card-footer">                  
			<button  name="password-generator-php-submit-button"  type="button" class="btn btn-info" value="Generate Password" onclick="onSubmitOfGeneratorForm(this.form);">Generar contraseña</button>							
		</div>

	</form>
</div>


<?php include_once (__ROOT__.'/includes/back-button.inc');?>
<?php include_once (__ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?>


<script>
	try{
		document.getElementById("idUsernameInput").innerHTML = "<?php echo $lPasswordJSMessage; ?>";
	}catch(e){
		alert("Error: " + e.message);
	}// end catch
</script>