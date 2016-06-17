<?php
namespace I18N\Controller;
use CRUD\Controller\ToolbarItemController;

class I18NFilterToolbarItemController extends ToolbarItemController
{
    public function controlAction() {
        // get languages dictionary and render the fitler template
        return $this->render('@I18N/lang_filter.html',array(
            'Locale' => kernel()->locale,
        ));
    }
}



