<?php
namespace porcelanosa\yii2\galleryManager\migrations;

use yii\db\Schema;
use yii\db\Migration;

class m140930_003227_gallery_manager extends Migration
{
    public $tableName = '{{%gallery_image}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable(
            $this->tableName,
           [
                'id' => Schema::TYPE_PK,
                'type' => Schema::TYPE_STRING,
                'ownerId' => Schema::TYPE_STRING . ' NOT NULL',
                'rank' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
                'name' => Schema::TYPE_STRING,
                'description' => Schema::TYPE_TEXT
            ], $tableOptions
        );
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
