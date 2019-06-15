<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    
    protected $table = 'data';
    
    // data columns
    protected $fillable = [
        'object_domain','object_id','description','is_completed','completed_at','updated_by','updated_at','created_at','due','urgency'
    ];

    protected $hidden = [];
}

