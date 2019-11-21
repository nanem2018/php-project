<?php

$db=mysqli_connect("localhost","root","","img") or die('No connect');
$sql=mysqli_query($db, 'SELECT `id_img` FROM `main`');
while ($id_img=mysqli_fetch_array($sql)) {
	echo "{$id_img['id_img']} <br>";
}


/*?php $myArray =["1","2", "3","4","5","6"]?>
 /*<?php foreach ($myArray as $value):?>
                  <a href="./public/img/images/<?=$value?>.jpg"><img alt="image" src="./public/img/images_small/<?=$value?>.jpg"></a>  
    <?php endforeach;?>  */
/*var_dump($result);
mysqli_close($db);*/
  ?>   