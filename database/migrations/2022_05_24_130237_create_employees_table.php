<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->integer('nip');
            $table->string('nama');
            $table->enum('jeniskelamin',['Laki-Laki', 'Perempuan']);
            $table->string('tlahir');
            $table->string('tgllahir');
            $table->string('notelpon');
            $table->string('agama');
            $table->string('statuskawin');
            $table->string('alamat');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
