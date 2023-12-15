<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;
    protected $table='types';
    protected $primaryKey = 'type_id';

    protected $fillable = ['names'];

    // Define the relationship with the Book model
    public function book()
    {
        return $this->hasMany(Books::class, 'type_id');
    }
}
