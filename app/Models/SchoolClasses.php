<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClasses extends Model
{
    protected $table ='sundayschoolclasses';
    protected $primaryKey ='id';
    protected $fillable = [
        'className',
        'numberOfStudents',
    ];

    public function students()
    {
        return $this-> hasMany(schoolStudents::class);
    }
}
