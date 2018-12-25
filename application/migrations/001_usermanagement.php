<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Usermanagement extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'group_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('ci_user_groups');

                $data = array(
                    array('id' => '1',
                    'group_name' => "Administrator"),
                    array('id' => '2',
                    'group_name' => "User")
                );
                
                $this->db->insert_batch('ci_user_groups', $data);

                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'username' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'firstname' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'lastname' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'mobile_no' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'address' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'role' => array(
                                'type' => 'TINYINT',
                                'constraint' => '4',
                                'default' => '0',
                        ),
                        'is_active' => array(
                                'type' => 'TINYINT',
                                'constraint' => '4',
                                'default' => '1',
                        ),
                        'is_verify' => array(
                                'type' => 'TINYINT',
                                'constraint' => '4',
                                'default' => '0',
                        ),
                        'is_admin' => array(
                                'type' => 'TINYINT',
                                'constraint' => '4',
                                'default' => '0',
                        ),
                        'token' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'password_reset_code' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'last_ip' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                        ),
                        'created_at' => array(
                                'type' => 'DATETIME',
                        ),
                        'updated_at' => array(
                                'type' => 'DATETIME',
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('ci_users');

                $data = array(
                        array(
                                'id' => '1',
                                'role' => '1',
                                'is_verify' => '1',
                                'username' => "user",
                                'password' => '$2y$10$QRc6EN8mQpR2H6eWpdP5D.UBOQDT9MO0xiZwKJb4R1Y6Zh757Vbba',
                        )
                );
                
                $this->db->insert_batch('ci_users', $data);
        }
}