<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency;



class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = array (
           'USD' , 'EUR' , 'GBP' , 'AED'
        );

        foreach ( $currencies as $currency) {

            Currency::create ( [
                'iso' => $currency 
            ]);
        }
    }
}
