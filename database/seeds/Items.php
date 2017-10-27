<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Items extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = array(  "imgs/Assassin's-Creed/1a86_edwards_cutlass_latex_replica.jpg", 
                        "imgs/Assassin's-Creed/itkr_assassin_fitted_hat.jpg", 
                        "imgs/Assassin's-Creed/ivtr_assassins_creed_union_jack_flag.jpg", 
                        "imgs/Assassin's-Creed/ivtt_assassins_creed_fleece_throw.jpg"
        );
        $description = array("Edward's Cutlass latex replica", 
                            "Assassin's Creed Cap", 
                            "Assassin's Creed Jacket", 
                            "Assassin's Creed Wallet"
        );

        $j = 0;
        while($j < 4){

            DB::table('Products')->insert([
                'name'=> $name[$j],
                'category_id'=> "1",
                'description'=> $description[$j],
                'price'=> rand(1,1000).".00",
                'barcode'=> "123456789",
                'stock'=> rand(1,20),
                'created_at'=>Carbon::now()
            ]);

            $j++;
            echo $j;
        }
        echo "\n";

        $name = array("imgs/Dota-2/hrpk_dota_sniper_plush.jpg", 
                    "imgs/Dota-2/ipng_dota_2_tango_necklace.jpg", 
                    "imgs/Dota-2/ipnp_dota_2_ladies_hoodie_thumbhoes.jpg", 
                    "imgs/Dota-2/ivlu_dota_2_packable_jacket.jpg", 
                    "imgs/Dota-2/ivlv_dota_2_lsarun_hero_pin_set_4_fix.jpg", 
                    "imgs/Dota-2/ivmg_dota_2_lsarun_hero_pin_set_5_fix.jpg", 
                    "imgs/Dota-2/ivmh_dota_2_lsarun_hero_pin_set_6_fix.jpg"
        );
        $description = array("Dota Sniper Plush Toy", 
                            "Tango Necklace", 
                            "Dota 2 Ladies' Hoodie", 
                            "Dota 2 Packable Jacket",
                            "Dota 2 Hero Pin Set 4",
                            "Dota 2 Hero Pin Set 5",
                            "Dota 2 Hero Pin Set 5"
        );

        $j = 0;
        while($j < 6){

            DB::table('Products')->insert([
                'name'=> $name[$j],
                'category_id'=> "2",
                'description'=> $description[$j],
                'price'=> rand(1,1000).".00",
                'barcode'=> "123456789",
                'stock'=> rand(1,20),
                'created_at'=>Carbon::now()
            ]);

            $j++;
            echo $j;
        }
        echo "\n";
    }
}
