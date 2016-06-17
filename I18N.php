<?php
namespace I18N;
use I18N\Controller\I18NFilterToolbarItemController;

use Phifty\Bundle;

class I18N extends Bundle 
{

    public function assets() {
        return array('i18nbundle');
    }

    public function init()
    {
        $this->route('/=/i18n/languages', 'APIController:getLanguages');
        $this->route('/=/i18n/current_language', 'APIController:getCurrentLanguage');
        $this->kernel->event->register('phifty.crud.collection_filter',function($handler,$collection) {

            if ( $lang = $handler->request->param('_filter_lang') ) {
                $support = $handler->getModel()->getColumn('lang')
                        && isset($handler->bundle) 
                        && $handler->bundle->config('with_lang');

                if ( $support ) {
                    $collection->where()->equal('lang', $lang);
                }
            }
        });

        $this->kernel->event->register('phifty.crud.list_column_before',function($handler) {
            $support = $handler->getModel()->getColumn('lang')
                        && isset($handler->bundle) 
                        && $handler->bundle->config('with_lang');
            if ($support) {
                $handler->listMiddleColumns[] = 'lang';
            }
        });

        $this->kernel->event->register('phifty.crud.toolbar_init', function($handler) {
            $support = $handler->getModel()->getColumn('lang')
                        && isset($handler->bundle) 
                        && $handler->bundle->config('with_lang');
            if ( $support ) {
                $handler->addToolbarItem(new I18NFilterToolbarItemController);
            }
        });
    }
}

