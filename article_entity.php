<?php 
	class Article {
		// propriétés
		
		private string $_strPrefixe = "article_";
		
		private int $_id;
		private string $_title;
		private string $_img;
		private string $_content;
		private date $_createdate;
		private int $_creator;
		
		// méthodes
		
		public function hydrate($arrData) {
			foreach($arrData as $key=>$value) {
				$strSetterName = "set".ucfirst(str_replace($_strPrefixe, "" , $key));
				if (method_exists($this, $strSetterName )) {
				$this->$strSetterName($value);
				// $this->set$key($value);
				}
			}
		}
		
		
		public function getId():int { // getter de recuperation de l'id
			return $this->_id;
		}
		public function setId(int $intId) { // setter de modification de la valeur de l'id
			$this->_id = $intId;
		}
		public function getTitle():string {
			return $this->_title;
		}
		public function setTitle(string $strTitle) {
			$this->_title = $strTitle;
		}
		public function getImg():string {
			return $this->_img;
		}
		public function setImg(string $strImg) {
			$this->_img = $strImg;
		}
		public function getContent():string {
			return $this->_content;
		}
		public function setContent(string $strContent) {
			$this->_content = $strContent;
		}
		public function getCreatedate():int {
			return $this->_createdate;
		}
		public function setCreatedate(int $intCreatedate) {
			$this->_createdate = $intCreatedate;
		}
		public function getCreator():string {
			return $this->_creator;
		}
		public function setCreator(string $strCreator) {
			$this->_creator = $strCreator;
		}
	}