<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuardiaObrera extends Model
{
   //use HasFactory;
    protected $table = "guardiasObreras";
    protected $primaryKey = "id";
    protected $fillable = ['nombre', 'apellidos','facultad', 'area','fecha', 'turno'];
    protected $hidden = ['id'];

    public $timestamps=false;
}
