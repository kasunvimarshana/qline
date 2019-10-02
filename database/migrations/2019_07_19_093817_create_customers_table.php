<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateCustomersTable extends Migration
{
    protected $table_name_1 = "customers";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name_1, function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            //$table->unsignedBigInteger('id')->default(0)->nullable()->comment('comment');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            //$table->dateTime('date_time')->default('CURRENT_TIMESTAMP')->nullable()->change();
            $table->string('id')->index()->comment('comment');
            $table->timestamps();
            $table->unsignedBigInteger('pk')->default(0)->nullable()->comment('comment');
            $table->boolean('is_visible')->index()->default(false)->nullable()->comment('comment');
            $table->boolean('is_active')->index()->default(false)->nullable()->comment('comment');
            //$table->string('colour_id')->index()->nullable()->comment('comment');
            $table->string('code')->index()->unique()->comment('comment');
            $table->string('name')->index()->nullable()->comment('comment');
            $table->string('display_name')->index()->nullable()->comment('comment');
            $table->text('image_uri')->default(null)->nullable()->comment('uniform resource identifier'); 
            $table->string('company_id')->index()->nullable()->comment('comment');
            $table->string('strategic_business_unit_id')->index()->nullable()->comment('comment');
            //$table->softDeletes();
            //$table->dropPrimary('id');
            //$table->primary('name');
        });
        
        Schema::table($this->table_name_1, function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade')->onDelete('set null');
            
            $table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            $table->foreign('company_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('companies')->onUpdate('cascade');
            $table->foreign('strategic_business_unit_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('strategic_business_units')->onUpdate('cascade');
        });
        
        Schema::table($this->table_name_1, function($table) {
            //if (Schema::hasTable('table_name')){}
            if ((Schema::hasColumn($this->table_name_1, 'id')) && (Schema::hasColumn($this->table_name_1, 'pk'))){
                DB::statement("ALTER TABLE {$this->table_name_1} MODIFY COLUMN pk INTEGER NOT NULL UNIQUE AUTO_INCREMENT;");
                //DB::statement("UPDATE {$this->table_name} SET id = pk");
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table_name_1);
    }
}
