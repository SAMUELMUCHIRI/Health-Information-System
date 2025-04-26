<?php

use App\Models\User;
use App\Models\Client;
use App\Models\Program;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('client_programs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Program::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Client::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_programs');
    }
};
