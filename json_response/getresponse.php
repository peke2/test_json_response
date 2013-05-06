<?php
//	JavaScriptからの呼び出しに対してJSON形式のデータを返す


	//	PHP5.4以降から使用可能な「JsonSerializable」
		//	JSONへのシリアライズを明示するためのクラス
	//	PHPのクラスの内容をJavaScript形式にできるかと思ったが動作が違う
	class	Test implements JsonSerializable
	{
		private	$param;

		function	__construct()
		{
			$this->param = 12345;
			$this->value = 987;
		}

		//	この関数の戻り値がJSON形式にシリアライズされる
		function	jsonSerialize()
		{
			return	$this->param;
		}

	}

	$data = array(
		'text' => 'こんにちは',
		'value' => 5,
		'url' => 'http://google.com',
		'object' => new Test(),
	);


	$json_data = json_encode($data);

//header('Content-type: text/javascript; charset=utf-8');
//echo "(".$json_data.")";
//	直接JSON形式として返せばOKっぽい
header('Content-type: application/json; charset=utf-8');
echo $json_data;

?>