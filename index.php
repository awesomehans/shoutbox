<?php

require_once 'vendor/autoload.php';

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');

$app->get('/shout', function() use ($app) {
    $app->render('shout.html.twig');
});

$app->post('/shout', function() use ($app) {
    $message = $app->request->params('message');

    if ((strlen($message) == 0)){
        $error = 'Message can not be empty you fool!';
    } else {
        $error = '';
        file_put_contents('./fileput.txt', $message . "\n", FILE_APPEND); // default is overwrite
    }
    
    $document = file_get_contents('./fileput.txt');
    $lines = explode("\n", $document);
    
    $count = 0;
    $lines_ordered = array();
    
    /*
    echo 'count($lines) - 2 = ' . (count($lines) - 2) . '<br>';
    echo 'print_r($lines) = '; 
    print_r($lines) ;
    echo '<br>';
    */
    
    for($q = count($lines) - 2; $q > -1 ; $q--){
        $count ++;
        //echo '$q = ' . $q . '<br>';
        if ($count > 10) {
            break;
        }
        array_push($lines_ordered, $lines[$q]);
    }
    $app->render('shout.html.twig', array('messageList' => $lines_ordered, 'error' => $error));
});

$app->get('/', function() {
    echo "This is the index page";
});

$app->run();