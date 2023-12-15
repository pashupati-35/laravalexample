<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table='students';
    protected  $fillable=['name','surname','DOB','gender','class','point'];

    public function borrows()
    {
        return $this->hasMany(Borrows::class);
    }
}
