<?php

use yii\db\Migration;

class m161025_235314_add_field_name_to_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'name', $this->string(100)->notNull()->after('username'));
    }

    public function down()
    {
        $this->dropColumn('user', 'name');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
