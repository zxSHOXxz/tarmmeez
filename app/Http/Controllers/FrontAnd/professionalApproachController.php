<?php

namespace App\Http\Controllers\FrontAnd;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;

class ProfessionalApproachController extends Controller
{
    public function show($id)
    {
        $works = Work::findOrFail($id);
        dd($works);
        $images = Image::where('work_id', $id)->get();
        $services = Service::all();
        return response()->view('front.professional-approach', compact('images', 'works', 'services'));
    }
}
