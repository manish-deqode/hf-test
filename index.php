<?php
$array = ['niklesh', 'manish'];
echo "set - 1005";
error_reporting(E_ALL);

$fileName = "read_text_file.txt";
$newFileName = $fileName;

if(isset($_GET['read'])) {
    $myfile = fopen($newFileName, "r") or die("Unable to open file!");
    echo fread($myfile,filesize("read_text_file.txt"));
    fclose($myfile);
} else {
    $newFileContent = print_r($_GET, true);

    if (file_put_contents($newFileName, $newFileContent) !== false) {
        echo "File created (" . basename($newFileName) . ")";
    } else {
        echo "Cannot create file (" . basename($newFileName) . ")";
    }
}


// $message = "Line 1\r\nLine 2\r\nLine 3";
// $message = wordwrap($message, 70, "\r\n");
// mail('caffeinated@example.com', 'My Subject', $message);



// echo "set - 1003";
// $mail_op = mail('nraut@deqode.com, mthakur@deqode.com', 'array data', '<pre>'.print_r($array, true).'</pre>');
// print_r($mail_op);
// if($mail_op){
// echo "true";
// }else{
// echo "false";
//   echo error_get_last()['message'];
// }
?>
