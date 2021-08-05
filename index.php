<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL | E_STRICT);

require 'nanodicom.php';

$dir = realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'samples' . DIRECTORY_SEPARATOR;
//$dir = '/Applications/MAMP/htdocs/s1/';

//var_dump($dir);

$files = [];
if ($handle = opendir($dir)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && is_file($dir . $file)) {
            $files[] = $file;
        }
    }
    closedir($handle);
}

var_dump($files);

foreach ($files as $file) {
    $filename = $dir . $file;
//    var_dump($file);

    // 1) Most basic example. Fast!

    try
    {
        echo "1) Most basic example. Fast!\n";
        $dicom = Nanodicom::factory($filename);
        // Only a small subset of the dictionary entries were loaded
        echo $dicom->parse()->profiler_diff('parse')."\n";
        unset($dicom);
    }
    catch (Nanodicom_Exception $e)
    {
        echo 'File failed. '.$e->getMessage()."\n";
    }


    // 6) Load simple and extend it to 'dumper'


//        try {
//            echo "6) Load simple and extend it to 'dumper'\n";
//            $dicom = Nanodicom::factory($filename);
//            echo $dicom->parse()->extend('dumper')->dump();
//            echo $dicom->profiler_diff('parse') . ' ' . $dicom->profiler_diff('dump') . "\n";
//            unset($dicom);
//        } catch (Nanodicom_Exception $e) {
//            echo 'File failed. ' . $e->getMessage() . "\n";
//        }




}
