<form method="post">
	<input name="n" autofocus>
	<button>Apostar</button>
</form>

<?php

if(isset($_POST['n']) and $_POST['n']>0){
	$a=$_POST['n'];
	echo '<div>Has apostado '.$a.' €</div>';
}
else echo '<div>Aún no has apostado nada</div>';

if(isset($a)){
	$f=[
		rand(1,6),
		rand(1,6),
		rand(1,6),	
	];
	
	echo '<pre>';
	print_r($f);
	echo '</pre>';
	
	foreach($f as $fruta){
		echo '<img src="'.$fruta.'.jpg" style="width:80px">';
	}
	
}