<?php

namespace I18N\Action;

use ActionKit;

class ChooseLang extends \ActionKit\Action
{
    function schema() 
    {
        $this->param('lang');
    }

    function run()
    {
        $langName = $this->arg('lang');
        $lang = kernel()->locale;
        $lang->speak( $langName );
        return $this->success( __('Langauge changed! I can speak %1' , _($langName) ));
    }
}



?>
