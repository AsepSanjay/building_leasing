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
            $table->unsignedInteger('roles_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_telp')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('roles', function(Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('namaRole');
        });

        Schema::table('users', function(Blueprint $kolom){
            $kolom->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('roles');
    }
}
