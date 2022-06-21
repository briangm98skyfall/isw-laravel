<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuardiaEstudiantil extends Model
{
    //use HasFactory;

    protected $table = "guardiasEstudiantiles";
    protected $primaryKey = "id";
    protected $fillable = ['nombre', 'apellidos','facultad', 'grupo','fecha', 'turno'];
    protected $hidden = ['id'];

    public $timestamps=false;
}
