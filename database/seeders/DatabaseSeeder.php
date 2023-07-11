<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alumno;
use App\Models\Clase;
use App\Models\Maestro;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();
        $this -> call([RoleSeeder::class]);


      User::create([
        "name" => "Carlos Quijano",
        "email" => "admin@admin.com",
        "password" => Hash::make("admin")

      ])->assignRole("admin");

      User::create([
        "name" => "Juan Perez",
        "email" => "maestro@maestro.com",
        "password" => Hash::make("maestro")

      ])->assignRole("maestro");

      User::create([
        "name" => "Jose Valdez",
        "email" => "alumno@alumno.com",
        "password" => Hash::make("alumno")

      ])->assignRole("alumno");

      User::create([
        "name" => "Jose Valdez",
        "email" => "admin2@admin.com",
        "password" => Hash::make("admin")

      ])->assignRole("admin");
      User::create([
        "name" => "Jose Valdez",
        "email" => "maestro2@maestro.com",
        "password" => Hash::make("maestro")

      ])->assignRole("maestro");
      User::create([
        "name" => "Jose Valdez",
        "email" => "alumno2@alumno.com",
        "password" => Hash::make("alumno")

      ])->assignRole("alumno");
      User::create([
        "name" => "Jose Valdez",
        "email" => "admin3@alumno.com",
        "password" => Hash::make("admin")

      ])->assignRole("admin");
      User::create([
        "name" => "Jose Valdez",
        "email" => "alumno3@alumno.com",
        "password" => Hash::make("alumno")

      ])->assignRole("maestro");
      User::create([
        "name" => "Jose Valdez",
        "email" => "maestro3@alumno.com",
        "password" => Hash::make("maestro")

      ])->assignRole("maestro");

      User::create([
        "name" => "Jose Valdez",
        "email" => "alumno4@alumno.com",
        "password" => Hash::make("alumno")

      ])->assignRole("alumno");



      Clase::factory(10)->create();
      Maestro::factory(10)->create();
      Alumno::factory(10)->create();





        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }


}
