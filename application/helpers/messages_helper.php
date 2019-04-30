<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function _mensagens($tipo, $msg){
    return '<div class="alert alert-'.$tipo.' alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"><i class="ni ni-fat-remove ni-like-2"></i></span>
            <span class="alert-inner--text">'.$msg.'</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}

