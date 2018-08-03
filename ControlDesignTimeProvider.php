<?php namespace Neuber\Widgets;
use RainLab\Builder\Widgets\DefaultControlDesignTimeProvider;

class ControlDesignTimeProvider extends DefaultControlDesignTimeProvider {
	public function __construct(){
		$this->defaultControlsTypes[] = 'iconpicker';
	}
}