<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images=Image::orderBy('id','desc')->paginate(10);
        return response()->view('dashboard.images.index',compact("images"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $works=Work::select('name','id')->get();
        return response()->view('dashboard.images.create',compact('works'));
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
            // 'name' => 'required|string|max:100',
        ]);


        if ($validator->fails()) {

            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        } else {


            $images = new Image();
            
            $images->work_id = $request->get('work_id');
            $images->user_id = Auth::user()->id;
            
            if (request()->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('upload/images/image', $imageName);
                $images->image = $imageName;
            }

            $isSaved = $images->save();
            return response()->json(['icon' => 'success', 'title' => 'image created successfully'], $isSaved ? 201 : 400);
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
        $works=Work::select('name','id')->get();
        $images=Image::findOrfail($id);
        return response()->view('dashboard.images.edit',compact('works','images'));
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
            // 'name' => 'required|string|max:100',
        ]);


        if ($validator->fails()) {

            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        } else {


            $images =  Image::findOrfail($id);
            
            $images->work_id = $request->get('work_id');
            // $images->user_id = Auth::user()->id;
            
            if (request()->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('upload/images/image', $imageName);
                $images->image = $imageName;
            }

            $isSaved = $images->save();
            return response()->json(['icon' => 'success', 'title' => 'image updated successfully'], $isSaved ? 201 : 400);
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
        $images= Image::destroy($id);
        return $images;
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
