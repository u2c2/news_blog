<?php

namespace Models;
use Core\Model;

class Sessions extends Model{
	public function __construct(){
		parent::__construct();
		$this->table = 'sessions';
		$this->pk = 'id_session'; 
		
	}
	public function getByToken($token){
		$res = $this->sql->select("SELECT * FROM $this->table WHERE token=:token AND status='1'",
			['token' => $token]);

		return $res[0] ?? false;

	}

	protected  function validation($fields){}
	
	

}