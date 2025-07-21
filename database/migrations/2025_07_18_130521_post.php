<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 public function up()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->string('title')->after('id');
        $table->text('body')->after('title');
        $table->foreignId('user_id')->after('body')->constrained()->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->dropForeign(['user_id']);
        $table->dropColumn(['title', 'body', 'user_id']);
    });
}
};
