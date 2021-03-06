<?php

// Display content of $data in a page
function dd($data, $context = 'Debug' ) {
	return highlight_string($context . " : \n" . "<?php\n\$data =\n" . var_export($data, true) . ";\n?>");
}


// Display content of $data in a page AND stop execution
function ddd($data, $context = 'Debug' ) {
	echo (highlight_string($context . " : \n" . "<?php\n\$data =\n" . var_export($data, true) . ";\n?>"));
	die();
}


// Display content of $data in browser's console
function dc($data, $context = '' ){
	ob_start();
	$output  = 'console.group("%c Debug : " + "%c' . $context . '", "color: #676e8a; font-size: 16px;","color: #a6accd; font-size: 16px;");';
	$output .= 'console.log(' . json_encode( $data ) . ');';
	$output .= 'console.groupEnd();';
	$output .= 'console.log("%c%s", "font-size: 20px;","\n");';
	$output  = sprintf( '<script>%s</script>', $output );
	echo $output;
}
