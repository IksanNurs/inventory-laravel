<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sys_supplier extends Model
{
    use HasFactory;
    protected $table = "sys_supplier";
    public $timestamps = false;

    protected $fillable = [
        'supp_code', 'supp_name', 'supp_address', 'supp_telp'
    ];

    protected $primaryKey = "supp_code";
    public $incrementing = false;
}
