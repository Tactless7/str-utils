<?php 

	class StrUtils {
		private $_str;
		
		__constructor($string){
			$this->_str = $string;
		}

		public function bold($string){
			return '<strong>'. $string .'</strong>';
		}

		public function italic($string){
			return '<em>'. $string .'</em>';
		}

		public function underline($string){
			return '<u>'. $string .'</u>';
		}

		public function capitalize($string){
			return ucfirst($string);
		}
	}