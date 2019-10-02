<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandardAQLSTable extends Migration
{
    protected $table_name_1 = "standard_a_q_l_s";
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
            $table->string('colour_id')->index()->nullable()->comment('comment');
            //$table->string('slug')->index()->unique()->nullable()->comment('comment');
            $table->string('code')->index()->unique()->comment('comment');
            $table->string('name')->index()->nullable()->comment('comment');
            $table->string('display_name')->index()->nullable()->comment('comment');
            $table->text('image_uri')->default(null)->nullable()->comment('uniform resource identifier'); 
            $table->string('standard_a_q_l_id_parent')->index()->nullable()->comment('comment');
            $table->string('audit_frequency_type')->index()->nullable()->comment('comment');
            $table->double('audit_frequency_count')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            //$table->double('audit_frequency_time')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            //$table->softDeletes();
            //$table->dropPrimary('id');
            //$table->primary('name');
        });
        
        Schema::table($this->table_name_1, function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade')->onDelete('set null');
            
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
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
