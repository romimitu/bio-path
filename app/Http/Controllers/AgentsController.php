<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Agent;

class AgentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $allAgents = Agent::orderBy('created_at', 'desc')->paginate();
        return view('bio.admin.agent.agents', ['agents' => $allAgents]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $data = $request->only('name', 'email', 'mobile', 'address', 'activity');
        Agent::create($data);
        return redirect('/agents');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $agent = Agent::findorfail($id);
        return view('bio.admin.agent.edit', ['agent' => $agent]);
    }

    public function update(Request $request, $id)
    {
        $agent = Agent::findorfail($id);
        $data = $request->only('name', 'email', 'mobile', 'address', 'activity');
        $agent->update($data);

        Session::flash('msg', 'Data Successfully Updated');
        return redirect('/agents');
        
    }

    public function destroy($id)
    {
        
        $agent = Agent::find($id);            
        $agent->destroy($id);
        
        Session::flash('msg', 'Data Successfully Deleted!!');
        return redirect('/agents');
    }
}
