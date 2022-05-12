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
        Schema::create('wedding_gifts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guest_id');
            $table->tinyInteger('type')->default(1)->comment('1 = uang, 2 = barang');
            $table->decimal('amount', 10, 2)->default(0)->nullable();
            $table->string('name_of_goods')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }
};
