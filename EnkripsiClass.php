<?php
	class FIX_Enc{
		public  $hasil;

		static function Enc($string){
			$random = md5(time());

			$str = "";
			for($i=0;$i<strlen($string);$i++):
				$str .= $string{$i}.$random{mt_rand(0,strlen($random)-1)};
			endfor;
			
			return base64_encode(strrev($str));
		}

		static function Dec($string){
			$string_dec = strrev(base64_decode($string));
			$str = "";
			for($i=0;$i<strlen($string_dec);$i+=2):
				$str .= $string_dec{$i};
			endfor;

			return $str;
		}

		static function Init(){
			$Obj = new FIX_Enc();

			return $Obj;
		}

	}
?>