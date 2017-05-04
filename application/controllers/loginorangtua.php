<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class LoginOrangtua extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->model('m_login');
    }

    function index(){
      $this->load->view('login_ortu');
    }

    function aksi_login(){
      if(empty ($this->input->post('username_ortu')) || empty ($this->input->post('password_ortu'))){
        echo "Harap isi Username dan Password";
      }
      else{
        $username_ortu = $this->input->post('username_ortu');
        $password_ortu = $this->input->post('password_ortu');

        $where = array(
          'username_ortu' => $username_ortu,
          'password_ortu' => $password_ortu
        );

        $cek = $this->m_login->cek_loginOrtu("t_ortu", $where);

        if($cek->num_rows() > 0){
          foreach ($cek->result() as $row) {
            $id_ortu = $row->id_ortu;
  		      $nis = $row->nis;
          }
          $data_session = array(
            'id_ortu' => $id_ortu,
  		      'nis' => $nis,
            'statusOrtu' => "Login"
          );
          $this->session->set_userdata($data_session);
          redirect(base_url('index.php/beranda'));
        }
        else{
          echo "<script type = 'text/javascript'> alert('Username dan password salah!'); </script>";
        }
      }
    }
  }
?>
