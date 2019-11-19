<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){

      $imagePath = ($this->image) ? $this->image : 'profile/XH8CfoJJhsLCoovAhOcuAHD1ZBGh8erpxDjKI0bt.jpeg';
      return '/storage/'. $imagePath;
    }

    public function followers(){
      return $this->belongsToMany(User::class);
      
    }
    public function user(){
      return $this->belongsTo(User::class);
    }

}
