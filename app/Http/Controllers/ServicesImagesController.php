<?php

namespace App\Http\Controllers;

use App\Models\Service as ModelsService;
use App\Models\Type_Service as ModelsTypeService;
use App\Models\Type_Image_Service as ModelsTypeImagenesService;

use Illuminate\Http\Request;
use App\Rules\ReCaptcha;
use Mail;
use App\Mail\ContactoMail;
use App\Mail\ContactoNuevoMail;

class ServicesImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = ModelsService::all()->where('estado', 1);
        return view('service', ['servicios' => $servicios]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        /* 
            Write Code Here for
            Store $imageName name in DATABASE from HERE 
        */

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }
}
