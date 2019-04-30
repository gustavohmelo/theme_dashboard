<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_model');
    }

    public function index(){

        $data['js'][] = 'teste';

        $data['usuarios']  = $this->ion_auth->users()->result();

        $this->load->view('includes/htmlHeader', $data);
        $this->load->view('includes/menuLateral');
        $this->load->view('usuarios/index');

        $this->load->view('includes/htmlFooter');

    }

    public function novoUsuario(){

        $data['js'][] = 'teste';

        $data['usuarios']  = $this->ion_auth->users()->result();
        $data['grupos'] = $this->ion_auth->groups()->result_array();

        $this->load->view('includes/htmlHeader', $data);
        $this->load->view('includes/menuLateral');
        $this->load->view('usuarios/novoUsuario');

        $this->load->view('includes/htmlFooter');
    }

    public function cadastrarUsuario(){
        if($this->usuario_model->cadastrarUsuario()){

            $this->session->set_flashdata('message', _mensagens('success', $this->ion_auth->messages()));
        }else{
            $this->session->set_flashdata('message', _mensagens('danger', $this->ion_auth->errors()));
        }

        redirect('usuarios');


    }

}