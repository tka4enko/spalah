<?php
/**
 * Class IndexController
 */
class IndexController implements Controller
{

	public function action()
	{
		/** @var ProductModel $model */
		$model = ModelCreator::getModel('ProductModelIndex');
		$result = $model->getProductById(10);

		/** @var View $view */
		$view = ViewCreator::getView('View');
		$view->render('index.php', $result);
	}
}
?>