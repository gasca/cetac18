<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/* cuidado con estos comandos en produccion 
*ejecutar todas php artisan migrate
*php artisan migrate:migration newtable crear tablas
*php artisan migrate:ollback borrar tablas
*php artisan migrate:fresh borrar y crear nuevamente las tablas
-----
  *para agregar un dato adicional alguna tabla se usa, si no usas la misma tabla --table=users 19
  *php artisan migrate:migration  add_phone_to_users_table 

-----
*para trabjar con cada tabla se usa OEM o eloquent
*se crea el modelo de cada tabla 
*php artisan make:model
*tambien se puede crear modelo y migracion con 
*php artisan make:model MyModel -m
*/
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
