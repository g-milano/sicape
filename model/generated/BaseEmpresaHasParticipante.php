<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('EmpresaHasParticipante', 'sicape');

/**
 * BaseEmpresaHasParticipante
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $empresa_idempresa
 * @property integer $participante_idparticipante
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseEmpresaHasParticipante extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('empresa_has_participante');
        $this->hasColumn('empresa_idempresa', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('participante_idparticipante', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}