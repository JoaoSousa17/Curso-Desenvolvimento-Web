<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    use Illuminate\Database\Capsule\manager as Capsule;

    require 'vendor/autoload.php';

    error_reporting(E_ALL & ~E_DEPRECATED);

    $app = new \Slim\App(
        ['settings' => ['displayErrorDetails' => true]]
    );

    $container = $app->getContainer();
    $container['db'] = function(){
        $capsule = new Capsule;

    $capsule->addConnection([
        'driver' => 'mysql',
        'host' => '127.0.01',
        'database' => 'slim',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
    ]);

    $capsule->setAsGlobal();

    $capsule->bootEloquent();

    return $capsule;
    };

    $app->get('/usuarios', function(Request $request, Response $response){

        $db = $this->get('db');
        /*$db->schema()->dropIfExists('usuarios');
        $db->schema()->create('usuarios', function($table){
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->timestamps();
        });*/

        /*$db->table('usuarios')->insert([
            'nome' => 'Jamilton Damasceno',
            'email' => 'jamilton@teste.com.br',
        ]);

        $db->table('usuarios')
                    -> where('id', 1)
                    ->update([
                        'nome' => 'Jamilton'
                    ]);*/

        /*$db->table('usuarios')
        -> where('id', 1)
        ->delete();*/

        $usuarios = $db->table('usuarios')->get();
        foreach($usuarios as $usuario){
            echo $usuario->nome . '<br>';
        }
        
    });

    $app->run();
    /*
    $app->get('/header', function(Request $request, Response $response){

        $response->write('Esse é um retorno header');
        return $response->withHeader('allow', 'PUT')->withAddedHeader('Content-Length', 10);
        
    });  

    $app->get('/json', function(Request $request, Response $response){

        return $response->withJson(['nome' => 'Joao', 'email' => 'joao@teste.com.br']);
        
    });  

    $app->get('/xml', function(Request $request, Response $response){

        $xml = file_get_contents('arquivo');
        $response->write($xml);

        return $response->withHeader('Content-Type', 'application/xml');

    }); 

    $app->add( function($request, $response, $next){
        $response->write('Inicio Camada 1 + ');
        $response = $next($request, $response);

        $response->write(' + Fim Camada 1');
        return $response;
    });

    $app->add( function($request, $response, $next){
        $response->write('Inicio Camada 2 + ');
        $response = $next($request, $response);

        $response->write(' + Fim Camada 2');
        return $response;
    });

    $app->get('/usuarios', function(Request $request, Response $response){

        $response->write('Ação Principal Usuarios');

    });

    $app->get('/postagens', function(Request $request, Response $response){

        $response->write('Ação Principal Postagens');

    });*/



    
    /*class Servico{

    }

    $container = $app->getContainer();
    $container['servico'] = function(){
        return new Servico;
    };

    $app->get('/servico', function(Request $request, Response $response){

        $servico = $this->get('servico');
        var_dump($servico);
        
    });  

    $container = $app->getContainer();
    $container['Home'] = function(){
        return new MyApp\controllers\Home(new MyApp\View);
    };
    $app->get('/usuario', 'Home:index' );*/


    
    /*
    $app->get('/postagens', function(Request $request, Response $response){
        $response->getBody()->write("Listagem de postagens");

        return $response;
    });    

    $app->post('/usuarios/adiciona', function(Request $request, Response $response){
        $post = $request->getParsedBody();
        return $response->getBody()->write($post['nome'] . ' - ' . $post['email']);
    }); 

    $app->put('/usuarios/atualiza', function(Request $request, Response $response){
        $post = $request->getParsedBody();

        return $response->getBody()->write($post['id'] . ' - ' . $post['nome'] . ' - ' . $post['email']);
    }); 

    $app->delete('/usuarios/remove/{id}', function(Request $request, Response $response){
        $id = $request->getAttribute('id');

        return $response->getBody()->write($id);
    }); */

    

    /*
    $app->get('/postagens2', function(){
        echo 'Listagem de postagens';
    });

    $app->get('/usuarios[/{id}]', function($request, $response){
        $id = $request->getAttribute('id');
        echo 'Listagem de usuarios ou ID:' . $id;
    });

    $app->get('/postagens[/{ano}[/{mes}]]', function($request, $response){
        $ano = $request->getAttribute('ano');
        $mes = $request->getAttribute('mes');
        echo 'Listagem de postagens. Ano:' . $ano . " mes: " . $mes;
    });

    $app->get('/lista/{itens:.*}', function($request, $response){
        $itens = $request->getAttribute('itens');
        
        var_dump(explode("/", $itens));
    });

    $app->get('/blog/postagens/{id}', function($request, $response){
        echo 'Lista postagem para um ID';
    })->setName("blog");

    $app->get('/meusite', function($request, $response){
        $retorno = $this->get("router")->pathFor("blog", ["id" => "5"]);

        echo $retorno;
    });

    $app->group('/v5', function(){
        $this->get('/usuarios', function(){
            echo ' Lisagem de usuarios';
        });

        $this->get('/postagens', function(){
            echo ' Lisagem de postagens';
        });
    });
    */
?>