<?php
 
 class Admin extends CI_Controller {


  public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }


    public function index(){
    
 
    $data['judul'] = " list user Admin";
   
      $this->load->model('Admin_model', 'user');

      if($this->input->post('submit')){
       //echo $this->input->post('keyword');

        $data ['keyword'] = $this->input->post('keyword');
      }else{
        $data['keyword'] = null;
      }
      //pagination
      //pagination ada di config
      $config['total_rows'] = $this->Admin_model->countAll();
      $config['per_page']= 8;  //per baris data kolom data
    //inizialaze
      $this->pagination->initialize($config);
      //cek total rows
     // var_dump($config['total_rows']);die;
      //tampilan 
     // $data['user']= $this->user->getAllUser();
     $data['start'] = $this->uri->segment(3);
      $data['user']= $this->user->getUser($config['per_page'],$data['keyword'],$data['start']);
    $this->load->view('templetes/header',$data);
    $this->load->view('admin/index',$data);
    $this->load->view('templetes/footer');
    }

    public function hapuss($id){
      
      $this->Admin_model->hapuss($id );
      //$this->session->set_flashdata('flash','Dihapus');
      redirect('Admin');
    }

    //pagination
  }

       
?>