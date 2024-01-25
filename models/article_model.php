<?php
	/* Récupérer les articles dans la BDD */
	include_once("connect.php");
	
	class ArticleModel extends Model {
		
		
		public function __construct(){
			parent::__construct();
		}
		
		public function findAll(int $intLimit = 0, $arrSearch = array()){
			$strQuery 	= "	SELECT article_title, article_img, article_content, article_createdate, 
								user_firstname AS 'article_creator'
							FROM articles
								INNER JOIN users ON article_creator = user_id";
			
			$strWhere	= " WHERE ";
			// Recherche par mot clé
			$strKeywords = $arrSearch['keywords']??"";
			if ($strKeywords != ''){
				$strQuery 	.= $strWhere." (article_title LIKE '%".$strKeywords."%'
									OR article_content LIKE '%".$strKeywords."%') ";
				$strWhere	= " AND ";
			}				
			// Recherche par date exacte
			$intPeriod		= $arrSearch['period']??0;
			$strDate		= $arrSearch['date']??"";
			if ($intPeriod == 0 && $strDate != ''){
				$strQuery 	.= $strWhere." article_createdate = '".$strDate."' ";
				$strWhere	= " AND ";
			}
			// Recherche par période
			$strStartDate	= $arrSearch['startdate']??"";
			$strEndDate		= $arrSearch['enddate']??"";
			if ($intPeriod == 1 && $strStartDate != '' && $strEndDate != '' ){
				$strQuery 	.= $strWhere." article_createdate BETWEEN '".$strStartDate."' AND '".$strEndDate."' ";
				$strWhere	= " AND ";
			}

			// Tri par ordre décroissant
			$strQuery 	.= " ORDER BY article_createdate DESC";
			
			if ($intLimit > 0){
				$strQuery 	.= " LIMIT ".$intLimit;
			}
			
			

			return $this->_db->query($strQuery)->fetchAll();
		}
	}