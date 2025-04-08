<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Ajustar la tabla "vendors"
        Schema::table('vendors', function (Blueprint $table) {
            // SIMPLEMENTE HACEMOS phone Y email nullable
            // sin dropUnique, porque no existen índices 'unique' en tu DB.
            $table->string('phone', 20)->nullable()->change();
            $table->string('email', 100)->nullable()->change();
        });

        // Ajustar la tabla "restaurants"
        Schema::table('restaurants', function (Blueprint $table) {
            // phone y email -> nullable
            $table->string('phone', 20)->nullable()->change();
            $table->string('email', 100)->nullable()->change();
        });
    }

    public function down()
    {
        // Revertir los cambios si lo deseas. Se vuelve a NOT NULL 
        // (y podrías re-crear índices, si existían).
        
        Schema::table('vendors', function (Blueprint $table) {
            $table->string('phone', 20)->nullable(false)->change();
            $table->string('email', 100)->nullable(false)->change();
            // Si quisieras re-crear un índice UNIQUE (que no existe a día de hoy),
            // podrías hacer: $table->unique('phone', 'vendors_phone_unique');
            //                $table->unique('email', 'vendors_email_unique');
        });

        Schema::table('restaurants', function (Blueprint $table) {
            $table->string('phone', 20)->nullable(false)->change();
            $table->string('email', 100)->nullable(false)->change();
            // Igual que arriba, re-crea índices si los necesitas.
        });
    }
};
