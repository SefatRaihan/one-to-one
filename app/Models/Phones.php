<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User_infos;

class Phones extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        'user_infos_id',
        'mobile',
    ];
    public function user_infos(){
        return $this->belongsTo(User_infos::class);
    }
}
