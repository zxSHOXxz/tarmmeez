<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Traits\Trans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    use Trans;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services= Service::orderBy('id','desc')->paginate(10);
        return response()->view('dashboard.services.index',compact("services"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('dashboard.services.create');
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
            'image' => 'nullable|file|mimes:jpeg,jpg,png,svg|max:2048'
        ]);


        if ($validator->fails()) {

            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        } else {


            $services = new Service();
            $services->name = json_encode(['en' => $request->nameEn, 'ar' => $request->nameAr]);
            $services->description = json_encode(['en' => $request->descriptionEn , 'ar' => $request->descriptionAr]);
            $services->url = $request->get('url');
            $services->user_id = Auth::user()->id;

            if (request()->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('upload/images/service', $imageName);
                $services->image = $imageName;
            }

            $isSaved = $services->save();
            return response()->json(['icon' => 'success', 'title' => 'Service created successfully'], $isSaved ? 201 : 400);
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
        $services= Service::findOrFail($id);
        return response()->view('dashboard.services.edit',compact('services'));
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
        {

            $validator = Validator($request->all(), [
                'nameAr' => 'required|string|max:100',
                'image' => 'nullable|file|mimes:jpeg,jpg,png,svg|max:2048' // Replace 2048 with your desired file size limit in kilobytes
            ]);


            if ($validator->fails()) {

                return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
            } else {


                $services =Service::findOrFail($id);
                $services->name = json_encode(['en' => $request->nameEn, 'ar' => $request->nameAr]);
                $services->description = json_encode(['en' => $request->descriptionEn , 'ar' => $request->descriptionAr]);
                $services->url = $request->get('url');
                $services->user_id = Auth::user()->id;

                if (request()->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move('upload/images/service', $imageName);
                    $services->image = $imageName;
                }

                $isSaved = $services->save();
                return response()->json(['icon' => 'success', 'title' => 'Service updated successfully'], $isSaved ? 201 : 400);
            }



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
        $services= Service::destroy($id);
        return $services;
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
