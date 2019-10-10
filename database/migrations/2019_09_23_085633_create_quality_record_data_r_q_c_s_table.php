<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualityRecordDataRQCSTable extends Migration
{
    protected $table_name_1 = "quality_record_data_r_q_c_s";
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
            $table->bigIncrements('id')->comment('comment');
            $table->timestamps();
            $table->unsignedBigInteger('pk')->default(0)->nullable()->comment('comment');
            $table->boolean('is_visible')->default(false)->nullable()->comment('comment');//->index()
            $table->boolean('is_active')->default(false)->nullable()->comment('comment');//->index()
            $table->timestamp('time_create')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrent()->comment('comment');//->index()
            $table->unsignedBigInteger('quality_record_r_q_c_id')->unsigned()->nullable()->comment('comment');//->index()
            $table->unsignedBigInteger('status_id')->unsigned()->nullable()->comment('comment');//->index()
            $table->text('description')->default(null)->nullable()->comment('comment'); 
            $table->string('user_id_create')->nullable()->comment('comment');//->index()
            //$table->nullableMorphs('statusable');
            $table->string('measure_point_id')->nullable()->comment('comment');//->index()
            $table->string('defect_category_id')->nullable()->comment('comment');//->index()
            $table->string('defect_id')->nullable()->comment('comment');//->index()
            $table->double('count_defect')->nullable()->default(0)->comment('comment');//->index()
        });
        
        Schema::table($this->table_name_1, function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade')->onDelete('set null');
            
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            $table->foreign('quality_record_r_q_c_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('quality_record_r_q_c_s')->onUpdate('cascade')->onDelete('cascade');
            $table->index(array('is_visible'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('is_active'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('time_create'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('quality_record_r_q_c_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('status_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('user_id_create'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('measure_point_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('defect_category_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('defect_id'), ('index'.time().Str::uuid()->toString()));
        });
        
        Schema::table($this->table_name_1, function($table) {
            //if (Schema::hasTable('table_name')){}
            if ((Schema::hasColumn($this->table_name_1, 'id')) && (Schema::hasColumn($this->table_name_1, 'pk'))){
                //DB::statement("ALTER TABLE {$this->table_name_1} MODIFY COLUMN pk INTEGER NOT NULL UNIQUE AUTO_INCREMENT;");
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
