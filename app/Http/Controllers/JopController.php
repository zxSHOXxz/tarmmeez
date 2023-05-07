<?php

namespace App\Http\Controllers;

use App\Models\Jop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jops = jop::orderBy('id', 'desc')->paginate(10);
        return response()->view('dashboard.jops.index', compact("jops"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('dashboard.jops.create');
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
            'nameAr' => 'required|string|max:100',
            'image' => 'nullable|file|mimes:jpeg,jpg,png,svg|max:2048' // Replace 2048 with your desired file size limit in kilobytes

        ]);


        if ($validator->fails()) {

            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        } else {


            $jops = new Jop();
            $jops->name = json_encode(['en' => $request->nameEn, 'ar' => $request->nameAr]);
            $jops->location = $request->get('location');
            $jops->final_date = $request->get('final_date');
            $jops->description = json_encode(['en' => $request->descriptionEn, 'ar' => $request->descriptionAr]);
            $jops->user_id = Auth::user()->id;



            $isSaved = $jops->save();
            return response()->json(['icon' => 'success', 'title' => 'Jop created successfully'], $isSaved ? 201 : 400);
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
        $jops =  Jop::findOrFail($id);
        return response()->view('dashboard.jops.edit', compact('jops'));
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

        $validator = Validator($request->all(), [
            'nameAr' => 'required|string|max:100',
            'image' => 'nullable|file|mimes:jpeg,jpg,png,svg|max:1000' // Replace 2048 with your desired file size limit in kilobytes

        ]);


        if ($validator->fails()) {

            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        } else {


            $jops =  Jop::findOrFail($id);
            $jops->name = json_encode(['en' => $request->nameEn, 'ar' => $request->nameAr]);
            $jops->location = $request->get('location');
            $jops->final_date = $request->get('final_date');
            $jops->description = json_encode(['en' => $request->descriptionEn, 'ar' => $request->descriptionAr]);
            $jops->user_id = Auth::user()->id;



            $isSaved = $jops->save();
            return response()->json(['icon' => 'success', 'title' => 'Jop update successfully'], $isSaved ? 201 : 400);
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
        $jops = Jop::destroy($id);
        return $jops;
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
