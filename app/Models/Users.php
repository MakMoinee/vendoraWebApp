<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $id = "userID";

    public $fillable = [
        "userID",
        "firstName",
        "middleName",
        "lastName",
        "address",
        "phoneNumber",
        "birthDate",
        "created_at",
    ];
}
