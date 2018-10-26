<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    public function register() {
        $this->load->view('register');
    }

    public function register_submit() {

        $this->load->model('users');
        $this->users->get_userdata();
    }

    public function login() {
        $this->load->view('login');
    }

    public function login_submit() {
        $this->load->model('users');
        $user_id = $this->users->user_login();

        if (!$user_id) {
            echo 'Authentification Unsuccessful';
        } else {
            //session_start();
            $_SESSION['id'] = $user_id;
            header("location:../welcome/front");
        }
    }
}    