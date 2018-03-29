<?php


namespace Controllers;
use Core\Auth as ModelAuth;
use Models\Users;
use Models\Sessions;

class Auth extends Client{
   
	public function action_login(){

    if (count($_POST) > 0){
	 
	       $mUsers = new Users();
           $user = $mUsers->getByLogin($_POST['login']); 
          
           if (is_array($user) && $user['password'] == ModelAuth::hash($_POST['password'])){
           	$token = ModelAuth::addToken(isset($_POST['remember']));

           	$mSessions = new Sessions();
           	$mSessions->add([
          'id_user' => $user['id_user'],
          'token' => $token
           	]);
           	header('Location: ' . ROOT);
				exit();
           }
	     $message ='ошибка входа' ;
      }else{
      	$message ='';
      }

		$this->title = 'Вход на сайт';
         
     
	 $this->content = $this->template('v_login',[ 
			 'message'=>$message]);
        
	}

	public function action_logout(){
	     
	      $token = ModelAuth::getToken();
           // $mUsers = new Users();
           //$user = $mUsers->getToken($user['token']);
           $mSessions = new Sessions();
           $res = $mSessions->getByToken($token);
           $id_session = $res['id_session'];
          
           ModelAuth::removeToken();
           $mSessions->delete($id_session);
                header('Location:'. ROOT . 'auth/login');
                exit();
		$this->title = 'Выход с сайта';

	 $this->content = $this->template('v_logout', [
			 ]);
	}


}