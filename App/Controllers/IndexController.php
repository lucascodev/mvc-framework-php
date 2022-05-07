<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;
use App\Models\Users;

class IndexController extends Action
{

	public function index()
	{
		$users = Container::getModel('Users');

		$user = $users->getAll();
		$this->view->users = $user;

		$this->render('index', 'white');
	}

	public function about()
	{
		$this->render('about', 'white');
	}
}
