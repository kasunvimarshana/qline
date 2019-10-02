<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateUserAPITokensTable extends Migration
{
    protected $table_name_1 = "user_a_p_i_tokens";
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
            $table->boolean('is_visible')->index()->default(false)->nullable()->comment('comment');
            $table->boolean('is_active')->index()->default(false)->nullable()->comment('comment');
            $table->boolean('is_deactivatable')->index()->default(true)->nullable()->comment('comment');
            $table->boolean('is_notifiable')->index()->default(false)->nullable()->comment('comment');
            //$table->string('colour_id')->index()->nullable()->comment('comment');
            //$table->string('slug')->index()->unique()->nullable()->comment('comment');
            //$table->text('api_token')->comment('comment');
            $table->text('access_token')->nullable()->comment('comment');
            $table->text('refresh_token')->nullable()->comment('comment');
            //$table->text('payload')->comment('comment')->nullable();
            $table->string('code_active')->index()->nullable()->comment('comment');
            $table->string('ip_address')->index()->nullable()->comment('comment');
            $table->string('active_role')->index()->nullable()->comment('comment');
            $table->timestamp('time_create')->index()->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrent()->comment('comment');
            $table->timestamp('time_active')->index()->nullable()->comment('comment');
            $table->timestamp('time_deactive')->index()->nullable()->comment('comment');
            $table->double('duration_active')->index()->default(0)->nullable()->comment('comment');
            $table->timestamp('time_last_activity')->index()->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrent()->comment('comment');
            $table->string('user_agent')->index()->nullable()->comment('comment');
            $table->string('user_id')->index()->nullable()->comment('comment');
            //$table->softDeletes();
            //$table->dropPrimary('id');
            //$table->primary('name');
            //$table->primary(array('name'));
        });
        
        Schema::table($this->table_name_1, function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade')->onDelete('set null');
            
            $table->foreign('user_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('users')->onUpdate('cascade');
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
