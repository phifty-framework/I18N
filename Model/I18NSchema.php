<?php
namespace I18N\Model;

use Maghead\Schema\DeclareSchema;

class I18NSchema extends DeclareSchema
{
    public function schema()
    {
        $this->table('i18n_messages');
        $this->column('msgid')->varchar(512);
        $this->column('msgstr')->text();
        $this->column('lang')->varchar(12);
    }
}
