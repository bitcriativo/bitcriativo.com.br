<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nova Inscrição na Newsletter</title>
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
            text-align: center;
            margin-bottom: 20px;
        }
        .info {
            background-color: #f9fafb;
            padding: 20px;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
        }
        .info p {
            margin: 8px 0;
            font-size: 15px;
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
        <h2>🆕 Novo inscrito na newsletter</h2>
        <p>Você recebeu uma nova inscrição na newsletter. Confira os detalhes abaixo:</p>

        <div class="info">
            <p><strong>E-mail:</strong> {{ $email }}</p>
            <p><strong>Data da inscrição:</strong> {{ $subscribed_at ?? now()->format('d/m/Y H:i') }}</p>
            @if (!empty($ip))
                <p><strong>Endereço IP:</strong> {{ $ip }}</p>
            @endif
            @if (!empty($source))
                <p><strong>Origem:</strong> {{ $source }}</p>
            @endif
        </div>

        <div class="footer">
            <p>Este é um e-mail automático gerado pelo sistema de newsletter.</p>
        </div>
    </div>
</body>
</html>
