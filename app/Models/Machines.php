<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machines extends Model
{
    use HasFactory;

    protected $table = "machines";
    protected $id = "machineID";

    public $fillable = [
        "userID",
        "machineID",
        "description",
        "ip",
        "created_at",
    ];
}
