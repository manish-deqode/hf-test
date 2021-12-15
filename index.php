<?php
$array = ['niklesh', 'manish'];
echo "set - 1004";
error_reporting(E_ALL);

$pagename = 'my_page1';

$newFileName = $pagename.".php";
$newFileContent = '<?php echo "something..."; ?>';

if (file_put_contents($newFileName, $newFileContent) !== false) {
    echo "File created (" . basename($newFileName) . ")";
} else {
    echo "Cannot create file (" . basename($newFileName) . ")";
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
