<?php

// =========================================================
// Get values
// =========================================================

$esFNameAr = $_POST["esFNameAr"] ?? '';
$gender = $_POST["gender"] ?? '';


// =========================================================
// Validate
// =========================================================

if ($esFNameAr === '') {
    http_response_code(400);
    die("Name is required.");
}

if ($gender !== 'male' && $gender !== 'female') {
    http_response_code(400);
    die("Gender is required.");
}


// =========================================================
// Handle uploaded image - MALE ONLY
// =========================================================

$personal_img2 = null;
$width = 0;
$height = 0;

if ($gender === 'male') {

    if (
        !isset($_FILES["imag"]) ||
        $_FILES["imag"]["error"] !== UPLOAD_ERR_OK
    ) {
        http_response_code(400);
        die("Image is required for male.");
    }


    $target_dir = "images/";

    $originalName =
        basename($_FILES["imag"]["name"]);

    $target_file =
        $target_dir . $originalName;


    // Move uploaded file
    if (
        !move_uploaded_file(
            $_FILES["imag"]["tmp_name"],
            $target_file
        )
    ) {
        http_response_code(500);
        die("Failed to upload image.");
    }


    // Create image
    $personal_img2 =
        imagecreatefromfile("./images/" . $originalName);


    // Get image dimensions
    list($width, $height) =
        getimagesize("./images/" . $originalName);
}


// =========================================================
// Function to create image from file
// =========================================================

function imagecreatefromfile($filename)
{
    if (!file_exists($filename)) {
        throw new InvalidArgumentException(
            'File "' . $filename . '" not found.'
        );
    }

    switch (
        strtolower(
            pathinfo(
                $filename,
                PATHINFO_EXTENSION
            )
        )
    ) {

        case 'jpeg':
        case 'jpg':
            return imagecreatefromjpeg($filename);

        case 'png':
            return imagecreatefrompng($filename);

        case 'gif':
            return imagecreatefromgif($filename);

        default:
            throw new InvalidArgumentException(
                'File "' . $filename .
                '" is not a valid jpg, png or gif image.'
            );
    }
}


// =========================================================
// Arabic text
// =========================================================

$A = $esFNameAr;


// Arabic glyphs
require './Arabic.php';

$Arabic = new I18N_Arabic('Glyphs');

$A = $Arabic->utf8Glyphs($A);


// =========================================================
// Background image
// =========================================================

$im = imagecreatefrompng("background.png");

imageAlphaBlending($im, true);
imageSaveAlpha($im, true);


// =========================================================
// Colors
// =========================================================

$guColorBlue =
    imagecolorallocate($im, 40, 87, 152);

$guColorGray =
    imagecolorallocate($im, 128, 128, 128);

$guColorBlack =
    imagecolorallocate($im, 0, 0, 0);

$guColorRed =
    imagecolorallocate($im, 200, 0, 0);


// =========================================================
// Fonts
// =========================================================

$arFontFile =
    "./GE_Dinar_One_Light.ttf";

$arFontFileBold =
    "./GE_Dinar_One_Medium.ttf";


// =========================================================
// Font size
// =========================================================

$arH1 = 30;


// =========================================================
// Add uploaded image - MALE ONLY
// =========================================================

if ($gender === 'male') {

    $X = 250;
    $Y = 250;

    imagecopyresampled(
        $im,
        $personal_img2,
        $X,
        $Y,
        0,
        0,
        500,
        500,
        $width,
        $height
    );

}


// =========================================================
// Add name
// =========================================================

$angle = 0;

$bbox = imagettfbbox(
    50,
    0,
    $arFontFileBold,
    $A
);

$center1 =
    (imagesx($im) / 2)
    -
    (($bbox[2] - $bbox[0]) / 2);


imagettftext(
    $im,
    $arH1,
    $angle,
    $center1 + 100,
    680,
    $guColorRed,
    $arFontFileBold,
    $A
);


// =========================================================
// Output image
// =========================================================

header("Content-Type: image/png");

imagepng($im);


// =========================================================
// Cleanup
// =========================================================

if ($personal_img2 !== null) {
    imagedestroy($personal_img2);
}

imagedestroy($im);

?>