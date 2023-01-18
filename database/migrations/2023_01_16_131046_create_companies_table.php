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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default('Laravel Pos');
            $table->string('company_address')->default('laravel Pos Address');
            $table->string('company_phone')->default('+880 1711241128');
            $table->string('company_email')->default('laravel@laravel.gm');
            $table->string('company_fax')->default('+880 01457848');
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
        Schema::dropIfExists('companies');
    }
};
