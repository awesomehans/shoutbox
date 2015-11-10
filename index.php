<?php

require_once 'vendor/autoload.php';

define('DATA_FILE', './fileput.txt');

$app = new \Slim\Slim(array('view' => new \Slim\Views\Twig()));

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
        $error = 'Message can\'t be empty you fool!';
    } else {
        $error = '';
        if (file_exists(DATA_FILE)){
            file_put_contents(DATA_FILE, "\n" . $message, FILE_APPEND); // if the file exists we need a new line
        } else {
            file_put_contents(DATA_FILE, $message, FILE_APPEND); // if the file doesn't exist we don't need a new line
        }
    }
    
    $lines_ordered = array();
    if (file_exists(DATA_FILE)){
        $lines = file(DATA_FILE);

        $count = 0;
        for($q = count($lines) - 1; $q > -1 ; $q--){
            $count ++;
            if ($count > 10) {
                break;
            }
            array_push($lines_ordered, $lines[$q]);
        }
    }
    $app->render('shout.html.twig', array('messageList' => $lines_ordered, 'error' => $error));
});

$app->get('/', function() use ($app){
    $app->redirect('/shout');
});

$app->run();