<?php
/**
 * Created by PhpStorm.
 * User: herald
 * Date: 14-Feb-18
 * Time: 11:45
 */

namespace App\Model;

use Kdyby\Doctrine\EntityManager;
use Nette\ArgumentOutOfRangeException;

class AuditLogUserFacade extends BaseFacade{

	// User META actions (sign in, out, change psswd, name, settings...)
	const
		USER_ACTION_SIGN_IN = 1,
		USER_ACTION_SIGN_OUT = 2
	;
	// POI related actions
	const
		USER_ACTION_ADD_POI = 10,
		USER_ACTION_EDIT_POI = 11,
		USER_ACTION_DELETE_POI = 12,
		USER_ACTION_DISABLE_POI = 13,
		USER_ACTION_ENABLE_POI = 14
	;
	// category related actions
	const
		USER_ACTION_ADD_CATEGORY = 20,
		USER_ACTION_EDIT_CATEGORY = 21,
		USER_ACTION_DELETE_CATEGORY = 22,
		USER_ACTION_DISABLE_CATEGORY = 23,
		USER_ACTION_ENABLE_CATEGORY = 24
	;
	// subcategory related actions
	const
		USER_ACTION_ADD_SUBCATEGORY = 30,
		USER_ACTION_EDIT_SUBCATEGORY = 31,
		USER_ACTION_DELETE_SUBCATEGORY = 32,
		USER_ACTION_DISABLE_SUBCATEGORY = 33,
		USER_ACTION_ENABLE_SUBCATEGORY = 34
	;
	// news/homepage related actions
	const
		USER_ACTION_ADD_WELCOME = 40,
		USER_ACTION_EDIT_WELCOME = 41,
		USER_ACTION_DELETE_WELCOME = 42,
		USER_ACTION_DISABLE_WELCOME = 43,
		USER_ACTION_ENABLE_WELCOME = 44,
		USER_ACTION_ADD_NEWS = 45,
		USER_ACTION_EDIT_NEWS = 46,
		USER_ACTION_DELETE_NEWS = 47,
		USER_ACTION_DISABLE_NEWS = 48,
		USER_ACTION_ENABLE_NEWS = 49
	;

	// guides related actions

	// user related actions
	const
		USER_ACTION_ADD_USER = 100,
		USER_ACTION_EDIT_USER = 101,
		USER_ACTION_DISABLE_USER = 102,
		USER_ACTION_ENABLE_USER = 103,
		USER_ACTION_DELETE_USER = 104
	;

	private $userFacade;

	public function __construct(EntityManager $em, UserFacade $userFacade){
		parent::__construct($em, LogUserActivityEntity::class);
		$this->userFacade = $userFacade;
	}

	public function convertToArr($entity){
		// TODO: Implement convertToArr() method.
	}

	public function log($user_id, $action, $context = null){
		if(empty($user_id) || empty($action)){
			throw new ArgumentOutOfRangeException('user_id or action can not be null');
		}
		// ulozenie do DB
		$record = new LogUserActivityEntity();
		$record->setUser($this->userFacade->getEntity($user_id));
		$record->setActionId($action);
		$record->setContext($context);
		$record->setDatetime(new \DateTime());
		$this->saveNow($record);
	}

}