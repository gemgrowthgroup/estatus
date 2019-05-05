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

        $agentThirteen = Transaction::create([
        	'reference' => strtoupper(str_random(6)),
            'requested_by' => 'Lynette Faustino',
            'user_id' => 28,
            'client' => 'Apollo Quiboloy',
            'from' => date('Y-m-d', $timestamp),
            'project' => 'Seventh Heaven Residences',
            'origin' => 'Davao',
            'vehicle_type_id' => 4, 
            'agency_id' => 2,
        ]);

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
    }
}
