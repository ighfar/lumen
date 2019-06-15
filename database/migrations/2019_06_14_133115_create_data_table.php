<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->string('object_domain');
             $table->string('object_id');
              $table->string('description');
               $table->boolean('is_completed');
                $table->string('completed_at')->nullable();
                 $table->string('updated_by');
                 $table->string('updated_at')->nullable();
                 $table->string('created_at');
                 $table->string('due')->nullable();
                 $table->integer('urgency');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
