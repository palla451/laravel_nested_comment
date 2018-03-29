<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('posts')->insert([
            'title' => 'Salvini: “A Di Maio mancano 90 voti, a noi 50”
                        La replica: “Vuole governare con Renzi? Auguri”',
            'body' => 'La sintesi della complicatissima partita per la formazione di una maggioranza è uno scambio di “auguri” al vetriolo. A dare il via a botta e risposta tra i due candidati premier. “Ma da solo Di Maio dove va…Voglio vederlo trovare 90 voti in giro, che dalla sera alla mattina si convincono. E poi 50 voti sono molti meno di 90”. Di Maio replica su Twitter: “Salvini dice che gli bastano 50 voti. Vuole fare il governo con i 50 voti del Pd di Renzi in accordo con Berlusconi? Auguri!”',
            'user_id' => 1,
        ]);

    }
}
