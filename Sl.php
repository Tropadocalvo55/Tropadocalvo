<?php
require 'vendor/autoload.php'; // Importa a biblioteca do Telegram

use Telegram\Bot\Api;

// Token do seu bot do Telegram
$telegram_token = '7043086632:AAEPxHUiKm8i2dwOt1xYHUOSd775k2YLx5I';

// ID do chat para o qual você deseja enviar mensagens
$chat_id = '5401313077';

// Mensagem a ser enviada para o Telegram
$message = "Olá! Esta é uma mensagem de teste do seu bot do Telegram.";

// Inicializa o cliente da API do Telegram
$telegram = new Api($telegram_token);

try {
    // Envia a mensagem para o seu bot no Telegram
    $response = $telegram->sendMessage([
        'chat_id' => $chat_id,
        'text' => $message
    ]);

    echo 'success'; // Se a mensagem for enviada com sucesso
} catch (Exception $e) {
    echo 'error'; // Se houver algum erro ao enviar a mensagem
}
?>
