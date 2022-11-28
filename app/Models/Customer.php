<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

        public function phone_ext(){
        return $this->belongsTo(PhoneExt::class,'contact_ext','id');
    }
}
