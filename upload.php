<?php
if (isset($_FILES["arquivo"])) {
    $targetDir = "/uploads";
    $targetFile = $targetDir . basename($_FILES["arquivo"]["name"]);

    if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $targetFile)) {
        // Envio bem-sucedido
        http_response_code(200);
    } else {
        // Erro ao enviar o arquivo
        http_response_code(500);
    }
} else {
    // Requisição inválida
    http_response_code(400);
}
?>
