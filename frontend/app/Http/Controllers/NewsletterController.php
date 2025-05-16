<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterSubscribeRequest;
use App\Mail\NewsletterNewSubscriberNotificationMail;
use App\Mail\NewsletterSubscribeMail;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function newsletterSubscribe(NewsletterSubscribeRequest $request)
    {
        $emailAddressSubscriber = $request->input('email');

        Mail::to($emailAddressSubscriber)->send(new NewsletterSubscribeMail($emailAddressSubscriber));
        Mail::to(env('MAIL_FROM_ADDRESS', 'joe@doe'))->send(new NewsletterNewSubscriberNotificationMail($emailAddressSubscriber));

        return back()->with('newsletter_subscribe_success', 'Inscrição realizada com sucesso!');
    }
}
