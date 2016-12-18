<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
       $this->Auth->allow('registration','index','home','login','submitAdd','logout');
        //$this->Auth->allow('index');
    }
/* 	public function home()
	{
		$this->viewBuilder()->layout('angularjs_default');
		//$this->autoRender=false;
		
	} */
	public function index()
	{
		
		
	}	
	public function registration()
	{
		$user=$this->Users->newEntity();
        if ($this->request->is('post'))
			{
				$user = $this->Users->patchEntity($user, $this->request->data,array('validate' => 'register'));
				if ($this->Users->save($user))
				{
					$this->Flash->success(__('Registration successful.'));
					return $this->redirect(array('controller'=>'Users','action'=>'login'));
				}
				$this->Flash->error(__('Unable to add the user.'));
           }
		$this->set('user',$user);
		
	}
	public function login()
	{
        if ($this->request->is('post'))
		{
            //increase password field size
			$user = $this->Auth->identify();
            if ($user) 
			{
                $this->Auth->setUser($user);
                return $this->redirect("/dashboards/index");
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }		
		
	}
	public function logout()
	{
		$this->Auth->logout();
		$this->redirect('/Users/index');
		
	}
	public function submitAdd()
	{
		
		
	}
/*End*/
}	
?>