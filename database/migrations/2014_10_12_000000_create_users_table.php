<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');//用户名字
            $table->string('email')->unique();//用户邮箱,邮箱为登录主要手段
            $table->string('password');//用户密码
            $table->tinyInteger('sex')->default(0);//用户性别:0未知,1男,2女
            $table->string('mobile',18)->default('');//用户手机号
            $table->string('qq',20)->default('');//用户qq号
            $table->string('webchat',50)->default('');//用户微信号
            $table->tinyInteger('enabled')->default(0);//账号禁用状态:0启用,1禁用
            $table->integer('department_id')->nullable();//用户所在部门
            $table->rememberToken();//记住登录状态的机制
            $table->timestamps();//创建和更新的时间戳
            $table->softDeletes();//软删除
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
