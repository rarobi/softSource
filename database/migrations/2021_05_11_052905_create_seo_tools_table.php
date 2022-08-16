<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_tools', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->longText('google_analytics_script')->nullable();
            $table->longText('website_meta_keywords')->nullable();
            $table->longText('facebook_comments_script')->nullable();
            $table->string('site_name')->nullable();
            $table->longText('privacy')->nullable();
            $table->longText('site_map')->nullable();

            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('is_archive')->default(0);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
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
        Schema::dropIfExists('seo_tools');
    }
}
