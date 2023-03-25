<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SundaySchoolStudents extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */ 
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