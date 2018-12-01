<?php
  

function htmlspecialchars_array(array $array) {
foreach($array as $key => $val) {
  $array[$key] = (is_array($val)) ? htmlspecialchars_array($val) : htmlspecialchars($val);
}
return $array;
}

/////////////////////////////////////////////////
//  Meteo
/////////////////////////////////////////////////

function meteo() {
  $meteo = '<div id="cont_NDQyMDZ8NXw0fDJ8MXwwMDAwMDB8MXxGRkZGRkZ8Y3wx">
		  		<div id="spa_NDQyMDZ8NXw0fDJ8MXwwMDAwMDB8MXxGRkZGRkZ8Y3wx">
		  			<a id="a_NDQyMDZ8NXw0fDJ8MXwwMDAwMDB8MXxGRkZGRkZ8Y3wx" href="http://www.meteocity.com/france/touvois_v44206/" target="_blank" style="color:#333;text-decoration:none;">Météo Touvois</a>
		  		</div>
		  		<script type="text/javascript" src="http://widget.meteocity.com/js/NDQyMDZ8NXw0fDJ8MXwwMDAwMDB8MXxGRkZGRkZ8Y3wx"></script>
		  	</div>';
  return $meteo;
}

?>