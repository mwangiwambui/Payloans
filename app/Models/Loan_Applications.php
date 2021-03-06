<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan_Applications extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function users(){
        return $this->hasMany('App\User');
    }
    use HasFactory;
}
