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
    Schema::create('tvproductions', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('title')->unique();
        $table->string('cover_photo');
        $table->string('file');
        $table->text('description')->nullable();
        $table->integer('views')->default(0);
        $table->integer('downloads')->default(0);
        $table->string('type')->nullable();
        $table->string('country')->nullable();
        $table->date('release_date')->nullable();
        $table->string('director')->nullable();
        $table->string('production_company')->nullable();
        $table->string('cast')->nullable();
        $table->unsignedBigInteger('category_id')->nullable();
        $table->unsignedBigInteger('parent_id')->nullable();
        $table->timestamps();

        $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('set null');

        $table->foreign('parent_id')
            ->references('id')
            ->on('tvproductions')
            ->onDelete('set null');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tvproductions');
    }
};
