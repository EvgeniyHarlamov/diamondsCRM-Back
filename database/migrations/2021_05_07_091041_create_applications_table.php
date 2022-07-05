<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('service_type');
            $table->string('responsibility')->nullable();
            $table->unsignedBigInteger('status')->default(0);
            $table->unsignedBigInteger('questionnaire_id')->nullable();
            $table->string('sing')->nullable();
            $table->string('link')->nullable();
            $table->boolean('link_active')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('from')->default('email');

            $table->foreign('questionnaire_id')->references('id')->on('questionnaires')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('applications');
    }
}
