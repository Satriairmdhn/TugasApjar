<?php

namespace App\Models\Apjar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public function user(){
        return $this -> belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    protected $table ='apjar_faculty';

    protected $fillable = ['id,user_id,code,upi_code,nip,front_title,rear_title,first_name, last_name,
    status,duty,specialization,homebase,phone, email,created_at, updated_at'];
}
