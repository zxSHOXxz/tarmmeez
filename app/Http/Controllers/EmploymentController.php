<?php

namespace App\Http\Controllers;

use App\Models\Employment;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employments =Employment::orderBy('id','desc')->paginate(10);
        return response()->view('dashboard.employments.index',compact("employments"));
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

        $validator = Validator($request->all(), [
            'name' => 'required|string|max:100',
        ]);


        if ($validator->fails()) {

            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        } else {


            $employments = new Employment();
            $employments->name = $request->get('name');
            $employments->email = $request->get('email');
            $employments->mobile = $request->get('mobile');
            $employments->jop_id = $request->get('jop_id'); 
            // $employments->type = $request->get('type'); 
            if (request()->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move('upload/files/employment', $fileName);
                $employments->file = $fileName;
            }
            
            

            $isSaved = $employments->save();
            return response()->json(['icon' => 'success', 'title' => 'Employment created successfully'], $isSaved ? 201 : 400);
        }

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employments= Employment::destroy($id);
        return $employments;
    }
        /**
     *  Display a trashed listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        //
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        //
    }

        /**
     * forcedelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forcedelete($id)
    {
        //
    }
}
