<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class EntrustSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Create table for storing roles
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to managers (Many-to-Many)
        Schema::create('manager_role', function (Blueprint $table) {
            $table->integer('manager_id')->unsigned();
            $table->integer('role_id')->unsigned();

            // $table->foreign('manager_id')->references('id')->on('managers');
                // ->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('role_id')->references('id')->on('roles');
                // ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['manager_id', 'role_id']);
        });

        // Create table for storing permissions
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('permission_role', function (Blueprint $table) {
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();

            // $table->foreign('permission_id')->references('id')->on('permissions');
                // ->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('role_id')->references('id')->on('roles');
                // ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['permission_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('managers');
        Schema::drop('permission_role');
        Schema::drop('permissions');
        Schema::drop('manager_role');
        Schema::drop('roles');
    }
}
