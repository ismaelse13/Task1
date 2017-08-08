<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Nota;
use App\Aluno;
use App\Disciplina;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->truncate();


        foreach(Aluno::all() as $aluno ){

            foreach(range(1,100) as $value){
                $faker = Faker::create();

                Nota::create([
                    'disciplina_id' => $disciplina->id,
                    'aluno_id' => $aluno->id,
                    'prova_1' => $faker->randomFloat(1, 1, 10),
                    'prova_2' => $faker->randomFloat(1, 1, 10),
                    'prova_3' => $faker->randomFloat(1, 1, 10),
                    'prova_4' => $faker->randomFloat(1, 1, 10),

                    'prova_rec' => $faker->randomFloat(1, 1, 10),
                    'media_final' => $faker->randomFloat(1, 1, 10),
                    
                    'updated_at' => \Carbon\Carbon::now(),
                    'created_at' => \Carbon\Carbon::now(),
                ]);
            }
        }
    }
}
