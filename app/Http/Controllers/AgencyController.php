<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Status;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $agencys=Agency::all();
        return view('agency.list',compact('agencys'));
    }

    public function create()
    {
        $status=Status::all();
        return view('agency.create',compact('status'));
    }

    public function store(Request $request)
    {
        $agency= new Agency();
        $agency->agent_code =$request->input('agent');
        $agency->name =$request->input('name');
        $agency->phone =$request->input('phone');
        $agency->email =$request->input('email');
        $agency->address =$request->input('add');
        $agency->manage =$request->input('ten');
        $agency->status_id =$request->input('status');
        $agency->save();
        return redirect()->route('home.index');
    }

    public function edit($id)
    {
        $status=Status::all();
        $agency=Agency::findOrFail($id);
        return view('agency.edit',compact('agency','status'));
    }

    public function update(Request $request,$id)
    {
        $agency=Agency::findOrFail($id);
        $agency->agent_code =$request->input('agent');
        $agency->name =$request->input('name');
        $agency->phone =$request->input('phone');
        $agency->email =$request->input('email');
        $agency->address =$request->input('add');
        $agency->manage =$request->input('ten');
        $agency->status_id =$request->input('status');
        $agency->save();
        return redirect()->route('home.index');
    }

    public function delete($id)
    {
      $agency=Agency::findOrFail($id);
      $agency->delete();
      return redirect()->route('home.index');
    }
    public function search(Request $request)
    {

        $key = $request->input('input_search');
        if (!$key) {
            return redirect()->route('home.index');
        }
        $agencys = Agency::where('name', 'LIKE', '%' . $key . '%')->get();
        return view('agency.list', compact( 'agencys'));

    }
}
