<?php
function saveFile(string $file, string $data): bool {
    $myFile = fopen($file, 'w');
    if ($myFile) {
        $result = fwrite($myFile, $data);
        if ($result) {
            fclose($myFile);
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
function saveImage(string $imageBase64, string $imageName) {
    $imageBase64Array = explode(';base64,', $imageBase64);
    $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
    $imageDecoded = base64_decode($imageBase64Array[1]);
    saveFile("static/images/{$imageName}.jpg", $imageDecoded); // static/images/{$imageName}.{$imgExtention}
}