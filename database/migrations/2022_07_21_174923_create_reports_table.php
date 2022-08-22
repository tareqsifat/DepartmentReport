<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
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
            $table->integer('month')->nullable();
            $table->integer('year')->nullable();
            $table->integer('computer_number')->nullable();
            $table->integer('computer_present')->nullable();
            $table->integer('mobile_number')->nullable();
            $table->integer('mobile_present')->nullable();
            $table->integer('word_number')->nullable();
            $table->integer('word_present')->nullable();
            $table->integer('excel_number')->nullable();
            $table->integer('excel_present')->nullable();
            $table->integer('power_number')->nullable();
            $table->integer('power_present')->nullable();
            $table->integer('facebook_number')->nullable();
            $table->integer('facebook_present')->nullable();
            $table->integer('twitter_number')->nullable();
            $table->integer('twitter_present')->nullable();
            $table->integer('blog_number')->nullable();
            $table->integer('blog_present')->nullable();
            $table->integer('wiki_number')->nullable();
            $table->integer('wiki_present')->nullable();
            $table->integer('online_rule_number')->nullable();
            $table->integer('online_rule_present')->nullable();
            $table->integer('online_security_number')->nullable();
            $table->integer('online_security_present')->nullable();
            $table->integer('photoshop_number')->nullable();
            $table->integer('photoshop_present')->nullable();
            $table->integer('illustrator_number')->nullable();
            $table->integer('illustrator_present')->nullable();
            $table->integer('video_number')->nullable();
            $table->integer('video_present')->nullable();
            $table->integer('web_number')->nullable();
            $table->integer('web_present')->nullable();
            $table->integer('app_number')->nullable();
            $table->integer('app_present')->nullable();
            $table->integer('internet_number')->nullable();
            $table->integer('internet_present')->nullable();
            $table->integer('is_archive')->default(0);

            $table->string('creator')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->default(1);
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
}
