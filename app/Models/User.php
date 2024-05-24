<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $table = 'tbluser';
    
    // column sa table
    protected $fillable = [
        'first_name', 'last_name', 'student_id', 'document_type_id', 'status'
    ];
}