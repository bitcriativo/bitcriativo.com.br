<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterSubscribeRequest;
use App\Mail\NewsletterNewSubscriberNotificationMail;
use App\Mail\NewsletterSubscribeMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\returnSelf;

class NewsletterController extends Controller
{
    public function newsletterSubscribe(NewsletterSubscribeRequest $request)
    {
        $emailAddressSubscriber = $request->input('email');
        $url = "https://espocrm.bitcriativo.com.br/api/v1/LeadCapture/4af0d1cb8c96f5c33345e85c4ff0428c";

        $response = Http::withoutVerifying()->post($url, [
            "emailAddress" => $emailAddressSubscriber
        ]);

        if (!$response->successful())
            return back()->with('newsletter_subscribe_error', 'Error ao solicitar inscrição, por favor, tentar novamente mais tarde!');

        Mail::to($emailAddressSubscriber)->send(new NewsletterSubscribeMail($emailAddressSubscriber));
        Mail::to(env('MAIL_FROM_ADDRESS', 'joe@doe'))->send(new NewsletterNewSubscriberNotificationMail($emailAddressSubscriber));

        return back()->with('newsletter_subscribe_success', 'Inscrição realizada com sucesso!');
    }
}
