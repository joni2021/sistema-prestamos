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
         $this->call(DniTypeTableSeeder::class);
         $this->call(CompanyTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(financingTableSeeder::class);
         $this->call(ClientsTableSeeder::class);
         $this->call(ClientUserTableSeeder::class);
         $this->call(AcreditationTypeSeeder::class);
         $this->call(ArchiveTypesTableSeeder::class);
         $this->call(AdditionalCostTableSeeder::class);
    }
}