<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs= Blog::orderBy('id','desc')->paginate(10);
        return response()->view('dashboard.blogs.index',compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('dashboard.blogs.create');
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
        ]);


        if ($validator->fails()) {

            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        } else {


            $blogs = new Blog();
            $blogs->name = json_encode(['en' => $request->nameEn, 'ar' => $request->nameAr]);
            $blogs->description = json_encode(['en' => $request->descriptionEn, 'ar' => $request->descriptionAr]);
            $blogs->user_id = Auth::user()->id;

            if (request()->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('upload/images/blog', $imageName);
                $blogs->image = $imageName;
            }

            $isSaved = $blogs->save();
            return response()->json(['icon' => 'success', 'title' => 'Blog created successfully'], $isSaved ? 201 : 400);
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
        $blogs =  Blog::findOrFail($id);
        return response()->view('dashboard.blogs.edit',compact('blogs'));

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
            'name' => 'required|string|max:100',
        ]);


        if ($validator->fails()) {

            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        } else {


            $blogs =  Blog::findOrFail($id);
            $blogs->name = $request->get('name');
            $blogs->description = $request->get('description');
            // $blogs->user_id = Auth::user()->id;

            if (request()->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('upload/images/blog', $imageName);
                $blogs->image = $imageName;
            }

            $isSaved = $blogs->save();
            return response()->json(['icon' => 'success', 'title' => 'Blog created successfully'], $isSaved ? 201 : 400);
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
        $blogs= Blog::destroy($id);
        return $blogs;
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
