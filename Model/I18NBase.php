<?php
namespace I18N\Model;
use LazyRecord\Schema\SchemaLoader;
use LazyRecord\Result;
use SQLBuilder\Bind;
use SQLBuilder\ArgumentArray;
use PDO;
use SQLBuilder\Universal\Query\InsertQuery;
use LazyRecord\BaseModel;
class I18NBase
    extends BaseModel
{
    const SCHEMA_CLASS = 'I18N\\Model\\I18NSchema';
    const SCHEMA_PROXY_CLASS = 'I18N\\Model\\I18NSchemaProxy';
    const COLLECTION_CLASS = 'I18N\\Model\\I18NCollection';
    const MODEL_CLASS = 'I18N\\Model\\I18N';
    const TABLE = 'i18_ns';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
    const FIND_BY_PRIMARY_KEY_SQL = 'SELECT * FROM i18_ns WHERE id = :id LIMIT 1';
    public static $column_names = array (
      0 => 'id',
      1 => 'msgid',
      2 => 'msgstr',
      3 => 'lang',
    );
    public static $column_hash = array (
      'id' => 1,
      'msgid' => 1,
      'msgstr' => 1,
      'lang' => 1,
    );
    public static $mixin_classes = array (
    );
    protected $table = 'i18_ns';
    public $readSourceId = 'default';
    public $writeSourceId = 'default';
    public function getSchema()
    {
        if ($this->_schema) {
           return $this->_schema;
        }
        return $this->_schema = SchemaLoader::load('I18N\\Model\\I18NSchemaProxy');
    }
    public function getId()
    {
            return $this->get('id');
    }
    public function getMsgid()
    {
            return $this->get('msgid');
    }
    public function getMsgstr()
    {
            return $this->get('msgstr');
    }
    public function getLang()
    {
            return $this->get('lang');
    }
}
