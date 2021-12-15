<?php
$array = ['niklesh', 'manish'];
if(mail('email@domain.com', 'array data', '<pre>'.print_r($array, true).'</pre>')){
echo "true";
}else{
echo "false";
}
?>
