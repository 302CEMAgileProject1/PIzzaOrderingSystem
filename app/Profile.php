<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'company',
        'street',
        'city',
        'zip_code',
        'state',
        'country',
        'phone'
    ];

    //Define the relation of Profile and User
    public function user()
    {
        //Profile can only have one User
        return $this->belongsTo(User::class);
    }

    public function getNameAttribute(){
        return $this->first_name . " " . $this->last_name;
    }
}
