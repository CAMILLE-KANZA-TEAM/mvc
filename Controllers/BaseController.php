<?php


#use \Twig_Loader_Filesystem;
#use \Twig_Environment;


/**
 * 
 * 
 */
class BaseController {


	protected $loader;

    protected $twig;

    public function __construct()
    {
    	//Twig_Autoloader::register();
        $this->loader = new \Twig\Loader\FilesystemLoader(APP_DIRECTORY . 'Views');
        $this->twig = new \Twig\Environment($this->loader);
    }

}