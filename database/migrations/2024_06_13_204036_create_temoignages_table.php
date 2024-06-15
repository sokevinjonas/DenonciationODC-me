<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('temoignages', function (Blueprint $table) {
            $table->id();
            $table->text('contenu')->nullable();
            $table->text('retro_action')->nullable();
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0);
            $table->integer('partage')->default(0);
            $table->string('lien_preuve')->nullable();
            $table->enum('type_preuve', ['audio', 'video', 'image'])->nullable();
            // id de du moderateur qui a fait la retroaction
            $table->foreignId('moderateur_retro_action_id')->nullable()->constrained('users');
            // id de l'utilisateur qui cree le temoignage
            $table->foreignId('user_id')->constrained('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temoignages');
    }
};
