<?php

use Illuminate\Database\Seeder;

class RegistersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Register::class)->create([
            'name'=>'Evandro',
            'age'=>25,
            'email' => 'evandro@gmail.com'
        ]);

        factory(App\Register::class)->create([
            'name'=>'Isabela',
            'age'=>19,
            'email' => 'isabela@gmail.com'
        ]);

        factory(App\Register::class)->create([
            'name'=>'Matheus',
            'age'=>13,
            'email' => 'matheus@gmail.com'
        ]);
    }
}
