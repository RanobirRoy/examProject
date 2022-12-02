<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crudModel;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $databaseModel = new crudModel();
        $databaseModel->name = $request->name;
        $databaseModel->save();
        return redirect('show/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $databaseModel = crudModel::all();
        $showData = compact('databaseModel');
        return view('form', ['data' => $databaseModel]);
        // return view('showTest', ['data' => $databaseModel]);
        // return view('showTest')->with($showData);
        // return view('showTest');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $databaseModel = new crudModel();
        $editData = $databaseModel->where('id',$id)->get();
        return view('edit',["editData"=>$editData]);
        // return view('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $databaseModel = crudModel::find($request->id);
        // $databaseModel->name = $request->name;
        // $databaseModel->save();
        // return redirect('form/');

        // Failed to update
        // $databaseModel = crudModel::find($request->id);
        // if($databaseModel){
        //     $databaseModel->name = $request->name;
        //     $databaseModel->save();
        //     return redirect('form/');
        // }else{
        //     echo "failed";
        // }
        $reqName = $request->name;
        $reqId = $request->id;
        $crudModel = crudModel::find($reqId);
        $crudModel->name = $name;
        $crudModel->save();
      
        
        return redirect('show/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $databaseModel = new crudModel();
        $destroyData = $databaseModel->where('id',$id)->delete();
        if($destroyData){
            return redirect('view');
        }else{
            die();
        }
    }
}
