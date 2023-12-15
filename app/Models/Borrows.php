<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrows extends Model
{
    use HasFactory;
    protected $table = 'borrows';

    protected $fillable = ['student_id', 'book_id', 'taken_date', 'brought_date',];

    // Add relationships if needed


    public function student()
    {
        return $this->belongsTo(Students::class);
    }

    public function book()
    {
        return $this->belongsTo(Books::class);
    }
}
