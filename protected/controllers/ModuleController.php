<?php


class ModuleController extends Controller
{
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('getlist','getmodulemanagementui'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
		
	public function actionGetList()
	{		
		echo '{"result":"test"}';		
		Yii::app()->end();
	}
	
	public function actionGetModuleManagementUI()
	{
		$this->render('management_ui');
	}
}