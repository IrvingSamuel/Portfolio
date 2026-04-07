<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nova mensagem de contato</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2 style="color: #6366f1;">Nova mensagem via Portfólio</h2>

    <p><strong>Nome:</strong> {{ $senderName }}</p>
    <p><strong>Email:</strong> {{ $senderEmail }}</p>

    <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 20px 0;">

    <p><strong>Mensagem:</strong></p>
    <p style="white-space: pre-line;">{{ $senderMessage }}</p>

    <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 20px 0;">
    <p style="font-size: 12px; color: #9ca3af;">Enviado através do formulário de contato do portfólio.</p>
</body>
</html>
