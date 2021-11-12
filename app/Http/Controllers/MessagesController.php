<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessagesController extends Controller
{
     public function store(){

      //validate se utiliza para validar la información antes de ser enviada a bd
        $message = request()->validate([
             'name' => 'required',
             'email' => 'required|email',
             'subject' => 'required',
             'content' => 'required|min:3'
        ],
        [
          'name.required' => 'Necesito tu nombre',
          // 'name.required' => 'Necesito tu nombre',
          
          

        ]
     
     
     );

          //enviar email
          // crear un mailable php artisan make:mail  messagerecieved
          Mail::to('ing.eduardogb@gmail.com')
               //->send(new MessageReceived($message)); utilizar queue en ves de send, lleva un a configuracion adional 17
               ->send(new MessageReceived($message));

        return 'Mensaje Enviado';
     }
}
