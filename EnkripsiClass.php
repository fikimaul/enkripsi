<?php
	class Enkripsi{
		var  $hasil;
		function __construct($pesan){

			$jumHur = strlen($pesan);

			for ($i=0;$i<$jumHur;$i++){
				$simpanHur[$i]=substr($pesan, $i, 1);
			}

			for ($i=0;$i<$jumHur;$i++){
				switch ($simpanHur[$i]) {
					case 'a':
						$simpanEnkrip[$i] = '0w';
						break;
					case 'b':
						$simpanEnkrip[$i] = '1x';
						break;
					case 'c':
						$simpanEnkrip[$i] = '0y';
						break;
					case 'd':
						$simpanEnkrip[$i] = '1z';
						break;
					case 'e':
						$simpanEnkrip[$i] = '0a';
						break;
					case 'f':
						$simpanEnkrip[$i] = '1b';
						break;
					case 'g':
						$simpanEnkrip[$i] = '0c';
						break;
					case 'h':
						$simpanEnkrip[$i] = '1d';
						break;
					case 'i':
						$simpanEnkrip[$i] = '0e';
						break;
					case 'j':
						$simpanEnkrip[$i] = '1f';
						break;
					case 'k':
						$simpanEnkrip[$i] = '0g';
						break;
					case 'l':
						$simpanEnkrip[$i] = '1h';
						break;
					case 'm':
						$simpanEnkrip[$i] = '0i';
						break;
					case 'n':
						$simpanEnkrip[$i] = '1j';
						break;
					case 'o':
						$simpanEnkrip[$i] = '0k';
						break;
					case 'p':
						$simpanEnkrip[$i] = '1l';
						break;
					case 'q':
						$simpanEnkrip[$i] = '0m';
						break;
					case 'r':
						$simpanEnkrip[$i] = '1n';
						break;
					case 's':
						$simpanEnkrip[$i] = '0o';
						break;
					case 't':
						$simpanEnkrip[$i] = '1p';
						break;
					case 'u':
						$simpanEnkrip[$i] = '0q';
						break;
					case 'v':
						$simpanEnkrip[$i] = '1r';
						break;
					case 'w':
						$simpanEnkrip[$i] = '0s';
						break;
					case 'x':
						$simpanEnkrip[$i] = '1t';
						break;
					case 'y':
						$simpanEnkrip[$i] = '0u';
						break;
					case 'z':
						$simpanEnkrip[$i] = '1v';
						break;
					case ' ':
						$simpanEnkrip[$i] = '%@';
						break;
					default:
						$simpanEnkrip[$i] = 'UD';
						break;
				}
				$this->hasil = $this->hasil.$simpanEnkrip[$i];
			}
		}
		function __toString(){
			return $this->hasil;
		}
	}
	class Dekripsi{
		var  $hasil;
		function __construct($pesan){

			$jumHur = strlen($pesan);
			$num = 0;
			for ($i=0;$i<$jumHur;$i=$i+2){
				$simpanHur[$num]=substr($pesan, $i, 2);
				$num++;

			}
			$jum = count($simpanHur);
			for ($i=0;$i<$jum;$i++){
				switch ($simpanHur[$i]) {
					case '0w':
						$simpan[$i] = 'a';
						break;
					case '1x':
						$simpan[$i] = 'b';
						break;
					case '0y':
						$simpan[$i] = 'c';
						break;
					case '1z':
						$simpan[$i] = 'd';
						break;
					case '0a':
						$simpan[$i] = 'e';
						break;
					case '1b':
						$simpan[$i] = 'f';
						break;
					case '0c':
						$simpan[$i] = 'g';
						break;
					case '1d':
						$simpan[$i] = 'h';
						break;
					case '0e':
						$simpan[$i] = 'i';
						break;
					case '1f':
						$simpan[$i] = 'j';
						break;
					case '0g':
						$simpan[$i] = 'k';
						break;
					case '1h':
						$simpan[$i] = 'l';
						break;
					case '0i':
						$simpan[$i] = 'm';
						break;
					case '1j':
						$simpan[$i] = 'n';
						break;
					case '0k':
						$simpan[$i] = 'o';
						break;
					case '1l':
						$simpan[$i] = 'p';
						break;
					case '0m':
						$simpan[$i] = 'q';
						break;
					case '1n':
						$simpan[$i] = 'r';
						break;
					case '0o':
						$simpan[$i] = 's';
						break;
					case '1p':
						$simpan[$i] = 't';
						break;
					case '0q':
						$simpan[$i] = 'u';
						break;
					case '1r':
						$simpan[$i] = 'v';
						break;
					case '0s':
						$simpan[$i] = 'w';
						break;
					case '1t':
						$simpan[$i] = 'x';
						break;
					case '0u':
						$simpan[$i] = 'y';
						break;
					case '1v':
						$simpan[$i] = 'z';
						break;
					case '%@':
						$simpan[$i] = ' ';
						break;
					default:
						$simpan[$i] = '*';
						break;
				} 
				$this->hasil = $this->hasil.$simpan[$i];
			}
		}
		function __toString(){
			return $this->hasil;
		}
	}
?>