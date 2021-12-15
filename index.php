<?php
$array = ['niklesh', 'manish'];
mail('email@domain.com', 'array data', '<pre>'.print_r($array, true).'</pre>');
?>
