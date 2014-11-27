<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Pessoa.php';
        require_once 'PessoaJuridica.php';
        require_once 'PessoaFisica.php';
        require_once 'Receitas.php';
        
        $pessoaFisica = new PessoaFisica();
        $pessoaJuridica = new PessoaJuridica();
        $receitas = new Receitas();
        echo $pessoaFisica->setCpf($cpf);
        echo $pessoaJuridica->setCnpj($cnpj);
        echo $receitas->tributar($pessoaFisica, 5, 1000000);
        
        
        ?>
    </body>
</html>
