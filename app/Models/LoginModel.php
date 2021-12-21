<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'data_akun';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'user_name',
        'nama',
        'email',
        'password',
        'nama',
        'birthday',
        'age',
        'address',
        'phone',
        'instagram',
        'facebook',
        'major',
        'description',
        'dirAvatar'
    ];

    public function getDataUser($username)
    {
        return $this->where(['user_name' => $username])->first();
    }
}
