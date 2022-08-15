<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fare;

class FareAsOperator extends Model
{
    use HasFactory;
    protected $table = 'fare_as_operator';
    protected $primaryKey = 'id';
    protected $fillable = ['fare_id', 'operator_id'];
}
