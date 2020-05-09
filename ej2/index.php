<form method="post">
	<input name="n">
	<button>Enviar</button>
</form>

<?php

$a=5;
if(
	isset($_POST['n'])
	and $_POST['n']>0
	and $_POST['n']<=30
){
	$a=$_POST['n'];
}
else{
	echo 'No has enviado ningún dato';
	//exit();
}

echo '<pre>';
for($i=$a-1;$i>=0;$i=$i-1){
	//echo '$i='.$i;
	for($j=0;$j<$i;$j=$j+1){
		echo ' ';
	}
	for($j=0;$j<$a;$j++)
		echo '* ';
	echo '<br/>';
}
echo '</pre>';