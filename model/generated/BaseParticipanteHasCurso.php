<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ParticipanteHasCurso', 'sicape');

/**
 * BaseParticipanteHasCurso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $Participante_idParticipante
 * @property integer $Curso_idCurso
 * @property string $status
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseParticipanteHasCurso extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('participante_has_curso');
        $this->hasColumn('Participante_idParticipante', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('Curso_idCurso', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('status', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}