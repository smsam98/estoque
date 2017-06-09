<?php

namespace App\Models\ListClient;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
    	'name', 'category', 'rg', 'born'
    ];
}
