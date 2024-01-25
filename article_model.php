<?php
	/* Récupérer les articles dans la BDD */
	include_once("connect.php");
	
	class ArticleModel extends Model {
		
		public function __construct(){
			parent::__construct();
		}
		
		public function findAll(){
			$strQuery 	= "	SELECT article_title, article_img, article_content, article_createdate, 
								user_firstname AS 'article_creator'
							FROM articles
								INNER JOIN users ON article_creator = user_id
							ORDER BY article_createdate DESC
							LIMIT 4;";

			return $this->_db->query($strQuery)->fetchAll();
		}
	}