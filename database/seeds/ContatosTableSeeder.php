<?php

use Illuminate\Database\Seeder;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('contatos')->insert([
            'saudacao' => 'Sr.',
            'nome' => 'Leonardo',
            'telefone' => '(19) 99999-9999',
            'data_nascimento' => '2018-10-23',
            'email' => 'leo.ronchini@hotmail.com',
            'nota' => 'Usuario criado usando seeder com metodo DB',
            'created_at' => date('Y,m-d H:i:s')
          ]);
        //2
          factory(App\Contato::class, 20)->create();
    }
}
