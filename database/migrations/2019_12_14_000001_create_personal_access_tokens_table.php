<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
return new class extends Migration
=======
class CreatePersonalAccessTokensTable extends Migration
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_access_tokens', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id();
=======
            $table->bigIncrements('id');
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
<<<<<<< HEAD
            $table->timestamp('expires_at')->nullable();
=======
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
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
        Schema::dropIfExists('personal_access_tokens');
    }
<<<<<<< HEAD
};
=======
}
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
