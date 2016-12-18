<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
class DashboardsController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
		$this->Auth->allow();
    }
	public function index()
	{
		$this->viewBuilder()->layout();
		$this->autoRender=false;
		//pr($this->Auth->User());
		echo 'mmt';
	}	

/*End*/
}	
?>