<?php

namespace I18N\Model\Mixin;

use Maghead\Schema\MixinDeclareSchema;

class LangTagSchema extends MixinDeclareSchema
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
