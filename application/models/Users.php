<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    public function get_userdata() {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $number = $_POST["number"];


        $data = array(
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'password' => $pass
        );

        $this->db->insert('users', $data);
        // Produces: INSERT INTO mytable (title, name, data) VALUES ('My title', 'My name', 'My date')
    }

    public function user_login() {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $query = $this->db->get('users');
        $flag = 0;
        foreach ($query->result() as $row) {
            if ($email == $row->email && $pass == $row->password) {
                $flag = 1;
                $id = $row->id;
                break;
            }
        }
        if ($flag == 0) {
            return false;
        } else {
            return ($id);
        }
    }

}
