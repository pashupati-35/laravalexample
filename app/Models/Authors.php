<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;
    protected $table='authors';
    protected $primaryKey = 'author_id';
    protected  $fillable=['name','surname'];

    public function book()
    {
        return $this->hasMany(Books::class, 'author_id');
    }
}
