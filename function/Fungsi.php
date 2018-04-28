<?php
#-------------------------------------------------------------------------------------------------
	function dirToArray($dir)
	{ 
		$result = array(); 
		$cdir = scandir($dir); 

		foreach ($cdir as $key => $value) 
		{ 
			if (!in_array($value,array(".",".."))) 
			{ 
				if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
					$result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
				else 
					$result[] = $value;
			} 
		} 

		return $result; 
	}
#-------------------------------------------------------------------------------------------------
	function translateGo($apiKey, $text, $source = 'en', $target = 'ms')
	{
		# https://github.com/GoogleCloudPlatform/php-docs-samples/tree/master/translate

		$url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey 
			. '&q=' . rawurlencode($text)
			. '&source=' . $source 
			. '&target=' . $target;

		$handle = curl_init($url);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($handle);
		$responseDecoded = json_decode($response, true);
		curl_close($handle);

		return $responseDecoded['data']['translations'][0]['translatedText'];
	}
#-------------------------------------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------