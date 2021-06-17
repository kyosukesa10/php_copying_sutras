<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF_8">
    <title>ロクマル農園</title>
  </head>
  <body>

	<?php

	$mbango=$_POST['mbango'];

	$hoshi['M1'] = 'カニ星雲';
	$hoshi['M31'] = 'アンドロメダ大星雲';
	$hoshi['M42'] = 'オリオン大星雲';
	$hoshi['M45'] = 'すばる';
	$hoshi['M57'] = 'ドーナツ星雲';
	
	foreach($hoshi as $key=> $val){
		print $key.'は'.$val;
		print '<br />';
	}
	print $mbango;
	print 'あなたが選んだ星は';
	print $hoshi[$mbango];
	print 'が旬です。';

	?>
  </body>
</html>
