<?php
/**
 * Bootstrapping functions, essential and needed for Kefft to work together with some common helpers. 
 *
 */
 
/**
 * Default exception handler.
 *
 */
function kefftExceptionHandler($exception) {
  echo "Kefft: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('kefftExceptionHandler');
 
 
/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = KEFFT_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');

function dump($array) {
  echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}

function get_navbar($menu, $activePageId) {
	return CNavigation::GenerateMenu($menu, $activePageId);
}
