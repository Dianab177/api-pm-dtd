<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::all();
        return response()->json($languages);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $language = new Language();
        $language->name = $request->name;
        $language->save();
        $data = [
            'message' => 'Language created successfully',
            'service' => $language
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
         // return response()->json($language);
         $data =[
            'message'=> 'Language details',
            'service'=>$language        
        ];
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        $language->name=$request->name;
        $language->save();
        $data =[
            'message'=> 'Language updated successfully',
            'service'=>$language        
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        $language->delete();
        $data =[
            'message'=> 'Language delete successfully',
            'service'=>$language        
        ];
        return response()->json($data);
    }
}
