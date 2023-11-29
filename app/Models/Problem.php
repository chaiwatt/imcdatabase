<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'proplem_table_id',
        'problem_1',
        'problem_2',
        'problem_3',
        'problem_4',
        'problem_5',
        'problem_6',
        'problem_7',
        'problem_8',
        'problem_9',
        'problem_10'
    ];
}
