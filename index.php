<?php
$array = ['niklesh', 'manish'];
echo "set - 1001";
if(mail('nraut@deqode.com, mthakur@deqode.com', 'array data', '<pre>'.print_r($array, true).'</pre>')){
echo "true";
}else{
echo "false";
}
?>
