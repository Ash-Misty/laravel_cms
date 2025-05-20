<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;


    protected $table = 'seminar';

    // Define fillable attributes for mass assignment


    protected $fillable = [
        'topic',
        'department',
        'date',
        'time',
        'venue',
        'conductedby',
        'staff_id',
        'image',
        'pdf',
        'staff_name',
        'student_name',
        'reg_no',
    ];


    // Define the relationship with the Staff model
    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }
}
