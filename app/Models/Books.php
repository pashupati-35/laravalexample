<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table='books';
    protected $primaryKey = 'book_id';

    protected $fillable = ['name', 'pageCount', 'point', 'author_id', 'type_id'];

    public function author()
    {
        return $this->belongsTo(Authors::class);
    }

    public function type()
    {
        return $this->belongsTo(Types::class);
    }

    public function borrow()
    {
        return $this->hasMany(Borrows::class);
    }
}
