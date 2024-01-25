<?php
	class Article {
		// Propriétés
		private string $_strPrefixe = "article_";
		
		private int $_id;		
		private string $_title;
		private string $_img;
		private string $_content;
		private string $_createdate;
		private string $_creator;		
		
		// Méthodes
		// fonction permettant de remplir l'objet
		public function hydrate($arrData){
			
			foreach($arrData as $key=>$value){
				$strSetterName	= "set".ucfirst(str_replace($this->_strPrefixe, "", $key));
				// Si le setter existe dans la classe 
				if (method_exists($this, $strSetterName)){
					$this->$strSetterName($value);
				}
				//$this->set$key($value);
			}
			
			/*$this->setId($arrData['article_id']);
			$this->setTitle($arrData['article_title']);
			$this->setImg($arrData['article_img']);*/
		}
		
		// getter de récupération de la valeur de l'id
		public function getId():int{ 
			return $this->_id;
		}
		// setter de modification de la valeur de l'id
		public function setId(int $intId){ 
			$this->_id = $intId;
		}
		
		// getter et setter de title
		public function getTitle():string{ 
			return $this->_title;
		}
		public function setTitle(string $strTitle){ 
			$this->_title = $strTitle;
		}
		
		// getter et setter de img
		public function getImg():string{ 
			return $this->_img;
		}
		public function setImg(string $strImg){ 
			$this->_img = $strImg;
		}
		
		// getter et setter de content
		public function getContent():string{ 
			return $this->_content;
		}
		public function setContent(string $strContent){ 
			$this->_content = $strContent;
		}		
		public function getContentSummary(int $max){
			$strContent		= $this->_content;
			if(strlen($strContent) > $max){
				$strContent	= substr($strContent, 0, $max)."...";
			}
			return $strContent;
		}
		
		// getter et setter de createdate
		public function getCreatedate():string{ 
			return $this->_createdate;
		}
		public function setCreatedate(string $strCreatedate){ 
			$this->_createdate = $strCreatedate;
		}		
		public function getCreatedateFr(){
			// Traitement de la date
			$objDate		= new DateTime($this->_createdate);
			return $objDate->format("d/m/Y");
		}
		// getter et setter de creator
		public function getCreator():string{ 
			return $this->_creator;
		}
		public function setCreator(string $strCreator){ 
			$this->_creator = $strCreator;
		}		
		
		
	}