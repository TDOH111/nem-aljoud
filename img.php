<?php
//Get values
$esFNameAr=$_POST["esFNameAr"];

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["imag"]["name"]);
move_uploaded_file($_FILES["imag"]["tmp_name"], $target_file);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
//Texts to be written
//images to be put

function imagecreatefromfile( $filename ) {
    if (!file_exists($filename)) {
        throw new InvalidArgumentException('File "'.$filename.'" not found.');
    }
    switch ( strtolower( pathinfo( $filename, PATHINFO_EXTENSION ))) {
        case 'jpeg':
        case 'jpg':
            return imagecreatefromjpeg($filename);
        break;

        case 'png':
            return imagecreatefrompng($filename);
        break;

        case 'gif':
            return imagecreatefromgif($filename);
        break;

        default:
            throw new InvalidArgumentException('File "'.$filename.'" is not valid jpg, png or gif image.');
        break;
    }
}



$personal_img2 = imagecreatefromfile("./images/".$_FILES["imag"]["name"]);
$A=$esFNameAr;

//for Arabic glyphs Class (To correctly write the arabic text)
require './Arabic.php';
$Arabic = new I18N_Arabic('Glyphs');

$A=$Arabic->utf8Glyphs($A);

function utf8_strrev($str){
    preg_match_all('/./us', $str, $ar);
    return join('', array_reverse($ar[0]));
}


$A = utf8_strrev($A);

//Get the background image
$im = imagecreatefrompng("background.png");
imageAlphaBlending($im, true);
imageSaveAlpha($im, true);


//Colors to be used for the writing..
$guColorBlue = imagecolorallocate($im, 40, 87, 152);
$guColorGray = imagecolorallocate($im, 128, 128, 128);
$guColorBlack = imagecolorallocate($im, 0, 0, 0);
$guColorRed = imagecolorallocate($im, 200, 0, 0);

//Fonts File with its Path
$arFontFile="./GE_Dinar_One_Light.ttf"; //Arabic Font Normal GE Dinar One
$arFontFileBold="./GE_Dinar_One_Medium.ttf"; //Arabic Font Bold GE Dinar One


//Font Sizes
$arH1=80; //For arabic title H1 size (14)

//location to start the writing on the image
$name_length = strlen($A);
$X=1100; //45 390
$Y=650; //76    320
$angle=0;

list($width, $height) = getimagesize("./images/".$_FILES["imag"]["name"]);
list($newwidth, $newheight) =  getimagesize('./background.png');
//$personal_img2 = imagerotate($personal_img2, 270, 0);

//
function correctImageOrientation($filename)
{
    $exif = exif_read_data($filename);
    if ($exif && isset($exif['Orientation'])) {
        $orientation = $exif['Orientation'];
        if ($orientation != 1) {
            $img = imagecreatefromjpeg($filename);
            $deg = 0;
            switch ($orientation) {
                case 3:
                    $deg = 180;
                    break;
                case 6:
                    $deg = 270;
                    break;
                case 8:
                    $deg = 90;
                    break;
            }
            if ($deg) {
                $img = imagerotate($img, $deg, 0);
            }
            imagejpeg($img, $filename, 95);
        }
    }
}

//correctImageOrientation("./images/".$_FILES["imag"]["name"]);

//
imagecopyresampled($im, $personal_img2, $X, $Y, 0, 0, 850, 850, $width, $height);

//$im = imagerotate($im, 270, 0);


imagejpeg($im, 'out.jpg', 100);

//putting text on the image in the center
$bbox = imagettfbbox(50, 0, $arFontFileBold, $A);
$center1 = (imagesx($im) / 2) - (($bbox[2] - $bbox[0]) / 2);
imagettftext($im, $arH1, $angle, $center1-180, 1600, $guColorRed, $arFontFileBold, $A); 

//Output the image to browser
//header of the file to be recognized as image
header("Content-type: image/png");
imagepng($im);
imagedestroy($im);

?>