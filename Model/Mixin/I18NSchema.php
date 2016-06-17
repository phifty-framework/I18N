<?php
namespace I18N\Model\Mixin;
use LazyRecord\Schema\MixinSchemaDeclare;

class I18NSchema extends MixinSchemaDeclare
{
    public function schema()
    {
        $this->column('lang')
            ->varchar(12)
            ->validValues(function() {
                return array_flip( kernel()->locale->available() );
            })
            ->label('語言')
            ->default( function() {
                $bundle = \I18N\I18N::getInstance();
                if ($lang = $bundle->config('default_lang') ) {
                    return $lang;
                }
                return kernel()->locale->getDefault();
            })
            ->renderAs('SelectInput',array(
                'allow_empty' => true,
            ))
            ;
    }
}
