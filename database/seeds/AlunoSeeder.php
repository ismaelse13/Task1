<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Aluno;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->truncate();

            foreach( range(1,100) as $value ){
               $faker = Faker::create();

                //dd($faker->randomElement(array('7:00-12:00', '13:00-17:30')));

                Aluno::create([
                    'matricula' => $faker->randomDigitNotNull,
                    'nome' => $faker->name,
                    'turma' => $faker->randomDigitNotNull,
                    'horario' => $faker->randomElement(array('7:00-12:00', '13:00-17:30'))
                ]);
            }
    }
}