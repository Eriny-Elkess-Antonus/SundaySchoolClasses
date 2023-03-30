<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schoolStudents extends Model
{
    protected $table ='sundayschool_students';
    protected $fillable = [
        'name',
        'adge',
        'gender',
        'class_ID'
    ];
    public function classess()
    {
        return $this->belongsTo(App\SchoolClasses::class, 'class_ID' );
    }
}
