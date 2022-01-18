<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'gametitle' => 'PABJI',
            'gameimage'=>'storage/images/games-pubg.jpg',
            'description'=>'PUBG MOBILE adalah game seluler Battle Royale yang dibuat secara independen oleh Lightspeed & Quantum Studios dari Tencent Game yang dilisensikan secara resmi oleh PLAYERUNKNOWNS BATTLEGROUNDS.',
            'price'=>'69000',
            'pegirating'=>'7',
            'genre_id'=>'1'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'Resident Ipel',
            'gameimage'=>'storage/images/resident evil.jpg',
            'description'=>'Resident Evil adalah game tembak tembak jombi yang serem bener.',
            'price'=>'25000',
            'pegirating'=>'16',
            'genre_id'=>'4'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'Mobail Lejen',
            'gameimage'=>'storage/images/mobilelegends.jpg',
            'description'=>'Mobail lejen adalah game MOBA yang sangat seru dan ngadu mekanik.',
            'price'=>'11000',
            'pegirating'=>'3',
            'genre_id'=>'6'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'PES 2021',
            'gameimage'=>'storage/images/pes2021.jpg',
            'description'=>'Game sepak bola yang sangat bagus tapi mahal.',
            'price'=>'150000',
            'pegirating'=>'12',
            'genre_id'=>'6'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'The Witcher',
            'gameimage'=>'storage/images/thewitcher.jpg',
            'description'=>'Game RPG yang worldnya banyak jadi mainnya ga abis abis.',
            'price'=>'89000',
            'pegirating'=>'3',
            'genre_id'=>'9'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'Pacman',
            'gameimage'=>'storage/images/pacman.jpg',
            'description'=>'Game makan-makanan jadi harus kabur kaburan juga tapi seru.',
            'price'=>'1000',
            'pegirating'=>'18',
            'genre_id'=>'10'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'Dota 5',
            'gameimage'=>'storage/images/dota.jpg',
            'description'=>'Dota 5 adalah game dari masa depan yang punya banyak hero dan items.',
            'price'=>'75000',
            'pegirating'=>'12',
            'genre_id'=>'12'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'CEESGEO',
            'gameimage'=>'storage/images/ceesgo.jpg',
            'description'=>'Game tembak-tembakan, terus bisa beli skin juga buat makin bagus.',
            'price'=>'14000',
            'pegirating'=>'16',
            'genre_id'=>'3'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'EL O EL',
            'gameimage'=>'storage/images/LOL.jpg',
            'description'=>'Ga beda jauh dari mobail lejen gamenya ya seru seru aja sih.',
            'price'=>'21000',
            'pegirating'=>'7',
            'genre_id'=>'5'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'Tom Raider',
            'gameimage'=>'storage/images/tombraider.jpg',
            'description'=>'Ya game rpg juga ga beda jauh sama the witcher petualangan.',
            'price'=>'77000',
            'pegirating'=>'18',
            'genre_id'=>'3'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'Five Night Predi',
            'gameimage'=>'storage/images/fivenight.jpg',
            'description'=>'Game serem tapi seru tapi ngagetin yang dimaenini yutuber.',
            'price'=>'123000',
            'pegirating'=>'0',
            'genre_id'=>'13'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'GE TE A 5',
            'gameimage'=>'storage/images/gta5.jpg',
            'description'=>'Ini game serunya dimaenin bareng temen rame-rame terus kerja bareng perang bareng.',
            'price'=>'3000',
            'pegirating'=>'3',
            'genre_id'=>'11'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'Red Ded',
            'gameimage'=>'storage/images/reddead.jpg',
            'description'=>'Game open world tapi di gurun.',
            'price'=>'7000',
            'pegirating'=>'0',
            'genre_id'=>'4'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'Apengers',
            'gameimage'=>'storage/images/avenger.jpg',
            'description'=>'Captain america thor ironman hawkeye hulk spiderman blackwidow.',
            'price'=>'5000',
            'pegirating'=>'12',
            'genre_id'=>'8'
        ]);
        DB::table('games')->insert([
            'gametitle' => 'Sapiderman No Have Home',
            'gameimage'=>'storage/images/spiderman.jpg',
            'description'=>'Game spiderman tapi di game spiderman ini spidermannya gapunya rumah',
            'price'=>'15000',
            'pegirating'=>'12',
            'genre_id'=>'6'
        ]);
    }
}
