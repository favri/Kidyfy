<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

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
            'color' => 'ffffff',
            'icon' => 'fa fa-globe'
          ],
          [
            'id' => '2',
            'group_name' => 'medicos',
            'color' => 'ffffff',
            'icon' => 'fa fa-stethoscope'
          ],
          [
            'id' => '3',
            'group_name' => 'establecimientos',
            'color' => 'ffffff',
            'icon' => 'fa fa-hospital-o'
          ],
          [
            'id' => '4',
            'group_name' => 'indumentaria',
            'color' => 'ffffff',
            'icon' => 'fa fa-briefcase'
          ],
          [
            'id' => '5',
            'group_name' => 'colegios',
            'color' => 'ffffff',
            'icon' => 'fa fa-graduation-cap'
          ],
          [
            'id' => '6',
            'group_name' => 'colonias',
            'color' => 'ffffff',
            'icon' => 'fa fa-life-ring'
          ],

      ]);

      $user = factory(App\User::class,25)->create();
      $posts =  factory(App\Post::class, 120)->create();

    }
}
