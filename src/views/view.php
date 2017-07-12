<?php

/**
 * Class View
 */
class View
{

	public function render($template, array $variables)
	{
		require __DIR__ . '/../render/' . $template;

		die();
	}

}
?>