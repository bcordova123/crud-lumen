<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Response;

class Controller extends BaseController
{
    //* Función de respuesta exitosa!
    public function respondSuccess($data, String $message = 'Succes Operation', int $code = 200){
        return Response()->json([
            'status' => 'success',
            'messsage' => $message,
            'data' => $data ?? [],
        ], $code);
    }
    //*Función de respuesta de error!
    public function respondError($errors, String $message = 'Error Operation', int $code = 400){
        return Response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $errors,
        ],$code);
    }
}
