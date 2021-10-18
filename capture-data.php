<?php include_once (dirname(__FILE__).'/includes/capture-data.php');?>


<div class="page-title">Capture Data</div>

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

<!-- BEGIN HTML OUTPUT  -->

<div>
	<a href="./index.php?page=captured-data.php" style="text-decoration: none;">
	<img style="vertical-align: middle;" src="./images/cage-48-48.png" />
	<span style="font-weight:bold; cursor: pointer;">View Captured Data</span>
	</a>
</div>
<table style="margin-left:auto; margin-right:auto; width: 650px;">
	<tr>
		<td class="form-header">Data Capture Page</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td>
			This page is designed to capture any parameters sent and store them in a file and a database table. It loops through
			the POST and GET parameters and records them to a file named <span class="label"><?php print $lFilename; ?></span>. On this system, the
			file should be found at <span class="label"><?php print $lFilepath; ?></span>. The page
			also tries to store the captured data in a database table named captured_data and <a href="./index.php?page=show-log.php">logs</a> the captured data. There is another page named
			<a href="index.php?page=captured-data.php">captured-data.php</a> that attempts to list the contents of this table.
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<th>
			The data captured on this request is: <?php print $lCapturedData; ?>
		</th>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td style="text-align:center;">
			Would it be possible to hack the hacker? Assume the hacker will view the captured requests with a web browser.
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
</table>