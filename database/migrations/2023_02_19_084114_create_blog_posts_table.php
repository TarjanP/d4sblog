<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
			
			$table->text('title');
            $table->text('body');
            $table->text('user_name');
			$table->text('tag');
			
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
?>