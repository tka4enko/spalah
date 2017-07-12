<?php

/**
 * Class ProductListController
 */
class ProductListController implements Controller{

	public function action() {
		$model = ModelCreator::getModel('ProductList');
		$result['product_list'] =  $model->getProductList();
		$result['product_count'] =  $model->getCountProduct();
		/** @var View $view */
		$view = ViewCreator::getView('View');
		$view->render('productlist.php', $result);
	}
}
?>