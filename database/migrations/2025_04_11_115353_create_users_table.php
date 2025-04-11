<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // Creates an auto-incrementing ID column
            $table->string('name');  // Creates a 'name' column
            $table->string('email')->unique();  // Creates a 'email' column with unique constraint
            $table->timestamp('email_verified_at')->nullable();  // Optional column for email verification timestamp
            $table->string('password');  // Creates a 'password' column
            $table->rememberToken();  // Adds a 'remember_token' column for session management
            $table->timestamps();  // Adds 'created_at' and 'updated_at' timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');  // Drops the 'users' table if it exists
    }
}
