<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function validationRegister(Validator $validator)
    {
	 return $validator
            ->notEmpty('email', 'A email is required')
            ->email('email', 'must be a valid mail')
            ->lengthBetween('email',[10,50],'range between 10 to 20')
			->add('email', [
	            	'unique' => [
	            		'rule' => ['validateUnique', ['scope' => 'email']],
	            		'provider' => 'table',
	            		'message' => 'This email is already registered in our db'
	            	]
	            ])
			->notEmpty('password', 'A password is required')	
			->alphaNumeric('password', 'password must be alpha numeric ')
            ->lengthBetween('password',[5,10],'range between 5 to 10')
			->notEmpty('conform_password', 'A re-enter password is required')			
			->sameAs('conform_password','password','both password must be equal')
			->notEmpty('terms', 'Terms is required')
			;		
		
	
	}
}

?>