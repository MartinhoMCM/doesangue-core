<?php

use Illuminate\Database\Seeder;

class CampaignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Campanhas criadas!');

        DB::table('campaigns')->truncate();
        DB::table('campaigns')->insert(
            [
            array('title' => 'Campanha de teste do sistema', 'id_user' => '1', 'expires' => '20180605123000'),
            array('title' => 'Solicitação de ajuda pela comunidade', 'id_user' => '2', 'expires' => '20190807123000'),
            ]
        );
    }
}
