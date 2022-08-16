<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formfranchises', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');

            $table->text('research');
            $table->string('civility');
            $table->string('name');
            $table->string('surname');
            $table->string('phone');
            $table->string('email');
            $table->text('adresse');
            $table->string('postal_code');
            $table->string('city');
            $table->text('occupation');
            $table->text('knowledge');
            $table->string('town');
            $table->text('capital');
            $table->longText('description');
            $table->boolean('news');
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
        Schema::dropIfExists('formfranchises');
    }
};
