<?

function conf($key){

	$keys = func_get_args();

	if(sizeof($keys) == 1 AND sizeof($tmp = explode('/', $keys[0])) > 1)
	{
		$keys = $tmp;
	}

	$key = array_shift($keys);

	$ret = get_instance()->config->item($key, 'my_config');

	foreach((array)$keys as $k){
		$ret = $ret[$k];
	}

	return $ret;
}

function dd(){
    array_map(function($x) { var_dump($x); }, func_get_args());
    die;
}

function debug($dat){
	$debug = debug_backtrace();
	printf('<div><b>debug at %s on line %s</b></div>' , $debug[0]['file'] , $debug[0]['line']);
	echo '<pre>';
	print_r($dat);
	echo '</pre>';
}

function pre($dat){
	echo '<pre>';
	print_r($dat);
	echo '</pre>';
}

function csrf_token(){
	return get_instance()->security->get_csrf_hash();
}
