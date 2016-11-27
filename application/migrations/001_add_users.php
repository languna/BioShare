<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Users extends CI_Migration {
        public function up()
        {
                $this->dbforge->add_field(array(
                        'UserID' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'UserEmail' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'UserLastname' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'UserFirstname' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'UserAddress' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'UserZip' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'UserCity' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'UserPhone' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'UserPhone2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'UserComment' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'UserEnabled' => array(
                                'type' => 'BOOLEAN'
                        )
                ));
                $this->dbforge->add_key('UserID', TRUE);
                $this->dbforge->create_table('users');
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}