<?php

class User_m extends CI_Model {

	private $_table = "users";

  public $nama;
  public $email;
  public $gender;
  public $password;
  public $pekerjaan;
  public $no_telepon;
  public $photo;

  public function rules()
  {
    return [
      ['field' => 'nama',
       'label' => 'Nama',
       'rules' => 'required'],

      ['field' => 'email',
       'label' => 'Email',
       'rules' => 'required|valid_email'],

      ['field' => 'password',
       'label' => 'Password',
       'rules' => 'required'],

      ['field' => 'password_confirmation',
       'label' => 'Password Confirmation',
       'rules' => 'required|matches[password]'],

      ['field' => 'gender',
       'label' => 'Gender',
       'rules' => 'required'],

      ['field' => 'no_telepon',
       'label' => 'No Telepon',
       'rules' => 'required'],

      ['field' => 'pekerjaan',
       'label' => 'Pekerjaan',
       'rules' => 'required'],

    ];
  }

	public function index()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById()
	{
		return $this->db->get_where($this->_table, ["id" => $id])->row();
	}

  public function save()
  {
    $post = $this->input->post();
    $config['upload_path']          = './assets/image/';
    $config['allowed_types']        = 'jpg|png';

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('photo')) {
    $this->nama       = $post["nama"];
    $this->email      = $post["email"];
    $this->gender     = $post["gender"];
    $this->password   = $post["password"];
    $this->pekerjaan  = $post["pekerjaan"];
    $this->no_telepon = $post["no_telepon"];
    $this->photo      = $_FILES['photo']['name'];
    }
    return $this->db->insert($this->_table, $this);
  }

  public function destroy($id)
  {
    $this->_deleteImage($id);
    return $this->db->delete($this->_table, array("id" => $id));
  }


  private function _deleteImage($id)
	{
		$user = $this->getById($id);
		if ($user->photo != "default.jpg") {
			$filename = explode(".", $user->photo)[0];
			return array_map('unlink', glob(FCPATH."assets/images/$filename.*"));
		}
	}
}
