<?php
// Verifica se o parâmetro 'query' foi enviado via método GET
if (isset($_GET['query'])) {
    // Captura o valor do parâmetro 'query'
    $pesquisa = $_GET['query'];

    // Lógica para verificar a palavra específica
    if ($pesquisa == "Instalaçao") {
        // Redireciona o usuário para a página correspondente
        header("Location: index2.html");
        exit(); // Certifique-se de sair para evitar que o código continue a ser executado
    }

    // Se a palavra não for encontrada, você pode realizar outra lógica de processamento aqui
    echo "Tente pesquisar por outras chaves existentes ao inves de: " . $pesquisa;
} else {
    // Se o parâmetro 'query' não foi enviado, exibe um formulário de pesquisa
    echo '<form action="nome_do_seu_arquivo_php.php" method="GET">
            <input type="text" name="query" placeholder="Digite sua pesquisa...">
            <button type="submit">Pesquisar</button>
          </form>';
}
?>
