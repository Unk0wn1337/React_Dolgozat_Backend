<?php

use App\Models\Recept;
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
        Schema::create('recepts', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->integer('kat_id');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->timestamps();
        });

        Recept::create([
            'nev'=>'húsleves',
            'kat_id'=>1,
            'kep_eleresi_ut' => 'valami.jpg',
            'leiras' => 'Lorem ipsum',      
        ]);
        Recept::create([
            'nev'=>'marhapörkölt',
            'kat_id'=>2,
            'kep_eleresi_ut' => 'valami.jpg',
            'leiras' => 'Lorem ipsum',      
        ]);

        Recept::create([
            'nev'=>'szárazmarhasült',
            'kat_id'=>3,
            'kep_eleresi_ut' => 'valami.jpg',
            'leiras' => 'Lorem ipsum',      
        ]);
        Recept::create([
            'nev'=>'kukából kiszedett vajaskenyér',
            'kat_id'=>4,
            'kep_eleresi_ut' => 'valami.jpg',
            'leiras' => 'Lorem ipsum',      
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepts');
    }
};
