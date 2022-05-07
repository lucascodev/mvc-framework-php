<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['index'] = array(
			'route' => '/',
			'controller' => 'IndexController',
			'action' => 'index'
		);

		$routes['about'] = array(
			'route' => '/about',
			'controller' => 'IndexController',
			'action' => 'about'
		);

		$this->setRoutes($routes);
	}

}

?>