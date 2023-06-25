<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('products')->insert([
            'brand' => 'Mitsubishi Electric',
            'title' => 'Aquecimento A+;Arrefecimento A++;Ventilação e Desumidificação',
            'gama' => 'Gama HR Inverter',
            'price' => 820,
            'image_path' => '/assets/img/products/1.jpg',
            'numstars' => 5,
            'date' => now(),
        ]);

        DB::table('products')->insert([
            'brand' => 'Mitsubishi Electric',
            'title' => 'Aquecimento A++;Arrefecimento A+++;Ventilação e Desumidificação;Silenciosa;Wifi-Incluido',
            'gama' => 'Gama AP Inverter',
            'price' => 995,
            'image_path' => '/assets/img/products/2.jpg',
            'numstars' => 5,
            'date' => now(),
        ]);

        DB::table('products')->insert([
            'brand' => 'Mitsubishi Electric',
            'title' => 'Aquecimento A+++;Arrefecimento A+++;Ventilação e Desumidificação;Silenciosa;Wifi-Incluido',
            'gama' => 'Gama Kirigamine ZEN',
            'price' => 1190,
            'image_path' => '/assets/img/products/3.jpg',
            'numstars' => 5,
            'date' => now(),
        ]);

        DB::table('products')->insert([
            'brand' => 'Mitsubishi Electric',
            'title' => 'Aquecimento A+++;Arrefecimento A+++;Ventilação e Desumidificação;Silenciosa;Wifi-Incluido;3 D I-See Sensor;Plasma Quad Plus',
            'gama' => 'Gama Kirigamine Style',
            'price' => 1410,
            'image_path' => '/assets/img/products/4.jpg',
            'numstars' => 5,
            'date' => now(),
        ]);

        DB::table('products')->insert([
            'brand' => 'Tyotomi',
            'title' => 'Aquecimento A+++;Arrefecimento A++;Silenciosa;Desumidicafação;Modo Noturno;Ionizador de Partículas',
            'gama' => 'Gama UMI 2.7',
            'price' => 680,
            'image_path' => '/assets/img/products/5.jpg',
            'numstars' => 5,
            'date' => now(),
        ]);

        DB::table('products')->insert([
            'brand' => 'Tyotomi',
            'title' => 'Aquecimento A+++;Arrefecimento A++;Desumidicafação;Modo Noturno;Ionizador de Partículas',
            'gama' => 'Gama Izuru 2.5',
            'price' => 770,
            'image_path' => '/assets/img/products/6.jpg',
            'numstars' => 5,
            'date' => now(),
        ]);

        DB::table('products')->insert([
            'brand' => 'Tyotomi',
            'title' => 'Aquecimento A+++;Arrefecimento A+++;Desumidicafação;Modo Noturno;Ionizador de Partículas',
            'gama' => 'Gama Kuro 2.5',
            'price' => 945,
            'image_path' => '/assets/img/products/7.jpg',
            'numstars' => 5,
            'date' => now(),
        ]);

        DB::table('products')->insert([
            'brand' => 'Daikin',
            'title' => 'Aquecimento A+++;Arrefecimento A+++;Ventilação e Desumidificação;Wifi-Incluido;Flash Streamer;Super Silenciosa',
            'gama' => 'Gama SB-FTXM25R',
            'price' => 1270,
            'image_path' => '/assets/img/products/8.jpg',
            'numstars' => 5,
            'date' => now(),
        ]);

        DB::table('products')->insert([
            'brand' => 'Daikin',
            'title' => 'Aquecimento A+++;Arrefecimento A+++;Ventilação e Desumidificação;Wifi-Incluido;Flash Streamer;Streamer Purificante;Super Silenciosa',
            'gama' => 'Gama SB-FTXA25AW',
            'price' => 1470,
            'image_path' => '/assets/img/products/9.jpg',
            'numstars' => 5,
            'date' => now(),
        ]);

        DB::table('products')->insert([
            'brand' => 'Daikin',
            'title' => 'Aquecimento A+++;Arrefecimento A+++;Ventilação e Desumidificação;Wifi-Incluido;Flash Streamer;Streamer Purificante;Super Silenciosa',
            'gama' => 'Gama SB-FTXJ25AW',
            'price' => 1580,
            'image_path' => '/assets/img/products/10.jpg',
            'numstars' => 5,
            'date' => now(),
        ]);

        DB::table('products')->insert([
            'brand' => 'Daikin',
            'title' => 'Aquecimento A++;Arrefecimento A+++;Desumidificação;Wifi-Incluido;Flash Streamer;Super Silenciosa;Função Piso Radiante',
            'gama' => 'Gama PERFERA CHAO INVERTER',
            'price' => 1670,
            'image_path' => '/assets/img/products/11.jpg',
            'numstars' => 5,
            'date' => now(),
        ]);

        // BRANDS
    
        DB::table('brand')->insert([
            'brand' => 'Mitsubishi Electric',
            'title' => 'Mitsubishi Electric',
            'numstars' => rand(1,5),
            'image_path' => '/assets/img/brand/1.jpg',
            'date' => now(),
        ]);

        DB::table('brand')->insert([
            'brand' => 'Toyotomi',
            'title' => 'Toyotomi',
            'numstars' => rand(1,5),
            'image_path' => '/assets/img/brand/2.jpg',
            'date' => now(),
        ]);

        DB::table('brand')->insert([
            'brand' => 'Daikin',
            'title' => 'Daikin',
            'numstars' => rand(1,5),
            'image_path' => '/assets/img/brand/3.jpg',
            'date' => now(),
        ]);

        DB::table('brand')->insert([
            'brand' => 'Haice',
            'title' => 'Haice',
            'numstars' => rand(1,5),
            'image_path' => '/assets/img/brand/4.jpg',
            'date' => now(),
        ]);

        DB::table('brand')->insert([
            'brand' => 'Uponor',
            'title' => 'Uponor',
            'numstars' => rand(1,5),
            'image_path' => '/assets/img/brand/5.jpg',
            'date' => now(),
        ]);

        DB::table('brand')->insert([
            'brand' => 'Haier',
            'title' => 'Haier',
            'numstars' => rand(1,5),
            'image_path' => '/assets/img/brand/6.jpg',
            'date' => now(),
        ]);

        DB::table('brand')->insert([
            'brand' => 'TDA',
            'title' => 'TDA',
            'numstars' => rand(1,5),
            'image_path' => '/assets/img/brand/7.jpg',
            'date' => now(),
        ]);

        DB::table('brand')->insert([
            'brand' => 'S&P',
            'title' => 'S&P',
            'numstars' => rand(1,5),
            'image_path' => '/assets/img/brand/8.jpg',
            'date' => now(),
        ]);

        // DB::table('brand')->insert([
        //     'brand' => 'Openplus',
        //     'title' => 'Openplus',
        //     'numstars' => rand(1,5),
        //     'image_path' => '/assets/img/brand/9.jpg',
        //     'date' => now(),
        // ]);

        // DB::table('brand')->insert([
        //     'brand' => 'Sodeca Portugal',
        //     'title' => 'Sodeca Portugal',
        //     'numstars' => rand(1,5),
        //     'image_path' => '/assets/img/brand/10.jpg',
        //     'date' => now(),
        // ]);
    }
}
