<?php
$array = ['niklesh', 'manish'];
if(mail('nraut@deqode.com, mthakur@deqode.com', 'array data', '<pre>'.print_r($array, true).'</pre>')){
echo "true";
}else{
echo "false";
}
?>
