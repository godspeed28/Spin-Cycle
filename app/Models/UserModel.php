<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username', 'password', 'no_telp', 'email', 'alamat', 'role', 'last_activity', 'foto'];
}
