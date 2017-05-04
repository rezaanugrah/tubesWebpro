<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class LoginGuru extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->model('m_login');
    }

    function index(){
      $this->load->view('login_guru');
    }

    function aksi_login(){
      if(empty ($this->input->post('username_guru')) || empty ($this->input->post('password_guru'))){
        echo "Harap isi Username dan Password";
      }
      else{
        $username_guru = $this->input->post('username_guru');
        $password_guru = $this->input->post('password_guru');

        $where = array(
          'username_guru' => $username_guru,
          'password_guru' => $password_guru
        );

        $cek = $this->m_login->cek_loginGuru("t_guru", $where);

        if($cek->num_rows() > 0){
          foreach ($cek->result() as $row) {
            $nip = $row->nip;
          }
          $data_session = array(
            'nip' => $nip,
            'statusGuru' => "Login"
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
