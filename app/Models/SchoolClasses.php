<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClasses extends Model
{
    protected $table ='sundayschoolclasses';
    protected $primaryKey ='id';
    protected $fillable = [
        'class_name',
        'number_ofstudents',
    ];

    public function students()
    {
        return $this-> hasMany(SundaySchoolStudents::class);
    }
}
