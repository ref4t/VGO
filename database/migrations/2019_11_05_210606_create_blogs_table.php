<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blog_title',191)->unique();
            $table->string('slug',191)->unique();
            $table->string('author_name',191);
            $table->string('location',191)->nullable();
            $table->text('blog_short_description');
            $table->text('blog_description')->nullable();
            $table->string('blog_home_page_photo',191);
            $table->string('blog_list_photo',191);
            $table->string('profile_photo',191);
            $table->tinyInteger('status')->default('1');
            $table->Integer('views')->default('0');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
