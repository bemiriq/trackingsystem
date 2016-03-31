<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginmodel extends CI_Model
{
 function login($username,$password)
 {
     
   $this -> db -> select('username, password');
   $this -> db -> from('user');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);
   
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
     echo 'model1';
     //echo 'Now it consists the home page function';
   }
   else false;
   {
    return false;
    echo 'model2';
   }
 }


}

