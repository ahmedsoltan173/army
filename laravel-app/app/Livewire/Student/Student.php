<?php

namespace App\Livewire\Student;

use App\Models\Students;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Validation\Rule;

use Livewire\Component;

class Student extends Component
{
    public Collection $students;
    public string $student_first_name = "";
    public string $student_last_name = "";
    public string $code = "";
    public int $department_id = 0;
    public int $section_id = 0;
    public int $level_id = 0;
    public string $type = "student";

    protected $listeners = ['refresh-me' => '$refresh'];

    protected $rules = [
        'student_first_name' => 'required|min:3|max:500',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function mount()
    {
        $this->students = Students::get();
    }

    public function store()
    {
        $this->validate();

        Students::create([
            'first_name' => $this->student_first_name,
            'last_name' => $this->student_last_name,
            'code' => $this->code,
            'department_id' => $this->department_id,
            'section_id' => $this->section_id,
            'level_id' => $this->level_id,
            'type' => $this->type,
        ]);

        $this->reset(['student_first_name', 'student_last_name', 'code', 'department_id', 'section_id', 'level_id', 'type']);
        $this->dispatch('close-modal', ['id' => 'addStudentModal']);
    }

    public function render()
    {
        return view('livewire.student.student');
    }
}
