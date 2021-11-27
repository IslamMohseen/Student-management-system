<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branch;

class branchsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front/addbranch');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branch = new branch;
        $branch->branchsort = $request->bsort;
        $branch->branchfull = $request->bfull;
        $branch->save();
        return redirect('branchesdetails');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $branchs = branch::paginate(3);
        return view('front/branchesdetails',compact('branchs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branchs = branch::find($id);
        return view('front/branchedit',compact('branchs'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $branch = branch::find($id);
        $branch->branchsort = $request->bsort;
        $branch->branchfull = $request->bfull;
        $branch->save();
        return redirect('branchesdetails');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch =branch::where('id',$id)->first();

    if ($branch != null) {
        $branch->delete();
        return redirect('branchesdetails');
    }
    }
}
