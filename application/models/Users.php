<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Model {

    function verifyUser($email, $password)
    {
        $result = $this->db->query("SELECT * FROM usuarios WHERE email ='".$email."' AND password ='".md5($password)."' AND state=1");
        if (!empty($result->result_array())) {
        	return $result->result_array();
        } else {
        	return 0;
        }
        
    }

}
