<?php

namespace App\Http\Livewire\Admin\ForApproval;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $users = User::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.for-approval.index', ['users' => $users]);
    }
}
