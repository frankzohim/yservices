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
        Schema::create('needs', function (Blueprint $table) {
            $table->id();
            $table->string('services');
            $table->string('start_at');
            $table->string('data_times');
            $table->string('for_who');
            $table->string('gender');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('postal_code');
            $table->string('town');
            $table->string('email');
            $table->string('phone');
            $table->string('address');

            $table->foreignIdFor(User::class)
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
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
        Schema::dropIfExists('needs');
    }
};
