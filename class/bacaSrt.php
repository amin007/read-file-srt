<?php

# https://stackoverflow.com/questions/11659118/parsing-srt-files
define('SRT_STATE_SUBNUMBER', 0);
define('SRT_STATE_TIME',      1);
define('SRT_STATE_TEXT',      2);
define('SRT_STATE_BLANK',     3);

class bacaSrt
{
#------------------------------------------------------------------------------------------------------#
	//function __construct($dir)
	public function mulaBaca($dir, $dirName)
	{
		//$lines   = file('test.srt');
		# C:\xampp\htdocs\belajar\baca-fail\srt\Mr Robot\Mr. Robot - season 1
		$lines   = file("$dir");
		$subs    = array();
		$state   = SRT_STATE_SUBNUMBER;
		$subNum  = 0;
		$subText = $subTime = '';

		$subs = $this->bacaLines($lines, $subs, $state, $subNum, $subText, $subTime);
		//return $this->bacaSubs($subs, $dirName);
		return $this->baca2Subs($subs, $dirName);
	}
#------------------------------------------------------------------------------------------------------#
	public function bacaLines($lines, $subs, $state, $subNum, $subText, $subTime)
	{
		foreach($lines as $line) 
		{	##-----------------------------------------------------------------------------
			switch($state) 
			{
				case SRT_STATE_SUBNUMBER:
					$subNum = trim($line);
					$state  = SRT_STATE_TIME;
					break;
				case SRT_STATE_TIME:
					$subTime = trim($line);
					$state   = SRT_STATE_TEXT;
					break;
				case SRT_STATE_TEXT:
					if (trim($line) == '') 
					{
						$sub = new stdClass;
						$sub->number = $subNum;
						@list($sub->startTime, $sub->stopTime) = explode(' --> ', $subTime);
						$sub->text   = $subText;
						$subText     = '';
						$state       = SRT_STATE_SUBNUMBER;
						$subs[]      = $sub;
					} else {//$subText .= $line;
						$subText .= htmlspecialchars($line, ENT_QUOTES);
					}
					break;
			}##-----------------------------------------------------------------------------
		}
		#------------------------------------------------------------------------------------------------------#
		if ($state == SRT_STATE_TEXT) {
			// if file was missing the trailing newlines, we'll be in this
			// state here.  Append the last read text and add the last sub.
			$sub->text = $subText;
			$subs[] = $sub;
		}//*/
		#------------------------------------------------------------------------------------------------------#

		return $subs;
	}
#------------------------------------------------------------------------------------------------------#
	public function bacaSubs($subs, $dirName)
	{
		echo '<pre>'; print_r($subs); echo '</pre>';
		/*$text = '';
		foreach($subs as $sub) 
		{
			//echo $sub->number . ' begins at ' . $sub->startTime .
			//' and ends at ' . $sub->stopTime . '.  The text is: <br /><pre>' .
			//$sub->text . "</pre><br />\n";
			$text .= $sub->number . ':' . $sub->text . "<br>\n";
			//echo $sub->number . ':' . $translate . "<br>\n";
			$text .= ( isset($sub->number) && $sub->number % 100 == '0') ? '<br><br>' : '';
		}//*/

		//return $text;
	}
#------------------------------------------------------------------------------------------------------#
	public function baca2Subs($subs, $dirName)
	{
		//echo '<pre>'; print_r($subs); echo '</pre>';
		$text = array();
		foreach($subs as $key=>$sub) 
		{
			$string = $sub->number . ':' . $sub->text;
			$string = trim(preg_replace('/\s+/', ' ', $string));
			$text[] = $string;
			//$text .= ( isset($sub->number) && $sub->number % 100 == '0') ? '<br><br>' : '';
		}//*/

		return ($text);
	}
#------------------------------------------------------------------------------------------------------#
}
