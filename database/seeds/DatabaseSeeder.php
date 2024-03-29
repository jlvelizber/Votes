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
        $this->call(UsersTableSeeder::class);
        $this->call(VoterTableSeeder::class);
        $this->call(CandidateTableSeeder::class);
        $this->call(MemberCandidateTableSeeder::class);
    }
}
