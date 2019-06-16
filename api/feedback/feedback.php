<?php

/**
 * Retorna uma resposta JSON para o Solicitante.
 *
 * @param boolean $__success - indica se houve sucesso na operação
 * @param string $__message - uma mensagem opcional
 * @param array $_dados - dados a serem retornados
 * @return JSON REST
 */
function __output_header__($__success = true, $__message = null, $_dados = array())
{
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(
        array(
            'success' => $__success,
            'message' => $__message,
            'dados' => $_dados
        )
    );

    # por ser a ultima funcao, podemos matar o processo aqui.
    exit;
}

# verificando se o método de envio é mesmo GET
if ($_SERVER['REQUEST_METHOD'] !== "GET")
    __output_header__(false, "Método de requisição não aceito.", null);


$funcao = $_GET["funcao"];
if ($funcao == "novaSala") {
    echo "Nova sala";
    // Zera a tabela no banco

} else if($funcao == "responder") {
    echo "Participante enviando resposta";
    // Registrar resposta no banco de dados

} else {
    echo "Função desconhecida";
}