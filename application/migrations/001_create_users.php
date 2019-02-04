<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Migration_create_users extends CI_Migration {
public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
            ),
            'nama' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'gender' => array(
                'type' => 'ENUM("L","p")',
                'null' => TRUE,
            ),
            'no_telepon' => array(
              'type' => 'VARCHAR',
              'constraint' => '25',
            ),
            'pekerjaan' => array(
                'type' => 'ENUM("karyawan swasta","pekerja negeri", "belum bekerja")',
                'default' => 'belum bekerja',
                'null' => False,
            ),
            'photo' => array(
                'type' => 'VARCHAR',
                'constraint' => '225',
            )

        ));
        $this->dbforge->add_key('id');
        $this->dbforge->create_table('users');
    }
    public function down() {
        $this->dbforge->drop_table('users');
    }
}
