<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['address_province', 'address_district', 'address_sub_district','address_postcode']);
            $table->renameColumn('name', 'alias');
            $table->renameColumn('birthday', 'birthdate');
            $table->string('username')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('address_province');
            $table->string('address_district');
            $table->string('address_sub_district');
            $table->string('address_postcode');
            $table->renameColumn('alias', 'name');
            $table->renameColumn('birthdate', 'birthday');
            $table->dropColumn('username');
        });
    }
}
