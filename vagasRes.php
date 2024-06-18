<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propostas de Emprego</title>
    <style>
        /* Estilo para o corpo da página */
        body {
            font-family: Arial, sans-serif; /* Exemplo de fonte */
            margin: 0; /* Remover margens padrão */
            padding: 20px; /* Adicionar espaçamento interno */
        }

        /* Estilo para a barra de navegação */
        nav {
            background-color: #063d84;
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        nav ul li a:hover {
            background-color: #063d84;
        }

        /* Estilos básicos para os cards */
        .card {
            width: 400px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            background: #DCDCDC; /* Fundo dos cards */
        }
        .card h3 {
            margin-top: 0;
        }
        .card .mensagem {
            float: right;
            color: blue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="vagas.php">Todos</a></li>
            <li><a href="vagasRes.php">Residência</a></li>
            <li><a href="vagasApt.php">Apartamento</a></li>
            <li><a href="vagasCondo.php">Condomínio</a></li>
            <li><a href="vagasEmp.php">Empresarial</a></li>
        </ul>
    </nav>
        
    </style>
</head>
<body>
    <h2> <center> Propostas de Emprego Residencial</center> </h2>

    <?php
    // Array simulando dados das propostas (pode ser substituído por dados dinâmicos do banco)
    $propostas = [
        ['empresa' => 'Empresarial', 'cargo' => 'Faxina em empresa de 6 comodos', 'local' => 'Ji-Parana', 'valor' => 'R$190,00'],
        ['empresa' => 'Empresarial', 'cargo' => 'Instalação de alarme', 'local' => 'Ji-Parana', 'valor' => 'R$180,00'],
        ['empresa' => 'Empresarial', 'cargo' => 'Limpeza de quintal', 'local' => 'Ji-Parana', 'valor' => 'R$220,00'],
        ['empresa' => 'Empresarial', 'cargo' => 'Instalação e configuração de cameras', 'local' => 'Ji-Parana', 'valor' => 'R$310'],
        ['empresa' => 'Empresarial', 'cargo' => 'Pintura da fachada da empresa', 'local' => 'Ji-Parana', 'valor' => 'R$390'],
        ['empresa' => 'Empresarial', 'cargo' => 'Montar moveis', 'local' => 'Ji-Parana', 'valor' => 'R$380,00'],
        ['empresa' => 'Empresarial', 'cargo' => 'Limpeza de quintal', 'local' => 'Ji-Parana', 'valor' => 'R$220,00'],
        ['empresa' => 'Empresarial', 'cargo' => 'Instalação e configuração de cameras', 'local' => 'Ji-Parana', 'valor' => 'R$310'],
        ['empresa' => 'Empresarial', 'cargo' => 'Limpeza em escritório executivo', 'local' => 'Porto Velho', 'valor' => 'R$210,00'],
        ['empresa' => 'Empresarial', 'cargo' => 'Serviços de limpeza em empresa ', 'local' => 'Cacoal', 'valor' => 'R$230,00'],
        ['empresa' => 'Empresarial', 'cargo' => 'Manutenção e limpeza de loja de varejo', 'local' => 'Ariquemes', 'valor' => 'R$200,00'],
        ['empresa' => 'Empresarial', 'cargo' => 'Higienização em consultório médico', 'local' => 'Guajará-Mirim', 'valor' => 'R$220,00']
    

        // ['empresa' => 'Empresa B', 'cargo' => 'Designer UX/UI', 'local' => 'Rio de Janeiro'],
        // ['empresa' => 'Empresa C', 'cargo' => 'Analista de Dados', 'local' => 'Belo Horizonte'],
        // ['empresa' => 'Empresa D', 'cargo' => 'Gerente de Projetos', 'local' => 'Curitiba'],
    ];

    // Itera sobre as propostas para exibir os cards
    foreach ($propostas as $proposta) {
        echo '<div class="card">';
        echo '<h3>' . $proposta['cargo'] . '</h3>';
        echo '<p><strong>Empresa:</strong> ' . $proposta['empresa'] . '</p>';
        echo '<p><strong>Local:</strong> ' . $proposta['local'] . '</p>';
        echo '<p><strong>Valor:</strong> ' . $proposta['valor'] . '</p>';
        echo '<p class="mensagem"><a href="https://calendly.com/">Enviar mensagem</a></p>'; // Ícone de mensagem
        echo '</div>';
    }
    ?>

</body>
</html>
