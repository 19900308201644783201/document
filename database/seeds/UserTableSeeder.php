<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PHP process
        $startTime = microtime(true); 
        $i = 0;
        $total = 10;
        $table = 'users_no_index';
        // $table = 'users';
        $table = 'users_no_index_smalls';
        while($i++ < $total) {
            $users[] = Factory(App\User::class, 1000)->make()->toArray();
        }
        $end = microtime(true) - $startTime;
        dump('Php processed ' . $end . ' seconds');

        // Mysql process
        $startTime = microtime(true);
        foreach ($users as $user) {
            \DB::table($table)->insert($user);
        }
        $endTime = microtime(true);
        $executeTime = $endTime - $startTime;
        dump('insert ' . number_format($total * 1000) . " records to $table take " . $executeTime . ' seconds');
    }
}
