<!DOCTYPE html>
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
    $app->render("shout.html.twig");
});

$app->post('/shout', function() use ($app) {
    $message = $app->request->params('message');

    $errorList = array();
    if ((strlen($message) == 0)){
        array_push($errorList, "Message can't be empty you fool!");
    } else {
        file_put_contents("./fileput.txt", $message . "\n", FILE_APPEND); // default is overwrite
    }
    //
    if (!$errorList) {    // no errors
        $document = file_get_contents("./fileput.txt");
        $lines = explode("\n", $document);
        //print_r($lines);
        $lines_ordered = array();
        
        
        $that = count($lines) - 1;
        //echo'<br>' . $that;
        
        for($q = count($lines) - 1; $q >= 1 ; $q--){
            array_push($lines_ordered, $lines[$q]);
        }
        print_r($lines_ordered);
        $app->render("shout.html.twig", array('messageList' => $lines_ordered));        
    } else {              // empty message
        $app->render("shout.html.twig", array('error' => "Message can't be empty you fool!", 'messageList' => $lines));
    }
});


$app->run();