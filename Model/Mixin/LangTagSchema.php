<?php
namespace I18N\Model\Mixin;
use LazyRecord\Schema\MixinSchemaDeclare;

class LangTagSchema extends MixinSchemaDeclare
{
    public function schema()
    {
        foreach( kernel()->locale->available() as $code => $label ) {
            $this->column($code)
                ->boolean()
                ->default(false)
                ->label( $label )
                ->renderAs('CheckboxInput');
        }
    }
}
