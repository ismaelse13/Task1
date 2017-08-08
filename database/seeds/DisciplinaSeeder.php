<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Nota;
use App\Aluno;
use App\Disciplina;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('disciplinas')->truncate();

        foreach(Aluno::all() as $aluno ){

            foreach( range(1,100) as $value ){
                $faker = Faker::create();

                Disciplina::create([
                    'serie_id' => $faker->randomDigitNotNull,
                    'nome' => $faker->randomElement(array('Portugues', 'Matematica', 'Historia', 'Geografia', 'Quimica', 'Fisica', 'Biologia')),
                    'professor' => $faker->name,
    
                ]);
            }
        }
    }
}
