<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class UploadTugasMurid extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->model('M_murid');
    }

    function index(){
      $this->load->view('upload_tugas_murid');
    }

    function upload_tugas($dataName){
      $config['upload_path'] = './files/tugas';
      $config['allowed_types'] = 'pdf|docx|ppt|doc';
      $config['max_size'] = '10000';
      $this->load->library('upload', $config);

      if(!$this->upload->do_upload($dataName)){
        echo $this->upload->display_errors();
      }
      else {
        $data = array ('upload_data' => $this->upload->data());
        $link = base_url('files/tugas/'.$this->upload->data('file_name'));
        return $link;
      }
    }

    function upload_jawaban(){
      $dataJawaban = array (
        'pesan' => $this->input->post('pesan'),
        'url_tugas' => $this->upload_tugas('jawaban'),
        'nis' => $this->session->nis,
        'no_tugas' => $this->input->post('no_tugas')
      );

      $result = $this->M_murid->insertData('t_jawaban', $dataJawaban);

      if($result){
        echo "Data berhasil ditambahkan";
      }
      else {
        echo "Data gagal ditambahkan";
      }
    }

    function aksi_logout(){
      $this->session->sess_destroy();
      redirect(base_url(''));
    }
  }
?>
