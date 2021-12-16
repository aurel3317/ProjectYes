<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {

	include 'filename.php';
	include 'test2.php';
	  //$renderer = new PhpRenderer('C:\Users\aurel\OneDrive\Documents\ProjetYES\public');
      //return $renderer->render($response, "test2.php", $args);
	// echo $text;
     $response->getBody()->write("");
     return $response;
});

$app->post('/books', function ($request, $response) {
    $emp = json_decode($request->getBody());
    $text = $emp->test;
	$var_str = var_export($text, true);
	$var = "<?php\n\n\$text = $var_str;\n\n?>";
	file_put_contents('filename.php', $var);

	  // $renderer = new PhpRenderer('C:\Users\aurel\OneDrive\Documents\ProjetYES\public');
      // return $renderer->render($response, "test2.php", $text);
// })->setName('profile');
	// $file = 'file.txt';
	// $data = 'this is your string to write';
	// $STDERR = fopen("php://stderr", "w");
	// fwrite($STDERR, "\n".$emp->test."\n\n");
 //  	fclose($STDERR);
	
	// file_put_contents($file, $request->getBody());
	$response->getBody()->write("Hello world!");
	return $response;

});


$app->get('/API', function (Request $request, Response $response, $args) {

	include 'filename.php';
	
	  //$renderer = new PhpRenderer('C:\Users\aurel\OneDrive\Documents\ProjetYES\public');
      //return $renderer->render($response, "test2.php", $args);
	// echo $text;
     $response->getBody()->write("".$text."");
     return $response;
});
//   $(document).ready( function () {
//   function update () {
//       $.getJSON( "test2.php", function (newv) {
//         data.push( { x: newv, y: "Today" } ); // store new value
// // //     graph.setData( data );                // update the graph
//        });
//     }

//      update();
//      setInterval( update, 1000 );
//    }
 
// ->setName('profile');

$app->run();
// header("Refresh:60");

?>