<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandardDataAQLSTable extends Migration
{
    protected $table_name_1 = "standard_data_a_q_l_s";
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
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('pk')->default(0)->nullable()->comment('comment');
            $table->boolean('is_visible')->index()->nullable()->default(false)->comment('comment');
            $table->boolean('is_active')->index()->nullable()->default(false)->comment('comment');
            $table->double('count_sample')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->double('batch_count_min')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->double('batch_count_max')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->double('count_accept')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->double('count_reject')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->string('reject_level')->index()->nullable()->default(null)->comment('comment [ full / single ]');
            $table->string('reject_mode')->index()->nullable()->default(null)->comment('comment [ =, <, > ]');
            $table->string('accept_level')->index()->nullable()->default(null)->comment('comment [ full / single ]');
            $table->string('accept_mode')->index()->nullable()->default(null)->comment('comment [ =, <, > ]');
            //$table->double('audit_frequency')->index()->nullable()->default(0)->comment('comment');
            $table->string('audit_frequency_type')->index()->nullable()->comment('comment [count, time, s, h, m]');
            $table->double('audit_frequency_count')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            //$table->double('audit_frequency_time')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->string('standard_a_q_l_id')->index()->nullable()->comment('comment');
        });
        
        Schema::table($this->table_name_1, function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade')->onDelete('set null');
            
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            $table->foreign('standard_a_q_l_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('standard_a_q_l_s')->onUpdate('cascade');
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
