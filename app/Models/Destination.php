<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Destination extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['desc','city','forget_risk'];
}
