<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// proveint de eloquent le nom de l'orem dans laravel 
// en va utiliser cet objet pour communiquer  facilement avec notre BD
class Admin extends Model
{
    // un trait qui permet de generer des donnee
    use HasFactory;

}
