<?php

namespace App\Http\Livewire\Admin\Student;

use App\Models\Student;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $Student = Student::orderBy('id', 'DESC')->paginate(10);//get the data coming from the announcement model and paginate it

        return view('livewire.admin.student.index', ['Student' => $Student]);
    }
}
