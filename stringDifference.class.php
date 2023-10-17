<?php
/* 
 * A very simple text comparison class because strcmp is not always enough. 
 * You can compare strings letter by letter or bit by bit. The greater the 
 * number returned, the greater the difference between the two strings.
 * 
 * stringDifference::hammeringDistance(string $string1, string $string2, ?bool $binmode = false): int
 *
 */
class stringDifference {

	private static function strToBin(string $string){
		$binString = '';
		
		for ($i = 0; $i < strlen($string); $i++) {
			$binString .= sprintf("%08b", ord($string[$i]));
		}

		return $binString;
		
	}

	public static function hammeringDistance(string $string1, string $string2, bool $binmode = false){
		
		if($string1 === $string2) return 0;
		
		if($binmode)
		{
			$string1 = self::strToBin($string1);
			$string2 = self::strToBin($string2);
		}
		
		$str1len = strlen($string1);
		$str2len = strlen($string2);
		
		$limit = $str2len;

		if(($lendif = $str1len - $str2len) < 0) $limit  =  $str1len;
			
		$hammeringDistance = 0;
		
		for($i = 0; $i < $limit; $i++)
		{
			if($string1[$i] !== $string2[$i]) $hammeringDistance++;	
		}
		
		return $hammeringDistance + abs($lendif);
	}
}
