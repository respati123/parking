<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('permission.table_names');

        Schema::create($tableNames['permissions'], function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create($tableNames['roles'], function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create($tableNames['modules'], function(Blueprint $table){
           $table->increments('id');
           $table->string('name')->unique();
        });

        Schema::create($tableNames['users_has_roles'], function(Blueprint $table) use ($tableNames) {
           $table->integer('user_id')->unsigned();
           $table->integer('role_id')->unsigned();

           $table->foreign('user_id')
               ->references('id')
               ->on($tableNames['users'])
               ->onDelete('cascade');

           $table->primary(['user_id','role_id']);
        });

        Schema::create($tableNames['roles_'])

        Schema::create($tableNames['role_has_permissions'], function (Blueprint $table) use ($tableNames) {
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('role_id');

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['permission_id', 'role_id']);

            app('cache')->forget('spatie.permission.cache');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('permission.table_names');

        Schema::drop($tableNames['role_has_permissions']);
        Schema::drop($tableNames['model_has_roles']);
        Schema::drop($tableNames['model_has_permissions']);
        Schema::drop($tableNames['roles']);
        Schema::drop($tableNames['permissions']);
    }
}
