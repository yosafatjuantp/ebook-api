<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class AuthController extends Controller {
    
    public function me() {
        return [
            "nis" => 3103118142,
            "name" => "Yosafat Juan Timotius Prasetya",
            "gender" => "Laki-laki",
            "phone" => 18316516200,
            "class" => "XII RPL 4"
        ];
    }
}