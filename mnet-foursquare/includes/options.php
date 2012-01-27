<?php
if($_POST){	
	update_option('m4sq-venue', trim($_POST['m4sq-venue']));
	update_option('m4sq-api-key', trim($_POST['m4sq-api-key']));	
	update_option('m4sq-api-secret', trim($_POST['m4sq-api-secret']));		
	}
?>
<div id="message" class="updated fade" style="display:none"></div>

<div class="wrap">
<h2>Multinet 4SQ.</h2>
<p>¿Dudas, consultas? aacuna@multinet.cl</p>

<h3>Opciones:</h3>
<form method="post" action="#">
	<?php 
	$optvenue = get_option('m4sq-venue');
	$optapikey = get_option('m4sq-api-key');	
	$optapisecret = get_option('m4sq-api-secret');		
	?>
			<p>
			<label>
				Venue ID<br />
				<input type="text" value="<?php echo $optvenue; ?>" name="m4sq-venue" />
			</label>
			</p>
			<p>
			<label>
				API Key<br />
				<input type="text" value="<?php echo $optapikey; ?>" name="m4sq-api-key" />
			</label>
			</p>
			<p>
			<label>
				API Secret<br />
				<input type="text" value="<?php echo $optapisecret; ?>" name="m4sq-api-secret" />
			</label>
			</p>
			
    <input type="submit" id="m4sq-submit" value="Guardar Cambios" />
</form>

<pre>
		                   ___    __                        __      
		                  /\_ \  /\ \__  __                /\ \__   
		  ___ ___   __  __\//\ \ \ \ ,_\/\_\    ___      __\ \ ,_\  
		/' __` __`\/\ \/\ \ \ \ \ \ \ \/\/\ \ /' _ `\  /'__`\ \ \/  
		/\ \/\ \/\ \ \ \_\ \ \_\ \_\ \ \_\ \ \/\ \/\ \/\  __/\ \ \_ 
		\ \_\ \_\ \_\ \____/ /\____\\ \__\\ \_\ \_\ \_\ \____\\ \__\
		 \/_/\/_/\/_/\/___/  \/____/ \/__/ \/_/\/_/\/_/\/____/ \/__/
	 
	 
</pre>