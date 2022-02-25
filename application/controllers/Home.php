<?php

class Home extends CI_Controller{

    public function index (){

        $data['judul'] = 'Home';
        $this->load->view('templetes/header', $data);
        $this->load->view('home/index');
        $this->load->view('templetes/footer');
    }
}

?>