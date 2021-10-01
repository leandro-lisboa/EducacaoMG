<?php

use yii\db\Migration;

/**
 * Class m210918_025406_criar_tabela_escola
 */
class m210918_025406_criar_tabela_escola extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('escola', [
        'id'=>$this->primaryKey(),
        'nome'=>$this->string(),
        'telefone'=>$this->string(),
        'email'=>$this->string(),
        'usuario_id'=>$this->integer()
        ]);
        $this->addForeignKey('usuario_fk', 'escola', 'usuario_id', 'usuario', 'id', 'restrict');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('usuario_fk', 'escola');
        $this->dropTable('escola');
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
