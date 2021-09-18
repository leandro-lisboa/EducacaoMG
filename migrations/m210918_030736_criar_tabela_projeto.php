<?php

use yii\db\Migration;

/**
 * Class m210918_030736_criar_tabela_projeto
 */
class m210918_030736_criar_tabela_projeto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('projeto', [
        'id'=>$this->primaryKey(),
        'nome'=>$this->string(),
        'escola_id'=>$this->integer(),
        'data'=>$this->string(),
        'organizador_id'=>$this->integer(),
        'anexo'=>$this->string()
        ]);
        $this->addForeignKey('escola_f_k', 'projeto', 'escola_id', 'escola', 'id', 'restrict');
        $this->addForeignKey('organizador_fk', 'projeto', 'organizador_id', 'organizador', 'id', 'restrict');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('escola_f_k', 'projeto');
        $this->dropForeignKey('organizador_fk', 'projeto');
        $this->dropTable('projeto');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210918_015943_usuario cannot be reverted.\n";

        return false;
    }
    */
}
