<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
class AjaxController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
       //$this->Auth->allow('*');
        $this->Auth->allow('geoCity','get_web_page');
    }

	public function geoCity()
	{
		//$this->viewBuilder()->layout(false);
		//$this->autoRender=false;
		
		if($this->request->is('ajax'))
		{
			$search_test=$this->request->data['search_text'];
			//$url ="https://maps.googleapis.com/maps/api/place/autocomplete/json?input=$search_test&types=(cities)&components=country:in&key=AIzaSyBSlJqwEnJSwa_kxLySgPEt8QK3nxG74pk";
			$url ="https://maps.googleapis.com/maps/api/place/autocomplete/json?input=$search_test&types=(cities)&key=AIzaSyBSlJqwEnJSwa_kxLySgPEt8QK3nxG74pk";
			$responce=$this->get_web_page($url);
			//$result=array('description'=>null,'place_id'=>null);
			$result=array();
			if(isset($responce) && !empty($responce))
			{	
				foreach($responce['predictions'] as $key=>$location)
				{
					$result[$key]['description']=$location['description'];
					$result[$key]['place_id']=$location['place_id'];
				}
			}
			$this->set(compact('result'));
			//pr($loc);
			//$data=json_encode($result);
			//echo $data;
			//pr($responce['predictions']);
			//print_r($loc['local']);
		}
		
	}

	public function get_web_page($url) 
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$response = curl_exec($ch);
		curl_close($ch);
		$response_a = json_decode($response,true);
		return $response_a;
	}
/*End*/
}	
?>