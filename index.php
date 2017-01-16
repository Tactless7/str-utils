<?php 

	class StrUtils {
		private $_str;
		
		private function __construct($string){
			$this->_str = $string;
		}

		public function bold(){
			return '<strong>'. $this->_str .'</strong>';
		}

		public function italic(){
			return '<em>'. $this->_str .'</em>';
		}

		public function underline(){
			return '<u>'. $this->_str .'</u>';
		}

		public function capitalize(){
			return ucfirst($this->_str);
		}
	}