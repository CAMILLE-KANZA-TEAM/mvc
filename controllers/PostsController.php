<?php

/**
 * 
 * 
 */
class PostsController extends BaseController {


	// Initialisation du contructeur par défaut
	public function __construct()
    {
    	parent::__construct();
   	}

	// Page d'accueil
	public function listing($params=array()) {

        $postInstance = new Posts();//
        $listPosts = $postInstance->getPosts();

		// on choisi la template à appeler
		$template = $this->twig->load('posts/listing.html');

		// Puis on affiche avec la méthode render
		echo $template->render([
            'resPosts' => $listPosts,
            'title'    => 'Page listing'
        ]);
	}

	public function detail($id) {

        $postInstance = new Posts();//
        $detailPost = $postInstance->getPostsById($id);

		// on choisi la template à appeler
		$template = $this->twig->load('posts/detail.html');

		// Puis on affiche avec la méthode render
		echo $template->render([
            'post' => $detailPost,
            'title'    => 'Détail du post'
        ]);
	}

}