<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use App\Doctor;
use App\UserSecondarie;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('groups')->insert([
          [
            'id' => '1',
            'group_name' => 'General',
            'icon' => 'fa fa-globe'
          ],
          [
            'id' => '2',
            'group_name' => 'Medicos',
            'icon' => 'fa fa-stethoscope'
          ],
          [
            'id' => '3',
            'group_name' => 'Establecimientos',
            'icon' => 'fa fa-hospital-o'
          ],
          [
            'id' => '4',
            'group_name' => 'Indumentaria',
            'icon' => 'fa fa-briefcase'
          ],
          [
            'id' => '5',
            'group_name' => 'Colegios',
            'icon' => 'fa fa-graduation-cap'
          ],
          [
            'id' => '6',
            'group_name' => 'Colonias',
            'icon' => 'fa fa-life-ring'
          ],

      ]);

      $user = factory(App\User::class,25)->create();
      $posts =  factory(App\Post::class, 1000)->create();
      $doctor = factory(App\Doctor::class,25)->create();
      $secondarie = factory(App\UserSecondarie::class,25)->create();

    }
}
