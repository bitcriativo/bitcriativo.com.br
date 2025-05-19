<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Mensagem enviada com sucesso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            max-width: 400px;
            text-align: center;
        }
        .icon {
            font-size: 48px;
            color: #10b981;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #111827;
        }
        p {
            font-size: 15px;
            color: #374151;
            margin-bottom: 20px;
        }
        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2563eb;
            color: #ffffff;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
        }
        a.button:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="icon">✅</div>
        <h1>Mensagem enviada com sucesso!</h1>
        <p>Agradecemos o seu contato. Em breve responderemos sua mensagem.</p>
        <a href="{{ url('/') }}" class="button">Voltar para o site</a>
    </div>
</body>
</html>
