<?php

use yii\db\Migration;

/**
 * Class m210918_022005_criar_tabela_usuario
 */
class m210918_022005_criar_tabela_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario', [
        'id'=>$this->primaryKey(),
        'login'=>$this->string(),
        'senha'=>$this->string(),
        'nome'=>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario');
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
