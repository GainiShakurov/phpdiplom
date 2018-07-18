<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class SeedUsers extends Migration
{

    private function getAdminsArray()
    {
        $admin = [];

        $now = Carbon::now()->toDateTimeString();

        $admin[] = [
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'),
            'remember_token' => str_random(10),
            'created_at' => $now,
            'updated_at' => $now
        ];

        return $admin;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::transaction(function(){
            DB::table('users')->delete();

            DB::table('users')->insert(
                $this->getAdminsArray()
            );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
