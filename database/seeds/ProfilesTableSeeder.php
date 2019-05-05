<?php

use App\Profile;
use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::truncate();

        $superAdmin = Profile::create([
        	'name' => 'Glenly Pilapil',
        	'user_id' => 1,
        ]);

        $admin = Profile::create([
        	'name' => 'Ray Carl Loseo',
        	'user_id' => 2,
        ]);

        $adminToo = Profile::create([
            'name' => 'Dan Tristan Bonbon',
            'user_id' => 3,
        ]);

        $adminThree = Profile::create([
            'name' => 'Stephen Samonte',
            'user_id' => 4,
        ]);

        $director = Profile::create([
        	'name' => 'Roberto Bugay',
        	'user_id' => 5,
        ]);

        $directorToo = Profile::create([
            'name' => 'Jay Donayre',
            'user_id' => 6,
        ]);

        $directorThree = Profile::create([
            'name' => 'Ingrid Ann Sabado',
            'user_id' => 7,
        ]);

        $manager = Profile::create([
        	'name' => 'Marissa Marilag',
        	'user_id' => 8,
        ]);

        $managerToo = Profile::create([
            'name' => 'Cara Suiza',
            'user_id' => 9,
        ]);

        $managerThree = Profile::create([
            'name' => 'Earl Mangabat',
            'user_id' => 10,
        ]);

        $managerFour = Profile::create([
            'name' => 'Denise Tan',
            'user_id' => 11,
        ]);

        $managerFive = Profile::create([
            'name' => 'Julie Reyes',
            'user_id' => 12,
        ]);

        $managerSix = Profile::create([
            'name' => 'Benjamin Canva',
            'user_id' => 13,
        ]);

        $managerSeven = Profile::create([
            'name' => 'Anthony Mark Perez',
            'user_id' => 14,
        ]);

        $managerEight = Profile::create([
            'name' => 'Bernadette Marvida',
            'user_id' => 15,
        ]);

        $managerNine = Profile::create([
            'name' => 'Rowelyn Natividad',
            'user_id' => 16,
        ]);

        $agent = Profile::create([
        	'name' => 'Kezia Barretto',
        	'user_id' => 17,
        ]);

        $agentToo = Profile::create([
            'name' => 'Paulichelle Iligan',
            'user_id' => 18,
        ]);

        $agentThree = Profile::create([
            'name' => 'Meg Salvador',
            'user_id' => 19,
        ]);

        $agentFour = Profile::create([
            'name' => 'Geng Maderazo',
            'user_id' => 20,
        ]);

        $agentFive = Profile::create([
            'name' => 'Anne Mateo',
            'user_id' => 20,
        ]);

        $agentSix = Profile::create([
            'name' => 'Louise Belison',
            'user_id' => 21,
        ]);

        $agentSeven = Profile::create([
            'name' => 'Abigail Martin',
            'user_id' => 22,
        ]);

        $agentEight = Profile::create([
            'name' => 'Jennifer Baldovino',
            'user_id' => 23,
        ]);

        $agentNine = Profile::create([
            'name' => 'Claudette Gabriel',
            'user_id' => 24,
        ]);

        $agentTen = Profile::create([
            'name' => 'Jhasfer Tenorio',
            'user_id' => 25,
        ]);

        $agentEleven = Profile::create([
            'name' => 'Ben Sy',
            'user_id' => 26,
        ]);

        $agentTwelve = Profile::create([
            'name' => 'Artemio Cruz',
            'user_id' => 27,
        ]);

        $agentThirteen = Profile::create([
            'name' => 'Lynette Faustino',
            'user_id' => 28,
        ]);

        $agentFourteen = Profile::create([
            'name' => 'Shean Cleofas',
            'user_id' => 29,
        ]);

        $agentFifteen = Profile::create([
            'name' => 'Arah Isabel',
            'user_id' => 30,
        ]);

        $agentSixteen = Profile::create([
            'name' => 'Amber Nepomuceno',
            'user_id' => 31,
        ]);

        $agentSeventeen = Profile::create([
            'name' => 'Sunshine Rademann',
            'user_id' => 32,
        ]);

        $agentEighteen = Profile::create([
            'name' => 'Imelda Schweighart',
            'user_id' => 33,
        ]);

        $agentNineteen = Profile::create([
            'name' => 'Thoreen Holverson',
            'user_id' => 34,
        ]);

        $agentTwenty = Profile::create([
            'name' => 'Jenny Rae Hoffmann',
            'user_id' => 35,
        ]);

        $agentTwentyOne = Profile::create([
            'name' => 'Ziellza Acosta',
            'user_id' => 36,
        ]);

        $agentTwentyTwo = Profile::create([
            'name' => 'Melissa Mendez',
            'user_id' => 37,
        ]);

        $agentTwentyThree = Profile::create([
            'name' => 'Kristina Rose Navarro',
            'user_id' => 38,
        ]);

        $agentTwentyFour = Profile::create([
            'name' => 'Noemi Mondigo',
            'user_id' => 39,
        ]);

        $agentTwentyFive = Profile::create([
            'name' => 'Nica Dedicatoria',
            'user_id' => 40,
        ]);

        $agentTwentySix = Profile::create([
            'name' => 'Babylyn Rosales',
            'user_id' => 41,
        ]);

        $agentTwentySeven = Profile::create([
            'name' => 'April Laraya',
            'user_id' => 42,
        ]);

        $driver = Profile::create([
        	'name' => 'Nicanor Failed-Don',
        	'user_id' => 43,
        ]);

        $driverToo = Profile::create([
            'name' => 'Jobert Tatlong-Hari',
            'user_id' => 44,
        ]);

        $driverThree = Profile::create([
            'name' => 'Romy Labrusca',
            'user_id' => 46,
        ]);

        $driverFour = Profile::create([
            'name' => 'Nilo Varquez',
            'user_id' => 47,
        ]);

        $driverFive = Profile::create([
            'name' => 'Tony Angeles',
            'user_id' => 48,
        ]);

        $driverSix = Profile::create([
            'name' => 'Bobby Cruz',
            'user_id' => 49,
        ]);

        $driverSeven = Profile::create([
            'name' => 'Bienvenido Alfaraz',
            'user_id' => 50,
        ]);

        $driverEight = Profile::create([
            'name' => 'Menandro Bantug',
            'user_id' => 51,
        ]);

        $driverNine = Profile::create([
            'name' => 'Wilhelmino Assuncion',
            'user_id' => 52,
        ]);

        $chauffer = Profile::create([
            'name' => 'Peter Etcetera',
            'user_id' => 53,
        ]);

        $chaufferToo = Profile::create([
            'name' => 'James Ingrato',
            'user_id' => 54,
        ]);

        $chaufferThree = Profile::create([
            'name' => 'Barry Manilaw',
            'user_id' => 55,
        ]);

        $pilot = Profile::create([
            'name' => 'Bruno March',
            'user_id' => 56,
        ]);

        $pilotToo = Profile::create([
            'name' => 'Ed Chaaran',
            'user_id' => 57,
        ]);

        $pilotThree = Profile::create([
            'name' => 'Ludwig Van Beetlogin',
            'user_id' => 58,
        ]);
    }
}
