<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'name',
        'description',
        'program_number',
        'user_id',
       
    ];

    public function clients()
{
    return $this->belongsToMany(Client::class, 'client_programs');  // Program has many clients
}

}
