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
            'group_name' => 'general',
            'icon' => 'fa fa-globe'
          ],
          [
            'id' => '2',
            'group_name' => 'medicos',
            'icon' => 'fa fa-stethoscope'
          ],
          [
            'id' => '3',
            'group_name' => 'establecimientos',
            'icon' => 'fa fa-hospital-o'
          ],
          [
            'id' => '4',
            'group_name' => 'indumentaria',
            'icon' => 'fa fa-briefcase'
          ],
          [
            'id' => '5',
            'group_name' => 'colegios',
            'icon' => 'fa fa-graduation-cap'
          ],
          [
            'id' => '6',
            'group_name' => 'colonias',
            'icon' => 'fa fa-life-ring'
          ],

      ]);

      $user = factory(App\User::class,25)->create();
      $posts =  factory(App\Post::class, 150)->create();
      $doctor = factory(App\Doctor::class,25)->create();
      $secondarie = factory(App\UserSecondarie::class,50)->create();

    }
}
