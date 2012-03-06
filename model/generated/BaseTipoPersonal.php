<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TipoPersonal', 'sicape');

/**
 * BaseTipoPersonal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idtipo_personal
 * @property string $nombre
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTipoPersonal extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_personal');
        $this->hasColumn('idtipo_personal', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('nombre', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}