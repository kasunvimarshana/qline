<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateUserPermissionsTable extends Migration
{
    protected $table_name_1 = "user_permissions";
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
            //$table->unsignedBigInteger('pk')->default(0)->nullable()->comment('comment');
            $table->string('user_id')->index()->comment('comment');
            $table->unsignedBigInteger('permission_id')->index()->unsigned()->comment('comment');
            //FOREIGN KEY CONSTRAINTS
            //$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            //$table->foreign('permission_id')->references('id')->on('permissions')->onUpdate('cascade')->onDelete('cascade');
            //SETTING THE PRIMARY KEYS
            //$table->primary(['user_id','permission_id']);
        });
        
        Schema::table($this->table_name_1, function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade')->onDelete('set null');
            
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            $table->primary(array('user_id','permission_id'), ('pk'.time().Str::uuid()->toString()));
            $table->foreign('user_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('permission_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('permissions')->onUpdate('cascade')->onDelete('cascade');
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
