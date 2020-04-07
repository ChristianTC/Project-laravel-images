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
        
        App\User::create([
            'name' => 'Christian Tambo C',
            'email' => 'chris@admin.com',
            'password' => bcrypt('123456')
        ]);

        factory(App\Post::class, 24)->create();

        App\Camara::create([
            'user_id' => 1,
            'title' => 'Camara Laptop',
            'height' => '2 metros',
            'angle' => '100 grados',
            'url' => '0',
            'location' => 'Poste #1, Av.Costanera, La Paz',            
        ]);
        App\Camara::create([
            'user_id' => 1,
            'title' => 'Camara IP Celular',
            'height' => 'Indefinido',
            'angle' => 'Indefinido',
            'url' => 'http://192.168.0.8:8080/video',
            'location' => 'Celular de Christian Tambo',            
        ]);
        
        

        //factory(App\Camara::class, 10)->create();
    }
}
