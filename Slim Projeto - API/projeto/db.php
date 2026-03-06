<?php
error_reporting(E_ALL & ~E_DEPRECATED);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

$container = $app->getContainer();

// IMPORTANTE: Esta linha executa o ficheiro que "ensina" o Slim a criar o banco de dados
$dependencies = require __DIR__ . '/src/dependencies.php';
$dependencies($app);

// Agora pedimos o objeto 'db'
$db = $container->get('db');

// Se o erro persistir, adicione este var_dump para depurarmos:
// var_dump($db); die(); 

$schema = $db->schema(); // Linha 21: Agora $db será um objeto, não um array
$tabela = "produtos";

$schema->dropIfExists($tabela);

$schema->create($tabela, function($table){
    $table->increments('id');
    $table->string('titulo', 100);
    $table->text('descricao');
    $table->decimal('preco', 11, 2);
    $table->string('fabricante', 60);
    $table->date('dt_criacao');
});

$db::table('produtos')->insert([
    [
        'titulo'     => 'Smartphone XPTO',
        'descricao'  => 'Ecrã 6.5 polegadas, 128GB memória',
        'preco'      => 450.00,
        'fabricante' => 'TechBrand',
        'dt_criacao' => date('Y-m-d')
    ],
    [
        'titulo'     => 'Portátil Ultra',
        'descricao'  => 'Processador i7, 16GB RAM, SSD 512GB',
        'preco'      => 1200.50,
        'fabricante' => 'MegaComputing',
        'dt_criacao' => date('Y-m-d')
    ]
]);

echo "Dois produtos inseridos com sucesso!" . PHP_EOL;
