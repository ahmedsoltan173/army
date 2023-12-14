<?php

namespace App\Models;

use App\Livewire\Student\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Students extends Model
{
    use HasFactory,SoftDeletes;
    const Student="student";
    const Applicant="applicant";

    const types=['student','applicant'];

    protected $fillable = ['first_name','last_name','code','department_id','section_id','level_id','type'];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function level(){
        return $this->belongsTo(Levels::class);
    }

}
