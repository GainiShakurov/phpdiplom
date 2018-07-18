<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategories extends Migration
{

    private function getCategoriesArray()
    {
        $category = [];

        $category[] = [
            'id' => 1,
            'name' => 'Basics'
        ];
        $category[] = [
            'id' => 2,
            'name' => 'Mobile'
        ];
        $category[] = [
            'id' => 3,
            'name' => 'Account'
        ];
        $category[] = [
            'id' => 4,
            'name' => 'Payments'
        ];
        $category[] = [
            'id' => 5,
            'name' => 'Privacy'
        ];
        $category[] = [
            'id' => 6,
            'name' => 'Delivery'
        ];

        return $category;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::transaction(function(){
            DB::table('categories')->delete();

            DB::table('categories')->insert(
                $this->getCategoriesArray()
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
