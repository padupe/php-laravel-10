<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();
//        dd($supports);
        return view('admin/supports/index', compact('supports'));
    }

    public function show(string|int $id)
    {
        // Support::find($id);
        // Support::where('id', $id)->first();
        // Support::where('id', '=', $id)->first();
        if (!$support = Support::find($id)) {
            return redirect()->back();
        }

        return view('admin/supports/show', compact('support'));
    }

    public function create()
    {
        return view('admin/supports/create');
    }

    public function store(Request $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'active';

        $support->create($data);

        return redirect()->route('supports/index');
    }
}
