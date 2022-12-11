<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ebrochure extends Model
{
    protected $table = "ebrochure";
    public $timestamps = true;
    protected $guarded = ['id_ebrochure'];
}
