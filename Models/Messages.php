<?php

namespace Models;
use Core\Model;

class Messages extends Model{
	public function __construct(){
		parent::__construct();
		$this->table = 'news';
		$this->pk = 'id_news'; 
		
	}

	protected  function validation($fields){
		if($fields['title'] == '' || $fields['article'] == ''){
			$this->addError('заполните все поля');
		}
		else{
			if(mb_strlen($fields['title'], 'UTF8') > 32){
				$this->addError('имя не больше 32 символов');
			}

			if(mb_strlen($fields['article'], 'UTF8') > 140){
				$this->addError('сообщение не больше 140 символов');
			}
		}
	}
	

}