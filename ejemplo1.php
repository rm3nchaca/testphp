<?php

$archivo = filter_input(INPUT_GET, 'xx', FILTER_SANITIZE_ENCODED);
file_get_contents($archivo);
exec($x);
while(1){
	echo ("hello");
}
?>
