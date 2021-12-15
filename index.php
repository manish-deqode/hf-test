<?php
$array = ['niklesh', 'manish'];
echo "set - 1002";
$mail_op = mail('nraut@deqode.com, mthakur@deqode.com', 'array data', '<pre>'.print_r($array, true).'</pre>');
print_r($mail_op);
if($mail_op){
echo "true";
}else{
echo "false";
  echo error_get_last()['message'];
}
?>
