<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    // Primary key
    protected $primaryKey = 'staff_id';

    // Disable auto-increment for the custom primary key
    public $incrementing = false;

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'staff_id',
        'name',
        'email',
        'password',
    ];

    // Hide password from model output
    protected $hidden = [
        'password',
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Define the relationship with the Seminar model
    public function seminars()
    {
        return $this->hasMany(Seminar::class, 'staff_id');
    }
}
