<?php
include("moduleFile.php");
function validCountOfRightParameters(array $arrayForCheck, array $expectedParameters): bool { 
    $rightKeys = 0;
    foreach ($expectedParameters as $key) {
        if (array_key_exists($key, $arrayForCheck)) {
            $rightKeys++;
        } else {
            echo 'Missed parameter is ' . $key;
            return false;
        }
    }
    return $rightKeys == count($expectedParameters);
}
function validImageCreation(string $imageBase64, string $imageName) : bool {
    saveImage($imageBase64, $imageName);
    if (exif_imagetype("static/images/{$imageName}.jpg")) {
        return true;
    } else {
        echo "Hmm, something wrong with Image_URL, check it again";
        unlink("static/images/{$imageName}.jpg");
        return false;
    }

}