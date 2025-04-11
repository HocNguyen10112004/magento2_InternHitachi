<?php

namespace Week2\PluginInterceptor\Plugin;

class Example
{

	public function beforeSetTitle(\Week2\PluginInterceptor\Controller\Index\Index $subject, $title)
	{
		$title = $title . " to ";
		echo __METHOD__ . "</br>";

		return [$title];
	}


	public function afterGetTitle(\Week2\PluginInterceptor\Controller\Index\Index $subject, $result)
	{

		echo __METHOD__ . "</br>";

		return '<h1>'. $result . 'Mageplaza.com' .'</h1>';

	}


	public function aroundGetTitle(\Week2\PluginInterceptor\Controller\Index\Index $subject, callable $proceed)
	{

		echo __METHOD__ . " - Before proceed() </br>";
		 $result = $proceed();
		echo __METHOD__ . " - After proceed() </br>";


		return $result;
	}

}