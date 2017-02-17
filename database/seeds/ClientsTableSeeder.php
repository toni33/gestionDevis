<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 3; $i++) { 
    		Client::create([
                'civilite' => 'Mr.',
    			'nom' => 'Navarro'.$i,
    			'prenom' => 'Antonio',
                'adresse' => 'Chemin du, 2',
                'code_postal' => '1212',
                'localite' => 'Grang-Lancy',
                'ville' => 'Genève',
                'pays' => 'Suisse',
                'email' => 'antonio@gmail.com',
                'telephone' => '022 888 88 88',
                'mobile' => '079 999 99 99',
    			'user_id' => 1,
    			]);
    	}

    	for ($i=0; $i < 3; $i++) { 
    		Client::create([
                'civilite' => 'Mr.',
                'nom' => 'Dupont'.$i,
                'prenom' => 'Michel',
                'adresse' => 'Chemin du, 2',
                'code_postal' => '1227',
                'localite' => 'Carouge',
                'ville' => 'Carouge',
                'pays' => 'Suisse',
                'email' => 'antonio@gmail.com',
                'telephone' => '022 777 77 778',
                'mobile' => '077 777 77 77',
    			'user_id' => 2,
    			]);
    	}

    }
}
