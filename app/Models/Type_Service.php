<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Service extends Model
{
    use HasFactory;
    protected $table = "tipo_servicios";
    // protected $fillable = ['id', 'titulo', 'descripcion', 'imagen', 'estado'];
}
