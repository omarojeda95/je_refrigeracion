<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Image_Service extends Model
{
    use HasFactory;
    protected $table = "servicios_imagenes";
    // protected $fillable = ['id', 'titulo', 'descripcion', 'imagen', 'estado'];
}
