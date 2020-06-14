<?php 
    class Mahasiswa extends Controller{
        public function index(){
            $data['mhs']=$this->model('Mahasiswa_model')->getmahasiswa();
            $this->view('/templates/header');
            $this->view('/mahasiswa/index', $data);
            $this->view('/templates/footer');
        }
        

        public function detail($id){
            $data['mhs']= $this->model('Mahasiswa_model')->getdetail($id);
            $this->view('/templates/header');
            $this->view('/mahasiswa/detail', $data);
            $this->view('/templates/footer');
        }

        public function tambahsiswa(){
            if($this->model('Mahasiswa_model')->tambahdatasiswa($_POST) > 0){
                Flasher::setFlash('Berhasil' , 'Ditambahkan' , 'success');
                header('Location:' .BASEURL.'/mahasiswa');
                exit;
            }else{
                Flasher::setFlash('Gagal' , 'Ditambahkan' , 'danger');
                header('Location:' .BASEURL.'/mahasiswa');
                exit; 
            }
        }
        public function hapus($id){
            if($this->model('Mahasiswa_model')->hapussiswa($id) > 0){
                Flasher::setFlash('Berhasil' , 'Dihapus' , 'success');
                header('Location:' .BASEURL.'/mahasiswa');
                exit;
            }else{
                Flasher::setFlash('Gagal' , 'Dihapus' , 'danger');
                header('Location:' .BASEURL.'/mahasiswa');
                exit; 
            }
        }

        public function getubah(){
            echo json_encode($this->model('Mahasiswa_model')->getdetail($_POST['id']));
        }
        
        public function ubahsiswa(){
            if($this->model('Mahasiswa_model')->ubahdatasiswa($_POST) > 0){
                Flasher::setFlash('Berhasil' , 'Diubah' , 'success');
                header('Location:' .BASEURL.'/mahasiswa');
                exit;
            }else{
                Flasher::setFlash('Gagal' , 'Diubah' , 'danger');
                header('Location:' .BASEURL.'/mahasiswa');
                exit; 
            }
        }

        public function carisiswa(){

            var_dump($data['mhs']=$this->model('Mahasiswa_model')->caridatasiswa());

        }

        public function ajax($keyword=""){
            $data['mhs']=$this->model('Mahasiswa_model')->caridatasiswa($keyword);
            $this->view('/mahasiswa/ajax', $data);
            $this->view('/templates/footer');
        }
    }

?>