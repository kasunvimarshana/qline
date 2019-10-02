<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(StrategicBusinessUnitSeeder::class);
        $this->call(FactorySeeder::class);
        $this->call(LineSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DefectCategorySeeder::class);
        $this->call(MeasurePointSeeder::class);
        $this->call(StandardRQCSeeder::class);
        $this->call(StandardSewingCheckSeeder::class);
        $this->call(StandardSewingAuditSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ColourSeeder::class);
        $this->call(ExportSeeder::class);
        $this->call(StyleSeeder::class);
    }
}
