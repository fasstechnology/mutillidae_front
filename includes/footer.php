<footer class="main-footer">

<?php

		$lUserAgentString = "";
			if(isset($_SERVER['HTTP_USER_AGENT'])){
				$lUserAgentString = $_SERVER['HTTP_USER_AGENT'];
			}// end if

			switch ($_SESSION["security-level"]){
				case "0": // This code is insecure
				case "1": // This code is insecure
					// DO NOTHING: This is equivalent to using client side security
					$lPHPVersion = "PHP Version: " . phpversion();
				break;

				case "2":
				case "3":
				case "4":
				case "5": // This code is fairly secure
					// encode the entire message following OWASP standards
					// this is HTML encoding because we are outputting data into HTML
					$lUserAgentString = $Encoder->encodeForHTML($lUserAgentString);
					$lPHPVersion = "PHP Version: No disponible (El modo seguro no revela la versión del servidor)";
				break;
			}// end switch
    ?>

<tr class="main-table-frame-dark">
    			<td colspan="2">
    				Browser: <?php echo $lUserAgentString; ?>
    				<br/>
    				<?php echo $lPHPVersion; ?>
    			</td>
    		</tr>
    
</footer>