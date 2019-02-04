<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
  }

 public function index()
	{
    $user = $this->user_m;
    $data["users"] = $user->index();

    $this->load->view("layout/header");
    $this->load->view("user/index", $data);
    $this->load->view("layout/footer");
	}

  public function add()
  {
    $user = $this->user_m;
    $validation = $this->form_validation;
    $validation->set_rules($user->rules());
    if (empty($_FILES['photo']['name']))
    {
      $validation->set_rules('photo', 'Photo', 'required');
    }
      if ($validation->run()) {
         $user->save();
         $this->session->set_flashdata('success', 'Berhasil disimpan');
         redirect(site_url('User'));
        }
    $this->load->view("layout/header");
    $this->load->view("user/add");
    $this->load->view("layout/footer");
  }

  public function delete($id=null)
  {
    if (!isset($id)) show_404();

    if ($this->user_m->destroy($id)) {
      redirect(site_url('User'));
    }
  }

}
