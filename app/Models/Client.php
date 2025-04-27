<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    Use HasFactory;

      protected $fillable = [
        'firstname',
        'secondname',
        'date_of_birth',
        'gender',
        'national_id',
        'contact_info',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function clientProgram()
    {
        return $this->belongsToMany(ClientProgram::class);
    }


  
}
