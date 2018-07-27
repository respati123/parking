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

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

           $table->primary(['user_id','role_id']);
        });

        Schema::create($tableNames['roles_has_modules'], function(Blueprint $table) use ($tableNames){
           $table->integer('role_id')->unsigned();
           $table->integer('modules_id')->unsigned();

           $table->foreign('role_id')
               ->references('id')
               ->on($tableNames['roles'])
               ->onDelete('cascade');

           $table->foreign('modules_id')
               ->references('id')
               ->on($tableNames['roles'])
               ->onDelete('cascade');

           $table->primary(['role_id', 'modules_id']);
        });

        Schema::create($tableNames['modules_has_permission'], function(Blueprint $table) use ($tableNames){
           $table->integer('modules_id')->unsigned();
           $table->integer('permissions_id')->unsigned();

           $table->foreign('permissions_id')
               ->references('id')
               ->on($tableNames['permissions'])
               ->onDelete('cascade');

           $table->foreign('modules_id')
               ->references('id')
               ->on($tableNames['modules'])
               ->onDelete('cascade');
        });

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
        Schema::drop($tableNames['roles_has_modules']);
        Schema::drop($tableNames['users_has_roles']);
        Schema::drop($tableNames['modules_has_permission']);
        Schema::drop($tableNames['roles']);
        Schema::drop($tableNames['permissions']);
        Schema::drop($tableNames['modules']);
    }
}
