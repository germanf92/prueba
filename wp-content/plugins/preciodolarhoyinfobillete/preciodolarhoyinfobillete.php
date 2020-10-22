<?php
/*
Plugin Name: Dolarhoyinfo 
Plugin URI: http://dolarhoyinfo.com
Description: Obtener precio del Dolar hoy
Author: Juana
Version: 1.0
Author URI: http://dolarhoyinfo.com
*/
class dolarhoyinfo extends WP_Widget{
 
	function dolarhoyinfo()
	{
       		$options = array('classname' => 'mi-estilo',
                 'description' => 'Widget que muestra cotizacón del Dólar');
       		$this->WP_Widget('dolarhoyinfo', 'Dolar', $options);
	}
	
	function widget($args, $instance) 
	{        
       		extract($args);
        	$titulo = apply_filters('widget_title', $instance['titulo']);
        	$titulo = $instance['descripcion'];
        	$url = $instance['url'];
        	echo $before_widget;
        	echo $before_title;
        	echo $titulo;
        	echo $after_title;
		
		$test = file_get_contents("http://dolarhoyinfo.com/testselect.php");
		$testeur = file_get_contents("http://dolarhoyinfo.com/testselecteur.php");
		$testbrl = file_get_contents("http://dolarhoyinfo.com/testselectbrl.php");
		$url = file_get_contents("http://dolarhoyinfo.com/testselecturlbillete.php");
                $testurl = str_replace("<br>","",$url);  	
		$y=1.013; 
		$x=1.055;

       		?>
 		<table style="width:100%"  align="center">
 		 <tr>
  		  <td>Dolar</td>
   		  <td>Euro</td>
		  <td>Real</td>
  		 </tr>
  		 <tr>
    		  <td>$<?php echo $op=number_format($test * $y,2) ?></td>
    		  <td>$<?php echo $op=number_format($testeur * $x,2) ?></td>
		  <td>$<?php echo $op=number_format($testbrl * $x,2) ?></td>
  		 </tr>
		</table> 
		<br>
		<center><FONT SIZE=1><a href="<?php echo $testurl?>">Divisas</a></FONT></center>
		<?php
        	// echo '<p>'.$url.'</p>';
        	echo $after_widget;    
	}
	
	function update($new_instance, $old_instance) 
	{
        	$instance = $old_instance;       
       		$instance['titulo'] = sanitize_text_field($new_instance['titulo']);
        	$instance['descripcion'] = sanitize_text_field($new_instance['descripcion']);
        	$instance['url'] = sanitize_text_field($new_instance['url']);
        	return $instance;
	}
	
	function form($instance) 
	{	
       	 	// Valores por defecto
       	 	$defaults = array('titulo' => 'Dolar', 'descripcion'=> '', 'url' => '');    
       	 	$instance = wp_parse_args((array)$instance, $defaults);    
       	 	$titulo = $instance['titulo'];
       	 	$descripcion = $instance['descripcion'];
       	 	$url = $instance['url'];
?>
		<br>
		Titulo:
        	<input class="widefat" type="text" name="<?php echo $this->get_field_name('descripcion');?>"
                value="<?php echo esc_attr($descripcion);?>"/>               
<?php
	}
		
}
//añadimos la acción en el evento de inicializar el widget, de esta
//forma lo registramos como otro más y se mostrará correctamente
add_action('widgets_init', create_function('', 'return register_widget("dolarhoyinfo");'));