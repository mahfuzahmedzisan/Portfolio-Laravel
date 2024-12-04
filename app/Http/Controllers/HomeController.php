<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id(); // Primary key (auto-incrementing ID)
            $table->string('name'); // Project name
            $table->text('description')->nullable(); // Optional project description
            $table->timestamp('start_date')->nullable(); // Start date of the project
            $table->timestamp('end_date')->nullable(); // End date of the project
            $table->string('img_url')->default("https://via.placeholder.com/300x200?text=Web+Development+Bootcamp"); // Default image URL
            $table->string("project_url")->nullable(); // Optional project URL
            $table->unsignedBigInteger('user_id'); // Foreign key for the user who created the project
            $table->timestamps(); // Adds created_at and updated_at columns
            $table->softDeletes(); // Adds deleted_at column for soft deletes

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
