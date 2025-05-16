<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscrição Confirmada</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9fafb;
                margin: 0;
                padding: 0;
                color: #111827;
            }
            .container {
                max-width: 600px;
                margin: 40px auto;
                background-color: #ffffff;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            }
            .header {
                text-align: center;
                margin-bottom: 20px;
            }
            .header h1 {
                color: #10b981;
            }
            .content {
                font-size: 16px;
                line-height: 1.6;
            }
            .cta {
                margin-top: 30px;
                text-align: center;
            }
            .cta a {
                background-color: #10b981;
                color: #ffffff;
                padding: 12px 24px;
                text-decoration: none;
                border-radius: 6px;
                font-weight: bold;
            }
            .footer {
                margin-top: 40px;
                text-align: center;
                font-size: 13px;
                color: #6b7280;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>🎉 Inscrição Confirmada!</h1>
            </div>
            <div class="content">
                <p>Olá,</p>

                <p>Obrigado por se inscrever na nossa newsletter! A partir de agora, você receberá conteúdos exclusivos, novidades, dicas e muito mais diretamente no seu e-mail.</p>

                <p>Estamos felizes por ter você com a gente!</p>
            </div>
            <div class="cta">
                <a href="{{ $websiteUrl ?? '#' }}">Visitar nosso site</a>
            </div>
            <div class="footer">
                <p>Se você não se inscreveu ou deseja cancelar a inscrição, <a href="{{ $unsubscribeUrl ?? '#' }}">clique aqui</a>.</p>
            </div>
        </div>
    </body>
</html>
