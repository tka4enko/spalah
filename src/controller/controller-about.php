<?php

/**
 * Class AboutController
 */
class AboutController implements Controller{

	public function action() {
		/**
		 * @var $model
		 */
		$model = ModelCreator::getModel('AboutModel');
		$result =  $model->getContent();

		/** @var AboutView $view */
		$view = ViewCreator::getView('View');
		$view->render('about.php', $result);

	}
}
?>