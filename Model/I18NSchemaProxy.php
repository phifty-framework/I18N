<?php
namespace I18N\Model;
use LazyRecord\Schema\RuntimeSchema;
use LazyRecord\Schema\RuntimeColumn;
use LazyRecord\Schema\Relationship\Relationship;
class I18NSchemaProxy
    extends RuntimeSchema
{
    const schema_class = 'I18N\\Model\\I18NSchema';
    const model_name = 'I18N';
    const model_namespace = 'I18N\\Model';
    const COLLECTION_CLASS = 'I18N\\Model\\I18NCollection';
    const MODEL_CLASS = 'I18N\\Model\\I18N';
    const PRIMARY_KEY = 'id';
    const TABLE = 'i18_ns';
    const LABEL = 'I18N';
    public static $column_hash = array (
      'id' => 1,
      'msgid' => 1,
      'msgstr' => 1,
      'lang' => 1,
    );
    public static $mixin_classes = array (
    );
    public $columnNames = array (
      0 => 'id',
      1 => 'msgid',
      2 => 'msgstr',
      3 => 'lang',
    );
    public $primaryKey = 'id';
    public $columnNamesIncludeVirtual = array (
      0 => 'id',
      1 => 'msgid',
      2 => 'msgstr',
      3 => 'lang',
    );
    public $label = 'I18N';
    public $readSourceId = 'default';
    public $writeSourceId = 'default';
    public $relations;
    public function __construct()
    {
        $this->columns[ 'id' ] = new RuntimeColumn('id',array( 
      'locales' => NULL,
      'attributes' => array( 
          'autoIncrement' => true,
          'renderAs' => 'HiddenInput',
          'widgetAttributes' => array( 
            ),
        ),
      'name' => 'id',
      'primary' => true,
      'unsigned' => true,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => true,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'autoIncrement' => true,
      'renderAs' => 'HiddenInput',
      'widgetAttributes' => array( 
        ),
    ));
        $this->columns[ 'msgid' ] = new RuntimeColumn('msgid',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 512,
        ),
      'name' => 'msgid',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 512,
    ));
        $this->columns[ 'msgstr' ] = new RuntimeColumn('msgstr',array( 
      'locales' => NULL,
      'attributes' => array( 
        ),
      'name' => 'msgstr',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'text',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
    ));
        $this->columns[ 'lang' ] = new RuntimeColumn('lang',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 12,
        ),
      'name' => 'lang',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 12,
    ));
    }
}
