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

class ServicesController extends Controller
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

    public function main()
    {
        $servicios = ModelsService::all()->where('estado', 1);
        return view('index', ['servicios' => $servicios]);
    }

    public function name_service($name)
    {
        $servicio = ModelsService::where('url', $name)->first();
        $tipo_servicios = ModelsTypeService::all()->where('id_servicio', $servicio->id);
        $tipo_imagenes_servicios = ModelsTypeImagenesService::all()->where('id_servicio', $servicio->id);
        return view('type_service', ['tipo_servicios' => $tipo_servicios, 'servicio' => $servicio, 'imagenes' => $tipo_imagenes_servicios]);
    }

    public function dashboard()
    {
        $servicio = ModelsService::all()->where('estado', 1);
        return view('admin.index', ['servicios' => $servicio]);
    }

    public function send_mail(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        $input = $request->all();
        $mailData = [
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'message' => $input['message']
        ];

        Mail::to($input['email'])->send(new ContactoMail($mailData));
        Mail::to('jerefrigeracion@gmail.com')->send(new ContactoNuevoMail($mailData));

        $data['result'] = 'success';

        return json_encode($data);
    }

    public function service_id(Request $request)
    {
        $data = [];
        $values = $request->all();
        $id = $values['id'];
        $servicio = ModelsService::where('id', $id)->first();
        $tipo_servicios = ModelsTypeService::where('id_servicio', $id)->get();
        $tipo_imagenes_servicios = ModelsTypeImagenesService::where('id_servicio', $id)->get();

        $data['tipo_servicios']= $tipo_servicios;
        $data['servicio']= $servicio;
        $data['imagenes']= $tipo_imagenes_servicios;
        return response()->json(
            $data,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }
}
