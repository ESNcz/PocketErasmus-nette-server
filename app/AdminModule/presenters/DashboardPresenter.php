<?php
/**
 * Created by PhpStorm.
 * User: herald
 * Date: 08-Aug-17
 * Time: 23:07
 */

namespace App\AdminModule\Presenters;


use App\Model\AuditLogUserFacade;
use App\Presenters\BasePresenter;
use Tracy\Debugger;
use Tracy\OutputDebugger;

class DashboardPresenter extends BaseAdminPresenter{

	public function startup(){
		parent::startup();
		$this->template->presenter_name = 'Dashboard';
		if($this->verifySuperAdminRole()){
			$this->template->iSuperadmin = true;
		}else{
			$this->template->iSuperadmin = false;
		}
	}

	public function actionTest(){
		// test
		$this->setView('default');
	}
	
	public function renderDefault(){
	
	}
}