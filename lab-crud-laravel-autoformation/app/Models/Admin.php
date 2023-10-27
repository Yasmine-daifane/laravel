<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// la class model provient de eloquent c'st le nom de l'orem dans laravel 
// on va utiliser cet objet pour communiquer avec notre base de donnee facilemet 
class Admin extends Model
{
    // un trait qui permet de genere des donnee 
    use HasFactory;
}
