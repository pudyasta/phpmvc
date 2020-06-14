<?php 
    class Mahasiswa_model{
        private $namatabel = 'mahasiswa';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getmahasiswa(){
            $this->db->query('SELECT * FROM '. $this->namatabel);
            return $this->db->resultset();  
        }
        public function getdetail($id){
            $this->db->query('SELECT * FROM '.$this->namatabel .' WHERE id =:id');
            $this->db->bind('id', $id);
            return $this->db->singleset();
        }

        public function tambahdatasiswa($data){
            $query=("INSERT INTO ". $this->namatabel ." VALUES(NULL , :nama , :nis, :email , :jurusan)");
            $this->db->query($query);
            $this->db->bind('nama' , $data['nama']);
            $this->db->bind('nis' , $data['nis']);
            $this->db->bind('email' , $data['email']);
            $this->db->bind('jurusan' , $data['jurusan']);

            $this->db->execute();
            return $this->db->rowCount();
        }

        public function hapussiswa($id){
            $query =("DELETE FROM ".$this->namatabel." WHERE id = :id");
            $this->db->query($query);
            $this->db->bind('id' , $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function ubahdatasiswa($data){
            $query =("UPDATE mahasiswa SET nama=:nama, nis=:nis , email=:email, jurusan =:jurusan WHERE id = :id" );
            $this->db->query($query);
            $this->db->bind('id' , $data['id']);
            $this->db->bind('nama' , $data['nama']);
            $this->db->bind('nis' , $data['nis']);
            $this->db->bind('email' , $data['email']);
            $this->db->bind('jurusan' , $data['jurusan']);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function caridatasiswa(){
            $keyword = $_POST['keyword'];
            $query=("SELECT * FROM mahasiswa WHERE nama LIKE :keyword");

            $this->db->query($query);
            $this->db->bind('keyword', "%$keyword%");
            $this->db->execute();
            return $this->db->resultset();
        }
    
    }
?>