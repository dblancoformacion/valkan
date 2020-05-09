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
	
	//$f=[1,1,1];
	
	foreach($f as $fruta){
		echo '<img src="'.$fruta.'.jpg" style="width:80px">';
	}
	
	$p=0;
	
	if($f[0]==1 or $f[1]==1 or $f[2]==1)
		$p=$a;
	
	if( 
		( $f[0]==1 and $f[1]==1 ) or
		( $f[0]==1 and $f[2]==1 ) or
		( $f[1]==1 and $f[2]==1 )
	) $p=4*$a;
	
	if( 
		( $f[0]==1 and $f[1]==1 and $f[2]==1)
	) $p=10*$a;		
	
	echo '<div>Has ganado '.$p.' €</div>';
	
}