<?php

namespace Models;
use Core\Model;
use Core\Auth;

class Users extends Model{
	public function __construct(){
		parent::__construct();
		$this->table = 'users';
		$this->pk = 'id_user'; 
		
	}
	public function getByLogin($login){
		$res = $this->sql->select("SELECT * FROM $this->table WHERE login=:login",
			['login' => $login]);

		return $res[0] ?? false;

	}


	public function getByAuth(){
	   $token = Auth::getToken();
       $mSession = new Sessions();
     //  var_dump($token);

       if(!$token){
       	return false;
       }
       $session = $mSession->getByToken($token);
    //   var_dump($session);
       

       if(!$session){
       	Auth::removeToken();
       	return false;
       }
      
      return $this->one($session['id_user']);
	}

	protected  function validation($fields){}
	

}