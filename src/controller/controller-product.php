<?php
/**
 * Class ProductController
 */
class ProductController implements Controller{

	public function action() {
		/**
		 * @var $model
		 */
		$model = ModelCreator::getModel('SingleProductModel');
		$result =  $model->getProductById();

		/** @var ProductView $view */
		$view = ViewCreator::getView('View');
		$view->render('product.php', $result);
	}
}
?>