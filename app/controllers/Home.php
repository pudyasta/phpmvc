<?php 
    class Home extends Controller{
        public function index(){

            $data['nama'] = $this->model('User_model')->getuser();
            
            $this->view('/templates/header');
            $this->view('/home/index', $data);
            $this->view('/templates/footer');
        }
    }
?>