<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('joins', function (Blueprint $table) {
            $table->id();
            $table->string("civility");
            $table->string("name");
            $table->string("username");
            $table->string("phone_number");
            $table->string("email");
            $table->string("postal_code");
            $table->string("town");
            $table->text('informations');
            $table->string("job");
            $table->string("available");
            $table->string("diploma");
            $table->string("year_of_experience");
            $table->string("cv");
             $table->string("diploma_file");

             $table->string('user_id')->nullable();
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
        Schema::dropIfExists('joins');
    }
};
