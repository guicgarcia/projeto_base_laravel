<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable();
            $table->integer('cod_val_email')->nullable();
            $table->string('recuperar_senha')->nullable();
            $table->integer('email_val')->nullable();
            $table->string('imagem')->nullable();
            $table->integer('nivel_acesso')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('cod_val_email');
            $table->dropColumn('recuperar_senha');
            $table->dropColumn('email_val');
            $table->dropColumn('imagem');
            $table->dropColumn('nivel_acesso');
        });
    }
}
