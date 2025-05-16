<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormContactRequest;
use App\Mail\FormContactConfirmationMail;
use App\Mail\FormContactNotificationMail;
use Illuminate\Support\Facades\Mail;

class FormContactController extends Controller
{
    public function submitFormContact(FormContactRequest $request)
    {
        $name = $request->input('name');
        $phoneNumber = $request->input('phone_number');
        $email = $request->input('email');
        $contactMessage = $request->input('message');

        Mail::to(env('MAIL_FROM_ADDRESS', 'localhost'))->send(new FormContactNotificationMail(
            $name,
            $phoneNumber,
            $email,
            $contactMessage
        ));

        Mail::to($email)->send(new FormContactConfirmationMail());

        return back()->with('form_contact_success', 'Mensagem enviada com sucesso!');
    }
}
