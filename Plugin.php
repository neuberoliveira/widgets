<?php namespace Neuber\Widgets;

use Event;
use System\Classes\PluginBase;
use RainLab\Builder\Classes\StandardControlsRegistry;
use RainLab\Builder\Classes\StandardBehaviorsRegistry;
use RainLab\Builder\Classes\ControlLibrary;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'neuber.widgets::lang.plugin.name',
            'description' => 'neuber.widgets::lang.plugin.description',
            'author'      => 'Neuber Oliveira',
            'icon'        => 'icon-ship',
            'homepage'    => 'https://github.com/neuberoliveira/widgets'
        ];
    }
    
    public function boot(){
        Event::listen('pages.builder.registerControls', function($controlLibrary) {
            $controlLibrary->registerControl('iconpicker', 
                'neuber.widgets::lang.form.control_icon', 
                'neuber.widgets::lang.form.control_icon_description', 
                ControlLibrary::GROUP_WIDGETS,
                'icon-file-image-o', 
                $controlLibrary->getStandardProperties(['stretch']),
                'Neuber\Widgets\ControlDesignTimeProvider'
            );
        }, -1);
    }
    
    public function registerFormWidgets(){
        return [
            'Neuber\Widgets\FormWidgets\IconPicker' => 'iconpicker',
        ];
    }
}
