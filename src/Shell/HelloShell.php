<?php 
namespace App\Shell;

use Cake\Console\Shell;

class HelloShell extends Shell{


	public function initialize(){
		parent::initialize();
		$this->loadModel('ServiceSubscribers');
	}

	public function  main(){
		$this->out('Hello World.');
	}

	public function showSubscriptions()
	{
		$subscriptions = $this->ServiceSubscribers->find()
												  ->contain('ServiceCategoryItems')
												  ->toArray();
		$this->out(print_r($subscriptions, true));
	}
}