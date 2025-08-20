<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $table = 'families';
    protected $fillable = ['user_id'];


    public function customer()
    {
        return $this->belongsTo(Customer::class, 'user_id', 'id');
    }
}
