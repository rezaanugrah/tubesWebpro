<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Login extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model('m_login');
    }

    function index(){
      $this->load->view('login_murid');
    }

    function aksi_login(){
      if(empty ($this->input->post('username_murid')) || empty ($this->input->post('password_murid'))){
        echo "Harap isi Username dan Password";
      }
      else{
        $username_murid = $this->input->post('username_murid');
        $password_murid =  $this->input->post('password_murid');

        $where = array(
          'username_murid' => $username_murid,
          'password_murid' => $password_murid
        );

        $cek = $this->m_login->cek_loginMurid("t_murid", $where);

        if ($cek->num_rows() > 0) {
          foreach ($cek->result() as $row) {
            $nis = $row->nis;
          }
          $data_session = array(
            'nis' => $nis,
            'statusMurid' => "Login"
          );
          $this->session->set_userdata($data_session);
          redirect(base_url('index.php/berandamurid'));
        }
        else{
          echo "<script type = 'text/javascript'> alert('Username dan password salah!'); </script>";
          redirect(base_url(''));
        }
      }
    }
  }
?>
