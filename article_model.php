<?php
	/* Récupérer les articles dans la BDD */
	include_once("connect.php");
	
	
	class ArticleModel extends Model {
		private string $_strKeywords;

		public function __construct(){
			parent::__construct();
		}
		
		public function getKeywords($_POST['keywords']??""):string{ 
			return $this->_strKeywords;
		}
		}
		
		public function findAll(int $intLimit = 0 ){
			
			$strQuery 	= "	SELECT article_title, article_img, article_content, article_createdate, 
								user_firstname AS 'article_creator'
							FROM articles
								INNER JOIN users ON article_creator = user_id
								 ";
			if ($_strKeywords != ''){
			$strQuery 	.= " WHERE article_title LIKE '%".$_strKeywords."%'
									OR article_content LIKE '%".$_strKeywords."%' ORDER BY article_createdate DESC ";
			}
			if ($intLimit > 0){
				$strQuery 	= $strQuery.'LIMIT '.$intLimit;
			}
			
			return $this->_db->query($strQuery)->fetchAll();
		}
	}
	