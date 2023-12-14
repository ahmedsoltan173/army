<?php

namespace App\Livewire\Student;

use App\Models\Students;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Student extends Component
{
    public Collection $students;
    public String $student_first_name="";
    public String $student_last_name="";
    public String $code="";
    public Int $department_id=0;
    public Int $section_id=0;
    public Int $level_id=0;

    public function mount(){
        $students=Students::get();
    }
    public function store(){
        dd($this->student_first_name);
    }




    public function render()
    {
        return view('livewire.student.student');
    }
}
