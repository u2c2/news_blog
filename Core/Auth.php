<?php

namespace Core;

class Auth{


/*	public static function logout(){
		$_SESSION['auth'] = false;
      setcookie('login','admin',time()-1,'/');
      setcookie('password','12345',time()-1,'/');
	}*/

	public static function getUser(){
		return  self::isAuth() ? 
					[
						'id_user' => '1',
						'login' => 'admin',
						'password' => 'hash'
					] : 
					null;
	}
	public static function hash($str){
		$salt='asdfggh';
		return hash('sha256',$str.$salt);
}
  public static function addToken($remember){
  $token = hash('sha256',time().mt_rand(0,1000000));

    $_SESSION['auth'] = $token;
       if($remember){
  	    setcookie('auth', $token, time() + 3600 * 24 * 14,'/');
  	   }
    return $token;
   } 
public static function getToken(){
   	if (isset($_SESSION['auth'])){
   		return $_SESSION['auth'];
   	}
   	if (isset($_COOKIE['auth'])){
   		 $_SESSION['auth'] =$_COOKIE['auth'];
   		 return $_COOKIE['auth'];
   	}

  return null;
   }
   
   public static function removeToken(){
   	
   	unset($_SESSION['auth']);
   	setcookie('auth', '', time() - 1,'/');
   }
}
