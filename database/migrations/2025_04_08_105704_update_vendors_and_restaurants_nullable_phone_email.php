<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // 1. Ajustar la tabla 'vendors'
        Schema::table('vendors', function (Blueprint $table) {
            // Elimina el UNIQUE en phone y/o email si existía. 
            // El nombre del índice puede variar según tu DB. 
            // Checa con: SHOW INDEX FROM vendors
            // Suelen tener nombres como 'vendors_phone_unique' o 'vendors_email_unique'.
            try {
                $table->dropUnique('vendors_phone_unique');
            } catch (\Throwable $th) {
                // Silenciamos la excepción si no existe el índice
            }
            try {
                $table->dropUnique('vendors_email_unique');
            } catch (\Throwable $th) {
                // Silenciamos la excepción si no existe el índice
            }

            // Convertir phone y email a nullable
            $table->string('phone', 20)->nullable()->change();
            $table->string('email', 100)->nullable()->change();
        });

        // 2. Ajustar la tabla 'restaurants'
        Schema::table('restaurants', function (Blueprint $table) {
            try {
                $table->dropUnique('restaurants_phone_unique');
            } catch (\Throwable $th) {
                // Silenciamos la excepción
            }
            try {
                $table->dropUnique('restaurants_email_unique');
            } catch (\Throwable $th) {
                // Silenciamos la excepción
            }

            $table->string('phone', 20)->nullable()->change();
            $table->string('email', 100)->nullable()->change();
        });
    }

    public function down()
    {
        // Si deseas revertir, vuelves a poner NOT NULL y unique
        Schema::table('vendors', function (Blueprint $table) {
            // Regresar a NOT NULL
            $table->string('phone', 20)->nullable(false)->change();
            $table->string('email', 100)->nullable(false)->change();

            // Volver a crear los índices, si lo deseas
            // $table->unique('phone', 'vendors_phone_unique');
            // $table->unique('email', 'vendors_email_unique');
        });

        Schema::table('restaurants', function (Blueprint $table) {
            $table->string('phone', 20)->nullable(false)->change();
            $table->string('email', 100)->nullable(false)->change();
            
            // $table->unique('phone', 'restaurants_phone_unique');
            // $table->unique('email', 'restaurants_email_unique');
        });
    }
};
