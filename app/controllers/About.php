<?php 
    class About extends Controller{
        public function index($nama = 'Dyas', $tempat = 'Jogja'){
            $data['nama'] = $nama;
            $data['tempat'] = $tempat;

            $this->view('/templates/header');
            $this->view('/about/index' , $data);
            $this->view('/templates/footer');
        }

        public function page(){
            $this->view('/templates/header');
            $this->view('/about/page');
            $this->view('/templates/footer');
        }
    }

?>