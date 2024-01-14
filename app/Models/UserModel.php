<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'users';
    
    protected $allowedFields = [
        'name',
        'email',
        'password',
        'created_at'
    ];

    /* public function getUserDetails($userId) {
        // Assuming 'users' is the name of your users table
        $query = $this->db->get_where('name', array('id' => $id));

        // Assuming the result is expected to be a single row
        return $query->row();
    } */
}