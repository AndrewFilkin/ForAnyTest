<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $collection = DB::connection('mongodb')->getMongoDB()->createCollection('articles');
        $collection->createIndex(['email' => 1]);
        $collection->createIndex(['name' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::connection('mongodb')->getMongoDB()->dropCollection('articles');
    }
};
