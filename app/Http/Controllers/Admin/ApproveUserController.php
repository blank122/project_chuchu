<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ApproveUserController extends Controller
{
    public function index ()
    {
        return view ('admin.forapproval.index');
    }

    public function status (Request $request, $id)
    {
        $data = User::find($id);

        if($data->status == 0)
        {
            $data->status = 1;
        }else{
            $data->status = 0;
        }
        $data->save();

        return redirect ('admin/user-approval')->with('message', $data->name.' has been activated');

    }
}
