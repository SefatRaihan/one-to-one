<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phones;

class User_infos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_name',
        'city',
    ];
    public function phones(){
        return $this->hasOne(Phones::class, 'user_infos_id');
    }
}
