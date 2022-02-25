<?php
 
 class Job extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Job_model');
        $this->load->library('form_validation');
    }

    public function index (){
    $data['judul'] = "Job";
    $data['job']  = $this->Job_model->getAllJOb();
    if ($this->input->post('keyword')){
        $data['job'] = $this->Job_model->cari();
    }
    $this->load->view('templetes/header',$data);
    $this->load->view('job/index',$data);
    $this->load->view('templetes/footer');
    }

    public function tambah(){


        $data['judul'] = "tambah data";
     
        
       $this->form_validation->set_rules('username', 'Username', 'required');
       $this->form_validation->set_rules('gaji','Gaji','integer');
       if ($this->form_validation->run() == FALSE)
       {
        $this->load->view('templetes/header',$data);
        $this->load->view('job/tambah');
        $this->load->view('templetes/footer');
       }
       else
       {
       
        
               $this->Job_model->tambahData();
               $this->session->set_flashdata('flash','Ditambhkan');
               redirect("Job");
       }
 }

 public function ubah($id){


    $data['judul'] = "ubah data";
    $data['user'] = $this->Job_model->detailkan($id);
    $data['gaji'] = ['3' , '4' , '6'];

   $this->form_validation->set_rules('username', 'Username', 'required');
   $this->form_validation->set_rules('gaji','Gaji','integer');
   if ($this->form_validation->run() == FALSE)
   {
    $this->load->view('templetes/header',$data);
    $this->load->view('job/ubah',$data);
    $this->load->view('templetes/footer');
   }
   else
   {
   
    
           $this->Job_model->ubah();
           $this->session->set_flashdata('flash','DI UBAH');
           redirect("Job");
   }
}


        public function detail($id){

            $data ['judul'] = "Pekerjaan";
            $data ['user'] = $this->Job_model->detailkan($id);
            $this->load->view('templetes/header',$data);
            $this->load->view('job/detail');
            $this->load->view('templetes/footer');
        }

        public function hapus($id){
            $this->Job_model->hapus($id );
            $this->session->set_flashdata('flash','Dihapus');
            redirect('Job');
        }

 }

       
?>