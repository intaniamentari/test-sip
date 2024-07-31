<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravoltIndonesiaServiceIndonesiaServiceService;

class DependantDropdownController extends Controller
{
    public function provinces()
    {
        return IndonesiaService::allProvinces();
    }

    public function cities(Request $request)
    {
        return IndonesiaService::findProvince($request->id, ['cities'])->cities->pluck('name', 'id');
    }

    public function districts(Request $request)
    {
        return IndonesiaService::findCity($request->id, ['districts'])->districts->pluck('name', 'id');
    }

    public function villages(Request $request)
    {
        return IndonesiaService::findDistrict($request->id, ['villages'])->villages->pluck('name', 'id');
    }
}
