<?php

namespace App\Livewire;

use App\Mail\RequestQuoteMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ChatRequestQuote extends Component
{
    public $messages = [];
    public $newMessage = '';
    public $step = 0;

    public $formData = [
        'name' => '',
        'email' => '',
        'service' => '',
        'message' => '',
    ];

    public function mount()
    {
        $this->messages[] = ['from' => 'bot', 'text' => 'Olá! Vamos fazer seu orçamento. Qual é o seu nome?'];
    }

    public function sendMessage()
    {
        $text = trim($this->newMessage);

        if ($text === '') {
            return;
        }

        $this->messages[] = ['from' => 'user', 'text' => $text];
        $this->newMessage = '';

        $this->processStep($text);

        $this->js('window.dispatchEvent(new CustomEvent("scroll-to-bottom"))');
    }

    private function processStep($text)
    {
        switch ($this->step) {
            case 0:
                $this->formData['name'] = $text;
                $this->messages[] = ['from' => 'bot', 'text' => 'Prazer, ' . $text . '! Qual é o seu e-mail?'];
                $this->step++;
                break;

            case 1:
                $this->formData['email'] = $text;
                $this->messages[] = ['from' => 'bot', 'text' => 'Obrigado! Que tipo de serviço você está buscando?'];
                $this->step++;
                break;

            case 2:
                $this->formData['service'] = $text;
                $this->messages[] = ['from' => 'bot', 'text' => 'Ótimo! Quer deixar alguma mensagem extra?'];
                $this->step++;
                break;

            case 3:
                $this->formData['message'] = $text;
                $this->messages[] = ['from' => 'bot', 'text' => 'Perfeito! Vou enviar seus dados para nossa equipe. Aguarde um momento...'];
                $this->sendEmail();
                $this->messages[] = ['from' => 'bot', 'text' => 'Prontinho! Sua solicitação foi enviada. Entraremos em contato em breve.'];
                $this->step++;
                break;

            default:
                $this->messages[] = ['from' => 'bot', 'text' => 'Já recebemos sua solicitação. Obrigado!'];
                break;
        }
    }

    private function sendEmail()
    {
        $data = $this->formData;

        Mail::to(env('MAIL_FROM_ADDRESS', 'joe@doe'))->send(new RequestQuoteMail($data['name'], $data['email'], $data['service'], $data['message']));
    }

    public function render()
    {
        return view('livewire.chat-request-quote');
    }
}
