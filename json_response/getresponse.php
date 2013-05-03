<?php
//	JavaScriptからの呼び出しに対してJSON形式のデータを返す


	$data = array(
		'text' => 'こんにちは',
		'value' => 5,
		'url' => 'http://google.com',
	);

	$json_data = json_encode($data);

header('Content-type: text/javascript; charset=utf-8');
echo "(".$json_data.")";

?>