<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data_user';

    protected $fillable = ['name', 'github', 'linkedin'];
}
