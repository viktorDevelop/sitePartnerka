<? 
namespace app;
 // use app\vendor\libs\Router\Router;
 // use app\vendor\libs\errors\errorHandle;
 // use app\vendor\componets\menu\Menu;
 session_start();
 // include 'app/config/config.php';
 
  
 spl_autoload_register(function($clases){

 	  $file = str_replace('\\', '/', $clases).'.php';
 	if (file_exists($file) ) {
 		 include  $file;
 	}
 	  
 });
 
 
// $router = new Router;
// $router->run();
 










 