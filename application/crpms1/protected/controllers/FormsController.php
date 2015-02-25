<?php

class FormsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'expression'=>'isset($user->account_type) && ($user->account_type==="admin" | "encoder" | "supervisor")'
			),
			array('deny',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('create'),
				'expression'=>'isset($user->account_type) && ($user->account_type==="guest")'
			),
			array('deny', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'expression'=>'isset($user->account_type) && ($user->account_type==="guest" || "encoder")'
			),
			array('deny', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'expression'=>'isset($user->account_type) && ($user->account_type==="encoder" | "guest" | "supervisor")'
			),
			array('deny',  // deny all users
				'expression'=>'isset($user->account_type) && ($user->account_type==="")'
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Forms;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Forms']))
		{
		
		$model->attributes=$_POST['Forms'];
			
				
			$rnd = rand(0,9999);  // generate random number between 0-9999
			$model->attributes=$_POST['Forms'];
			
			$uploadedFile=CUploadedFile::getInstance($model,'forms_attachment');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
            $model->forms_attachment = $fileName;

			if($model->save())
			{
			$uploadedFile->saveAs(Yii::app()->basePath.'/../images/'.$fileName);  // image will uplode to rootDirectory/banner/
			$this->redirect(array('view','id'=>$model->id));
			}
		
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Forms']))
		{
			$model->attributes=$_POST['Forms'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	 public function actionDisplaySavedImage()
{
    $model->Forms=Yii::app()->urlManager->createUrl(
	'forms/view',                        
	array(                                
	'id'=>$model->Forms));
 
    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Content-Transfer-Encoding: binary');
    header('Content-length: '.$model->file_size);
    header('Content-Type: '.$model->file_type);
    header('Content-Disposition: attachment; filename='.$model->file_name);
 
        echo $model->file_content;
}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Forms');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Forms('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Forms']))
			$model->attributes=$_GET['Forms'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Forms::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	public function actionDownload()
	{  
	//find the last uploaded file    
	$criteria=new CDbCriteria;
	//$criteria->order = 'forms_id DESC';  
	//$criteria->limit = '1';  
	$downloads= Forms::model()->findAll($criteria);  
	foreach ($downloads as $download):    
	$path = Yii::app()->request->hostInfo . Yii::app()->request->baseURL . '/images/' . $download->forms_attachment;  
	endforeach;  if(file_exists($path))  {    
	return Yii::app()->getRequest()->sendFile('myfile.pdf', @file_get_contents($path));  }
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='forms-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
