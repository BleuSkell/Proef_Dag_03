<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_uitslagen_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUitslagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('uitslagen', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->unsignedBigInteger('spel_id'); // Verwijzing naar de spel_id
            $table->integer('aantalpunten')->nullable(); // Aantal punten, kan leeg zijn (nullable)
            $table->timestamps(); // Timestamps voor created_at en updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('uitslagen'); // Verwijder de tabel als we deze migratie terugdraaien
    }
}
