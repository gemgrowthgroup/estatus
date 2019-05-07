<?php

use Illuminate\Database\Seeder;
use App\Transaction;
use App\User;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::truncate();

        $start = strtotime('10 May 2019');
        $end = strtotime('22 July 2019');

        $timestamp = mt_rand($start, $end);

        $agent = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Kezia Barretto',
            'user_id' => 17,
            'client' => 'Julia Barretto',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'GMA Towers',
            'origin' => 'ABS-CBN Studio',
            'vehicle_type_id' => 1, 
            'agency_id' => 1,
        ]);

        $user = User::where('id', 17)->first();
        $user->transactions()->attach($agent);

        $agentToo = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Paulichelle Iligan',
            'user_id' => 18,
            'client' => 'Julie San Jose',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'San Jose Heights',
            'origin' => 'ABS-CBN Studio',
            'vehicle_type_id' => 1, 
            'agency_id' => 1,
        ]);

        $user = User::where('id', 18)->first();
        $user->transactions()->attach($agentTwo);

        $agentThree = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Meg Salvador',
            'user_id' => 19,
            'client' => 'Maja Salvador',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Boracay Mansions',
            'origin' => 'ABS-CBN Studio',
            'vehicle_type_id' => 4, 
            'agency_id' => 1,
        ]);

        $user = User::where('id', 19)->first();
        $user->transactions()->attach($agentThree);

        $agentFour = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Geng Maderazo',
            'user_id' => 20,
            'client' => 'Manuel Pangilinan ',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Forbes Park Homes',
            'origin' => 'Office',
            'vehicle_type_id' => 3, 
            'agency_id' => 1,
        ]);

        $user = User::where('id', 20)->first();
        $user->transactions()->attach($agentFour);

        $agentFive = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Anne Mateo ',
            'user_id' => 21,
            'client' => 'Michael Enriquez',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'GMA Towers',
            'origin' => 'Office',
            'vehicle_type_id' => 1, 
            'agency_id' => 1,
        ]);

        $user = User::where('id', 21)->first();
        $user->transactions()->attach($agentFive);

        $agentSix = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Louise Belison',
            'user_id' => 22,
            'client' => 'Bianca Umali',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'GMA Towers',
            'origin' => 'Office',
            'vehicle_type_id' => 1, 
            'agency_id' => 1,
        ]);

        $user = User::where('id', 22)->first();
        $user->transactions()->attach($agentSix);

        $agentSeven = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Abigail Martin',
            'user_id' => 23,
            'client' => 'Carmi Martin',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Callisto',
            'origin' => 'Office',
            'vehicle_type_id' => 1, 
            'agency_id' => 1,
        ]);

        $user = User::where('id', 23)->first();
        $user->transactions()->attach($agentSeven);

        $agentEight = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Jennifer Baldovino',
            'user_id' => 24,
            'client' => 'Albert Martinez',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'AT Verge',
            'origin' => 'Office',
            'vehicle_type_id' => 1, 
            'agency_id' => 1,
        ]);

        $user = User::where('id', 24)->first();
        $user->transactions()->attach($agentEight);

        $agentNine = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Claudette Gabriel',
            'user_id' => 25,
            'client' => 'Peter Ho',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Shang Residenza',
            'origin' => 'Office',
            'vehicle_type_id' => 1, 
            'agency_id' => 1,
        ]);

        $user = User::where('id', 25)->first();
        $user->transactions()->attach($agentNine);

        $agentTen = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Jhasfer Tenorio',
            'user_id' => 26,
            'client' => 'Manny Pacquaio',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Sports City',
            'origin' => 'Office',
            'vehicle_type_id' => 3, 
            'agency_id' => 2,
        ]);

        $user = User::where('id', 26)->first();
        $user->transactions()->attach($agentTen);

        $agentEleven = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Ben Sy',
            'user_id' => 27,
            'client' => 'Peejay Pablo',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Techno Towers',
            'origin' => 'GMA Studio',
            'vehicle_type_id' => 1, 
            'agency_id' => 2,
        ]);

        $user = User::where('id', 27)->first();
        $user->transactions()->attach($agentEleven);

        $agentTwelve = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Artemio Cruz',
            'user_id' => 28,
            'client' => 'Robert Kiyosaki',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Trump Towers',
            'origin' => 'NAIA Terminal 3',
            'vehicle_type_id' => 3, 
            'agency_id' => 2,
        ]);

        $user = User::where('id', 28)->first();
        $user->transactions()->attach($agentTwelve);

        $agentThirteen = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Lynette Faustino',
            'user_id' => 29,
            'client' => 'Apollo Quiboloy',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Seventh Heaven Residences',
            'origin' => 'Davao',
            'vehicle_type_id' => 4, 
            'agency_id' => 2,
        ]);

        $user = User::where('id', 29)->first();
        $user->transactions()->attach($agentThirteen);

        $agentFourteen = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Shean Cleofas',
            'user_id' => 30,
            'client' => 'Emilia Clarke',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'King\'s Landing',
            'origin' => 'Essos',
            'vehicle_type_id' => 1, 
            'agency_id' => 2,
        ]);

        $user = User::where('id', 30)->first();
        $user->transactions()->attach($agentFourteen);

        $agentFifteen = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Arah Isabel',
            'user_id' => 31,
            'client' => 'Kit Harrington',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Winterfell',
            'origin' => 'The Wall',
            'vehicle_type_id' => 1, 
            'agency_id' => 2,
        ]);

        $user = User::where('id', 31)->first();
        $user->transactions()->attach($agentFifteen);

        $agentSixteen = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Amber Nepomuceno',
            'user_id' => 32,
            'client' => 'Peter Dingklage',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'King\'s Landing',
            'origin' => 'Casterly Rock',
            'vehicle_type_id' => 1, 
            'agency_id' => 2,
        ]);

        $user = User::where('id', 32)->first();
        $user->transactions()->attach($agentSixteen);

        $agentSeventeen = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Sunshine Rademann',
            'user_id' => 33,
            'client' => 'Sophie Turner',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Winterfell',
            'origin' => 'King\'s Landing',
            'vehicle_type_id' => 1, 
            'agency_id' => 2,
        ]);

        $user = User::where('id', 33)->first();
        $user->transactions()->attach($agentSeventeen);

        $agentEighteen = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Imelda Schweighart',
            'user_id' => 34,
            'client' => 'Isaac Wright',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Winterfell',
            'origin' => 'The Future and the Past',
            'vehicle_type_id' => 1, 
            'agency_id' => 2,
        ]);

        $user = User::where('id', 34)->first();
        $user->transactions()->attach($agentEighteen);

        $agentNineteen = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Thoreen Holverson',
            'user_id' => 35,
            'client' => 'Nikolaj Coster-Waldau',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Westeros',
            'origin' => 'Casterly Rock',
            'vehicle_type_id' => 1, 
            'agency_id' => 3,
        ]);

        $user = User::where('id', 35)->first();
        $user->transactions()->attach($agentNineteen);

        $agentTwenty = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Jenny Rae Hoffmann',
            'user_id' => 36,
            'client' => 'Akira Toriyama',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Manga Haven',
            'origin' => 'Okinawa',
            'vehicle_type_id' => 1, 
            'agency_id' => 3,
        ]);

        $user = User::where('id', 36)->first();
        $user->transactions()->attach($agentTwenty);

        $agentTwentyOne = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Ziellza Acosta',
            'user_id' => 37,
            'client' => 'Eichiro Oda',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'One Piece',
            'origin' => 'Office',
            'vehicle_type_id' => 1, 
            'agency_id' => 3,
        ]);

        $user = User::where('id', 37)->first();
        $user->transactions()->attach($agentTwentyOne);

        $agentTwentyTwo = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Melissa Mendez',
            'user_id' => 38,
            'client' => 'Ricardo Dalisay',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Infinity Towers',
            'origin' => 'ABS-CBN Studio',
            'vehicle_type_id' => 1, 
            'agency_id' => 3,
        ]);

        $user = User::where('id', 38)->first();
        $user->transactions()->attach($agentTwentyTwo);

        $agentTwentyThree = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Kristina Rose Navarro',
            'user_id' => 39,
            'client' => 'Lino Bartolome',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Jade Towers',
            'origin' => 'Jackie Residences',
            'vehicle_type_id' => 1, 
            'agency_id' => 3,
        ]);

        $user = User::where('id', 39)->first();
        $user->transactions()->attach($agentTwentyThree);

        $agentTwentyFour = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Noemi Mondigo',
            'user_id' => 40,
            'client' => 'Charlene Muhlach',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'AGA Towers',
            'origin' => 'Gonzales Two',
            'vehicle_type_id' => 1, 
            'agency_id' => 3,
        ]);

        $user = User::where('id', 40)->first();
        $user->transactions()->attach($agentTwentyFour);

        $agentTwentyFive = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Nica Dedicatoria',
            'user_id' => 41,
            'client' => 'Coleen Garcia',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'GMA Towers',
            'origin' => 'ABS-CBN Studio',
            'vehicle_type_id' => 1, 
            'agency_id' => 3,
        ]);

        $user = User::where('id', 41)->first();
        $user->transactions()->attach($agentTwentyFive);

        $agentTwentySix = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Babylyn Rosales',
            'user_id' => 42,
            'client' => 'Catriona Gray',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Lio Estate',
            'origin' => 'Ayala Alabang',
            'vehicle_type_id' => 1, 
            'agency_id' => 3,
        ]);

        $user = User::where('id', 42)->first();
        $user->transactions()->attach($agentTwentySix);

        $agentTwentySeven = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'April Laraya',
            'user_id' => 43,
            'client' => 'Pia Wurtzbach',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'BDO Towers',
            'origin' => 'Office',
            'vehicle_type_id' => 1, 
            'agency_id' => 3,
        ]);

        $user = User::where('id', 43)->first();
        $user->transactions()->attach($agentTwentySeven);

        $agent->save();
        $agentToo->save();
        $agentThree->save();

        $agentFour->save();
        $agentFive->save();
        $agentSix->save();

        $agentSeven->save();
        $agentEight->save();
        $agentNine->save();

        $agentTen->save();
        $agentEleven->save();
        $agentTwelve->save();

        $agentThirteen->save();
        $agentFourteen->save();
        $agentFifteen->save();

        $agentSixteen->save();
        $agentSeventeen->save();
        $agentEighteen->save();

        $agentNineteen->save();
        $agentTwenty->save();
        $agentTwentyOne->save();

        $agentTwentyTwo->save();
        $agentTwentyThree->save();
        $agentTwentyFour->save();

        $agentTwentyFive->save();
        $agentTwentySix->save();
        $agentTwentySeven->save();

        for($x = 17, $x <= 43, $x++){
            $user = User::where('id', $x)->first();
            $user->transactions()->attach($transaction);
        }
    }
}
