<?php 
/**
 * Plugin Name: Plugin Input
 * Plugin URI: http://www.estebanbernal.com.ar
 * Description: toma un texto desde input y muestra en un alert
 * Version: 1.0.0
 * Author: Esteban B
 * Author URI: http://www.estebanbernal.com.ar
 */


add_shortcode( "myinput", function($atts, $content){
	$value = $atts['value'];
	return '<div class="responsiveContent"><input id="idinput" value="'.$value.'" /> <button onclick=texto() > Mostrar Texto</button></div>';
});


add_action('wp_footer', function(){?>

<script>
	// Here comes the code
	function texto(){
	
		let texto=document.getElementById('idinput').value;
		alert(texto);
	}
	
</script>
<?php }  ,9999); ?>



?>