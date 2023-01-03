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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('source');
            $table->string('sourceIdentityId');
            $table->string('referenceId');
            $table->string('referenceType');
            $table->string('state');
            $table->string('reportType');
            $table->string('message');
            $table->string('reportId');
            $table->string('referenceResourceId');
            $table->string('referenceResourceType');            
           
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
        Schema::dropIfExists('reports');
    }
};
