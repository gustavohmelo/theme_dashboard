<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 26/04/2019
 * Time: 17:51
 */

class Usuario_model extends CI_Model {

    public function __construct(){

        parent::__construct();
    }

    public function cadastrarUsuario(){
        $nome = $this->input->post('nome');
        $sobrenome = $this->input->post('sobrenome');
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');

        $data = array(
            'first_name' => $nome,
            'last_name'  => $sobrenome
        );

        $grupos = $this->input->post('grupos');

        return $this->ion_auth->register($email, $senha, $email, $data, $grupos);
    }

}