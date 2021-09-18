<?php

use yii\db\Migration;

/**
 * Class m210918_025532_criar_tabela_organizador
 */
class m210918_025532_criar_tabela_organizador extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('organizador', [
        'id'=>$this->primaryKey(),
        'nome'=>$this->string(),
        'cargo'=>$this->string(),
        'escola_id'=>$this->integer()
        ]);
        $this->addForeignKey('escola_fk', 'organizador', 'escola_id', 'escola', 'id', 'restrict');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('escola_fk', 'organizador');
        $this->dropTable('organizador');
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
