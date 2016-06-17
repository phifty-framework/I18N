<?php
namespace I18N\Model;
use LazyRecord\Schema\SchemaDeclare;

class I18NSchema extends SchemaDeclare
{
    function schema()
    {
        $this->column('msgid')->varchar(512);
        $this->column('msgstr')->text();
        $this->column('lang')->varchar(12);
    }
}


