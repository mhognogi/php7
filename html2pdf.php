<?php
$url = 'http://example.com/document.html';
$data = json_decode(file_get_contents('http://api.rest7.com/v1/html_to_image.php?url=' . $url . '&format=pdf'));

if (@$data->success !== 1) {
    die('Failed');
}
$pdf = file_get_contents($data->file);
file_put_contents('z_z.pdf', $pdf);
