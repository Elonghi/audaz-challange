<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
    use HasFactory;
    protected $table = 'fare';
    protected $primaryKey = 'id';
    protected $fillable = ['value', 'isActive'];
}
