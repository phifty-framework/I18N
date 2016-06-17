<?php
namespace I18N\Controller;
use Phifty\Controller;

class APIController extends Controller
{

    /**
     * Return available languages
     */
    public function getLanguagesAction() 
    {
        return $this->toJson(kernel()->locale->langList);
    }


    /**
     * Return current language (code, name)
     */
    public function getCurrentLanguageAction()
    {
        return $this->toJson(array( 
            'code' => kernel()->locale->current,
            'name' => kernel()->locale->currentName(),
        ));
    }
}



