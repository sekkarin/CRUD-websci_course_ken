<?php
include_once('./ImageMagage.php');


$objImage = new ImageManager();
$objImage->AddImage('https://www.akc.org/wp-content/themes/akc/component-library/assets/img/welcome.jpg');
$objImage->AddImage('http://t3.gstatic.com/licensed-image?q=tbn:ANd9GcRCFzg30JogIj40hQFI4DrVBMpfe83eLstaRvslhmCDXlgwTOgeT9ZGeSt0aTQSqj_M');
$objImage->AddImage('https://www.akc.org/wp-content/themes/akc/component-library/assets/img/welcome.jpg');
// $objImage->GetImage('0');
$imageAll = $objImage->GetImagejson();
$myArray = json_decode($imageAll);

foreach ($myArray as $value) {
    ?>
    <img src="<?= $value ?>" height="150" width="150">
<?php } ?>