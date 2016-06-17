<?php
namespace I18N\Model;
use LazyRecord\BaseCollection;
class I18NCollectionBase
    extends BaseCollection
{
    const SCHEMA_PROXY_CLASS = 'I18N\\Model\\I18NSchemaProxy';
    const MODEL_CLASS = 'I18N\\Model\\I18N';
    const TABLE = 'i18_ns';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
}
