<?php

// php script for generate qr code via composer require endroid/qr-code

error_reporting(0);

if(empty($_GET['data'])) die();

$data = urldecode($_GET['data']);
$data_md = md5("$data-sault @ you 1");
$data_file = "qr-$data_md.png";

require "vendor/autoload.php";
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

if(!is_file($data_file)){
    
    $qr = QrCode::create($data);
    $writer = new PngWriter();
    header('Content-Type: image/png');
    echo $writer->write($qr)->saveToFile($data_file);
    readfile($data_file);
    
    unlink($data_file);

    
}else{
    
    header('Content-Type: image/png');
    readfile($data_file);
    
}


