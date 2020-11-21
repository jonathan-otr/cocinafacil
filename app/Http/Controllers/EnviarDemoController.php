<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\NuevaCita;
use App\Mail\Newsletter;
use Mail;

class EnviarDemoController extends Controller
{
    public function enviar(request $request){
      $validator = Validator::make($request->all(), [
  			'nombre' => 'required|string|min:3|max:191',
  			'correo' => 'required|string|email|max:191',
  			'telefono' => 'required|string|min:6|max:50',
  		]);
  		if ($validator->fails()) {
  			return ["estatus"=>'Error',"mensaje"=>"Revisa tus datos en el formulario!","icon" => "error"];
  		}
      $nombre = $request['nombre'];
      $correo = $request['correo'];
      $telefono = $request['telefono'];
      Mail::to('demo@cocinainteligente.com.mx')->send(new NuevaCita($nombre,$correo,$telefono));
      return ["estatus"=>'Enviado!',"mensaje"=>"Tus datos fueron envíados correctamente!",'icon' => "success"];
    }



    public function newsletter(request $request){
      $validator = Validator::make($request->all(), [
  			'correo' => 'required|string|email|max:191',
  		]);
  		if ($validator->fails()) {
  			return ["estatus"=>'Error',"mensaje"=>"El correo no es válido!","icon" => "error"];
  		}
      $correo = $request['correo'];
      Mail::to('demo@cocinainteligente.com.mx')->send(new Newsletter($correo));
      return ["estatus"=>'Enviado!',"mensaje"=>"Tus datos fueron envíados correctamente!",'icon' => "success"];
    }
}
