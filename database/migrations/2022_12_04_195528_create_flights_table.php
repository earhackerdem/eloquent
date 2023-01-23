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
        Schema::create('flights', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->string('number');

            $table->integer('legs');

            $table->boolean('active')->default(true);

            $table->boolean('departed')->default(false);

            $table->timestamp('arrived_at');

            $table->foreignId('destination_id')
                ->constrained('destinations')
                ->cascadeOnDelete();

            $table->softDeletes();

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
        Schema::dropIfExists('flights');
    }
};
