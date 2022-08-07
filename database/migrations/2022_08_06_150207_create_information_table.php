<?php

use App\Models\agency;
use App\Models\User;
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
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                ->constrained()
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreignIdFor(agency::class)
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->string('type');
            $table->string('available');
            $table->string('distance');
            $table->string('town');
            $table->string('diploma');
            $table->string('year_of_experience');
            $table->string('cv');
            $table->string('file_diploma');
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
        Schema::dropIfExists('informations');
    }
};