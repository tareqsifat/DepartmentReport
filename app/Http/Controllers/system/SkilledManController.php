<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use App\Models\ManPower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SkilledManController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $man_power = ManPower::where('is_archive',0)->where('status',1)->paginate(15);
        return view('admin.system.skilledMan.index',compact('man_power'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.system.skilledMan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'class' => 'required',
            'thana' => 'required',
            'stage' => 'required',
            'responsibility' => 'required',
            'number' => 'required',
            'skill' => 'required',
            'level' => 'required',
        ]);

        $man_power = new ManPower();
        $man_power->name = $request->name;
        $man_power->class = $request->class;
        $man_power->thana = $request->thana;
        $man_power->stage = $request->stage;
        $man_power->responsibility = $request->responsibility;
        $man_power->number = $request->number;
        $man_power->skill = $request->skill;
        $man_power->level = $request->level;
        
        $man_power->creator = Auth::user()->id;
        $man_power->slug = Str::slug($request->name);

        $man_power->save();

        return redirect()->route('skill_man.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $man_power = ManPower::find($id);
        return view('admin.system.skilledMan.view', compact('man_power'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $man_power = ManPower::find($id);
        return view('admin.system.skilledMan.edit', compact('man_power'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'class' => 'required',
            'thana' => 'required',
            'stage' => 'required',
            'responsibility' => 'required',
            'number' => 'required',
            'skill' => 'required',
            'level' => 'required',
        ]);

        $man_power = ManPower::fnd($id);
        if(isset($man_power) && $man_power->status == 1){
            $man_power->name = $request->name;
            $man_power->class = $request->class;
            $man_power->thana = $request->thana;
            $man_power->stage = $request->stage;
            $man_power->responsibility = $request->responsibility;
            $man_power->number = $request->number;
            $man_power->skill = $request->skill;
            $man_power->level = $request->level;
            
            $man_power->creator = Auth::user()->id;
            $man_power->slug = Str::slug($request->name);

            $man_power->save();
            
            session()->flash('alert-success','Man Power data updated successfully');
            return redirect()->route('skill_man.index');
        }else {
            session()->flash('alert-danger','Man Power data not found');
            return redirect()->route('skill_man.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
