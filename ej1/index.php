<form method="post">
	<input name="n">
	<button>Enviar</button>
</form>

<?php

//echo $_POST['n'];

$a=18;
if(isset($_POST['n']) and $_POST['n']>0){
	$a=$_POST['n'];
}
else{
	echo 'No has enviado ningún dato';
	//exit();
}

echo $a;

echo '<pre>';

echo '   *<br/>';
echo '  * *<br/>';
echo ' *   *<br/>';
echo '*     *<br/>';

echo '</pre>';

echo '<pre>';
for($i=$a-1;$i>=0;$i=$i-1){
	echo $i;
	for($j=0;$j<$i;$j=$j+1){
		echo ' ';
	}
	echo '*';
	echo '<br/>';
}
echo '</pre>';

// tabla del 2

for($i=0;$i<=10;$i=$i+1){
	echo '2*'.$i.'='.(2*$i);
	echo '<br/>';
}
























