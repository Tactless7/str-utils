<?php 

	class StrUtils {
		private $_str;
		
		__constructor(){

		}

		public function bold($string){
			return '<strong>'. $string .'</strong>';
		}

		public function italic(){
			return '<em>'. $string .'</em>';
		}

		public function underline(){
			return '<u>'. $string .'</u>';
		}

		public function capitalize($string){
			return ucfirst($string);
		}
	}