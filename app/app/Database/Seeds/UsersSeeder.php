<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class UsersSeeder extends Seeder
{
 public function run()
 {
 //
 $data = [
 [
 'username' => 'normalia',
 'password' => password_hash('r4hasia', PASSWORD_BCRYPT),
 'name' => 'Normalia',
 'created_at' => Time::now()
 ]
 ];
 $this->db->table('users')->insertBatch($data);
 }
}

