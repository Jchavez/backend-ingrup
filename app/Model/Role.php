<?php
App::uses('AppModel', 'Model');
/**
 * role Model
 *
 * @property User $User
 */
class Role extends AppModel { 
	public $actsAs = array('Acl' => array('type' => 'requester'));

    public function parentNode() {
        return null;
    }

}
