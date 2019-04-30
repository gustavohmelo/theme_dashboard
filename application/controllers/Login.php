<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();



    }

    public function index(){
        if($this->ion_auth->logged_in()){
            redirect('inicio', 'refresh');
        }else{

            $data['js'][] = 'jquery.validate.min';
            $data['js'][] = 'login';


            $this->load->view('includes/htmlHeader', $data);
            $this->load->view('login/index');
            $this->load->view('includes/htmlFooter');
        }

    }

    public function logar(){

        $email      = $this->input->post('email');
        $senha      = $this->input->post('senha');
        $lembrar    = (bool) ($this->input->post('remember') == 1 ? 1 : 0);


        if ($this->ion_auth->login($email, $senha, false)){
            redirect('inicio');
        }else{
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect('login');
        }
    }



    public function logout(){
        $this->ion_auth->logout();
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect('login', 'refresh');
    }



}
