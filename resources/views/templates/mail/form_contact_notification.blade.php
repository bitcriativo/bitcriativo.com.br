<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nova Mensagem do Formulário de Contato</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #111827;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        h2 {
            color: #1d4ed8;
            margin-bottom: 20px;
            text-align: center;
        }
        .message {
            background-color: #f9fafb;
            padding: 20px;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
        }
        .message p {
            margin: 8px 0;
            font-size: 15px;
        }
        .message pre {
            background-color: #f3f4f6;
            padding: 10px;
            border-radius: 4px;
            font-size: 14px;
            white-space: pre-wrap;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 13px;
            color: #6b7280;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📬 Nova mensagem do site</h2>
        <p>Você recebeu uma nova mensagem através do formulário de contato do website.</p>

        <div class="message">
            <p><strong>Nome:</strong> {{ $name ?? 'Não informado' }}</p>
            <p><strong>E-mail:</strong> {{ $email ?? 'Não informado' }}</p>
            @if (!empty($phone))
                <p><strong>Telefone:</strong> {{ $phone }}</p>
            @endif
            <p><strong>Assunto:</strong> Formulário de contato</p>
            <p><strong>Mensagem:</strong></p>
            <pre>{{ $contactMessage ?? 'Nenhuma mensagem fornecida.' }}</pre>

            @if (!empty($ip))
                <p style="margin-top: 10px;"><strong>IP de origem:</strong> {{ $ip }}</p>
            @endif
        </div>

        <div class="footer">
            <p>Este é um e-mail automático gerado pelo site. Não responda diretamente.</p>
        </div>
    </div>
</body>
</html>
