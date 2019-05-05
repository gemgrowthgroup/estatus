<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Agency;
use App\Profile;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $directorRole = Role::where('id', 3)->first();
        $managerRole = Role::where('id', 4)->first();
        $agentRole = Role::where('id', 5)->first();
        $driverRole = Role::where('id', 6)->first();
        $userRole = Role::where('id', 7)->first();

        $agency = Agency::where('id', 1)->first();
        $agencyToo = Agency::where('id', 2)->first();
        $agencyThree = Agency::where('id', 3)->first();

        $admin = User::where('id', 2)->first();
        $adminToo = User::where('id', 3)->first();
        $adminThree = User::where('id', 4)->first();

        $director = User::create([
        	'name' => 'Roberto Bugay',
        	'email' => 'director@company.com',
            'email_verified_at' => now(),
        	'password' => bcrypt('director123'),
        ]);

        $directorToo = User::create([
            'name' => 'Jay Donayre',
            'email' => 'director2@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('director123')
        ]);

        $directorThree = User::create([
            'name' => 'Ingrid Ann Sabado',
            'email' => 'director3@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('director123')
        ]);

        $manager = User::create([
        	'name' => 'Marissa Marilag',
        	'email' => 'manager@company.com',
            'email_verified_at' => now(),
        	'password' => bcrypt('manager123')
        ]);

        $managerToo = User::create([
            'name' => 'Cara Suiza',
            'email' => 'manager2@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('manager123')
        ]);

        $managerThree = User::create([
            'name' => 'Earl Mangabat',
            'email' => 'manager3@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('manager123')
        ]);

        $managerFour = User::create([
            'name' => 'Denise Tan',
            'email' => 'manager4@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('manager123')
        ]);

        $managerFive = User::create([
            'name' => 'Julie Reyes',
            'email' => 'manager5@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('manager123')
        ]);

        $managerSix = User::create([
            'name' => 'Benjamin Canva',
            'email' => 'manager6@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('manager123')
        ]);

        $managerSeven = User::create([
            'name' => 'Anthony Mark Perez',
            'email' => 'manager7@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('manager123')
        ]);

        $managerEight = User::create([
            'name' => 'Bernadette Marvida',
            'email' => 'manager8@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('manager123')
        ]);

        $managerNine = User::create([
            'name' => 'Rowelyn Natividad',
            'email' => 'manager9@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('manager123')
        ]);

        $agent = User::create([
        	'name' => 'Kezia Barretto',
        	'email' => 'agent@company.com',
            'email_verified_at' => now(),
        	'password' => bcrypt('agent123')
        ]);

        $agentToo = User::create([
            'name' => 'Paulichelle Iligan',
            'email' => 'agent2@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentThree = User::create([
            'name' => 'Meg Salvador',
            'email' => 'agent3@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentFour = User::create([
            'name' => 'Geng Maderazo',
            'email' => 'agent4@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentFive = User::create([
            'name' => 'Anne Mateo',
            'email' => 'agent5@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentSix = User::create([
            'name' => 'Louise Belison',
            'email' => 'agent6@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentSeven = User::create([
            'name' => 'Abigail Martin',
            'email' => 'agent7@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentEight = User::create([
            'name' => 'Jennifer Baldovino',
            'email' => 'agent8@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentNine = User::create([
            'name' => 'Claudette Gabriel',
            'email' => 'agent9@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentTen = User::create([
            'name' => 'Jhasfer Tenorio',
            'email' => 'agent10@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentEleven = User::create([
            'name' => 'Ben Sy',
            'email' => 'agent11@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentTwelve = User::create([
            'name' => 'Artemio Cruz',
            'email' => 'agent12@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentThirteen = User::create([
            'name' => 'Lynette Faustino',
            'email' => 'agent13@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentFourteen = User::create([
            'name' => 'Shean Cleofas',
            'email' => 'agent14@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentFifteen = User::create([
            'name' => 'Arah Isabel',
            'email' => 'agent15@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentSixteen = User::create([
            'name' => 'Amber Nepomuceno',
            'email' => 'agent16@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentSeventeen = User::create([
            'name' => 'Sunshine Rademann',
            'email' => 'agent17@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentEighteen = User::create([
            'name' => 'Imelda Schweighart',
            'email' => 'agent18@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentNineteen = User::create([
            'name' => 'Thoreen Holverson',
            'email' => 'agent19@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentTwenty = User::create([
            'name' => 'Jenny Rae Hoffmann',
            'email' => 'agent20@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentTwentyOne = User::create([
            'name' => 'Ziellza Acosta',
            'email' => 'agent21@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentTwentyTwo = User::create([
            'name' => 'Melissa Mendez',
            'email' => 'agent22@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentTwentyThree = User::create([
            'name' => 'Kristina Rose Navarro',
            'email' => 'agent23@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentTwentyFour = User::create([
            'name' => 'Noemi Mondigo',
            'email' => 'agent24@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentTwentyFive = User::create([
            'name' => 'Nica Dedicatoria',
            'email' => 'agent25@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentTwentySix = User::create([
            'name' => 'Babylyn Rosales',
            'email' => 'agent26@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $agentTwentySeven = User::create([
            'name' => 'April Laraya',
            'email' => 'agent27@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('agent123')
        ]);

        $driver = User::create([
        	'name' => 'Nicanor Failed-Don',
        	'email' => 'driver@vehicles.com',
            'email_verified_at' => now(),
        	'password' => bcrypt('driver123')
        ]);

        $driverToo = User::create([
            'name' => 'Jobert Tatlong-Hari',
            'email' => 'driver2@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $driverThree = User::create([
            'name' => 'Romy Labrusca',
            'email' => 'driver3@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $driverFour = User::create([
            'name' => 'Nilo Varquez',
            'email' => 'driver4@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $driverFive = User::create([
            'name' => 'Tony Angeles',
            'email' => 'driver5@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $driverSix = User::create([
            'name' => 'Bobby Cruz',
            'email' => 'driver6@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $driverSeven = User::create([
            'name' => 'Bienvenido Alfaraz',
            'email' => 'driver7@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $driverEight = User::create([
            'name' => 'Menandro Bantug',
            'email' => 'driver8@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $driverNine = User::create([
            'name' => 'Wilhelmino Assuncion',
            'email' => 'driver9@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $chauffer = User::create([
            'name' => 'Peter Etcetera',
            'email' => 'driver10@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $chaufferToo = User::create([
            'name' => 'James Ingrato',
            'email' => 'driver11@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $chaufferThree = User::create([
            'name' => 'Barry Manilaw',
            'email' => 'driver12@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $pilot = User::create([
            'name' => 'Bruno March',
            'email' => 'driver23@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $pilotToo = User::create([
            'name' => 'Ed Chaaran',
            'email' => 'driver14@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);

        $pilotThree = User::create([
            'name' => 'Ludwig Van Beetlogin',
            'email' => 'driver15@vehicles.com',
            'email_verified_at' => now(),
            'password' => bcrypt('driver123')
        ]);
       


        $director->roles()->save($directorRole);
        $director->profile()->create([
            'name' => $director->name,
            'email' => $director->email,
            ]);
        $directorToo->roles()->save($directorRole);
        $directorToo->profile()->create([
            'name' => $directorToo->name, 
            'email' => $directorToo->email,
            ]);
        $directorThree->roles()->save($directorRole);
        $directorThree->profile()->create([
            'name' => $directorThree->name,
            'email' => $directorThree->email,
            ]);

        $manager->roles()->save($managerRole);
        $manager->profile()->create([
            'name' => $manager->name,
            'email' => $manager->email,
            ]);
        $managerToo->roles()->save($managerRole);
        $managerToo->profile()->create(['name' => $managerToo->name, 'email' => $managerToo->email,]);
        $managerThree->roles()->save($managerRole);
        $managerThree->profile()->create(['name' => $managerThree->name, 'email' => $managerThree->email,]);

        $managerFour->roles()->save($managerRole);
        $managerFour->profile()->create(['name' => $managerFour->name, 'email' => $managerFour->email,]);
        $managerFive->roles()->save($managerRole);
        $managerFive->profile()->create(['name' => $managerFive->name, 'email' => $managerFive->email,]);
        $managerSix->roles()->save($managerRole);
        $managerSix->profile()->create(['name' => $managerSix->name, 'email' => $managerSix->email,]);

        $managerSeven->roles()->save($managerRole);
        $managerSeven->profile()->create(['name' => $managerSeven->name, 'email' => $managerSeven->email,]);
        $managerEight->roles()->save($managerRole);
        $managerEight->profile()->create(['name' => $managerEight->name, 'email' => $managerEight->email,]);
        $managerNine->roles()->save($managerRole);
        $managerNine->profile()->create(['name' => $managerNine->name, 'email' => $managerNine->email,]);

        $agent->roles()->save($agentRole);
        $agent->profile()->create(['name' => $agent->name, 'email' => $agent->email,]);
        $agentToo->roles()->save($agentRole);
        $agentToo->profile()->create(['name' => $agentToo->name, 'email' => $agentToo->email,]);
        $agentThree->roles()->save($agentRole);
        $agentThree->profile()->create(['name' => $agentThree->name, 'email' => $agentThree->email,]);

        $agentFour->roles()->save($agentRole);
        $agentFour->profile()->create(['name' => $agentFour->name, 'email' => $agentFour->email,]);
        $agentFive->roles()->save($agentRole);
        $agentFive->profile()->create(['name' => $agentFive->name, 'email' => $agentFive->email,]);
        $agentSix->roles()->save($agentRole);
        $agentSix->profile()->create(['name' => $agentSix->name, 'email' => $agentSix->email,]);

        $agentSeven->roles()->save($agentRole);
        $agentSeven->profile()->create(['name' => $agentSeven->name, 'email' => $agentSeven->email,]);
        $agentEight->roles()->save($agentRole);
        $agentEight->profile()->create(['name' => $agentEight->name, 'email' => $agentEight->email,]);
        $agentNine->roles()->save($agentRole);
        $agentNine->profile()->create(['name' => $agentNine->name, 'email' => $agentNine->email,]);

        $agentTen->roles()->save($agentRole);
        $agentTen->profile()->create(['name' => $agentTen->name, 'email' => $agentTen->email,]);
        $agentEleven->roles()->save($agentRole);
        $agentEleven->profile()->create(['name' => $agentEleven->name, 'email' => $agentEleven->email,]);
        $agentTwelve->roles()->save($agentRole);
        $agentTwelve->profile()->create(['name' => $agentTwelve->name, 'email' => $agentTwelve->email,]);

        $agentThirteen->roles()->save($agentRole);
        $agentThirteen->profile()->create(['name' => $agentThirteen->name, 'email' => $agentThirteen->email,]);
        $agentFourteen->roles()->save($agentRole);
        $agentFourteen->profile()->create(['name' => $agentFourteen->name, 'email' => $agentFourteen->email,]);
        $agentFifteen->roles()->save($agentRole);
        $agentFifteen->profile()->create(['name' => $agentFifteen->name, 'email' => $agentFifteen->email,]);

        $agentSixteen->roles()->save($agentRole);
        $agentSixteen->profile()->create(['name' => $agentSixteen->name, 'email' => $agentSixteen->email,]);
        $agentSeventeen->roles()->save($agentRole);
        $agentSeventeen->profile()->create(['name' => $agentSeventeen->name, 'email' => $agentSeventeen->email,]);
        $agentEighteen->roles()->save($agentRole);
        $agentEighteen->profile()->create(['name' => $agentEighteen->name, 'email' => $agentEighteen->email,]);

        $agentNineteen->roles()->save($agentRole);
        $agentNineteen->profile()->create(['name' => $agentNineteen->name, 'email' => $agentNineteen->email,]);
        $agentTwenty->roles()->save($agentRole);
        $agentTwenty->profile()->create(['name' => $agentTwenty->name, 'email' => $agentTwenty->email,]);
        $agentTwentyOne->roles()->save($agentRole);
        $agentTwentyOne->profile()->create(['name' => $agentTwentyOne->name, 'email' => $agentTwentyOne->email,]);

        $agentTwentyTwo->roles()->save($agentRole);
        $agentTwentyTwo->profile()->create(['name' => $agentTwentyTwo->name, 'email' => $agentTwentyTwo->email,]);
        $agentTwentyThree->roles()->save($agentRole);
        $agentTwentyThree->profile()->create(['name' => $agentTwentyThree->name, 'email' => $agentTwentyThree->email,]);
        $agentTwentyFour->roles()->save($agentRole);
        $agentTwentyFour->profile()->create(['name' => $agentTwentyFour->name, 'email' => $agentTwentyFour->email,]);

        $agentTwentyFive->roles()->save($agentRole);
        $agentTwentyFive->profile()->create(['name' => $agentTwentyFive->name, 'email' => $agentTwentyFive->email,]);
        $agentTwentySix->roles()->save($agentRole);
        $agentTwentySix->profile()->create(['name' => $agentTwentySix->name, 'email' => $agentTwentySix->email,]);
        $agentTwentySeven->roles()->save($agentRole);
        $agentTwentySeven->profile()->create(['name' => $agentTwentySeven->name, 'email' => $agentTwentySeven->email,]);

        $driver->roles()->save($driverRole);
        $driver->profile()->create(['name' => $driver->name, 'email' => $driver->email,]);
        $driverToo->roles()->save($driverRole);
        $driverToo->profile()->create(['name' => $driverToo->name, 'email' => $driverToo->email,]);
        $driverThree->roles()->save($driverRole);
        $driverThree->profile()->create(['name' => $driverThree->name, 'email' => $driverThree->email,]);

        $driverFour->roles()->save($driverRole);
        $driverFour->profile()->create(['name' => $driverFour->name, 'email' => $driverFour->email,]);
        $driverFive->roles()->save($driverRole);
        $driverFive->profile()->create(['name' => $driverFive->name, 'email' => $driverFive->email,]);
        $driverSix->roles()->save($driverRole);
        $driverSix->profile()->create(['name' => $driverSix->name, 'email' => $driverSix->email,]);

        $driverSeven->roles()->save($driverRole);
        $driverSeven->profile()->create(['name' => $driverSeven->name, 'email' => $driverSeven->email,]);
        $driverEight->roles()->save($driverRole);
        $driverEight->profile()->create(['name' => $driverEight->name, 'email' => $driverEight->email,]);
        $driverNine->roles()->save($driverRole);
        $driverNine->profile()->create(['name' => $driverNine->name, 'email' => $driverNine->email,]);

        $chauffer->roles()->save($driverRole);
        $chauffer->profile()->create(['name' => $chauffer->name, 'email' => $chauffer->email,]);
        $chaufferToo->roles()->save($driverRole);
        $chaufferToo->profile()->create(['name' => $chaufferToo->name, 'email' => $chaufferToo->email,]);
        $chaufferThree->roles()->save($driverRole);
        $chaufferThree->profile()->create(['name' => $chaufferThree->name, 'email' => $chaufferThree->email,]);

        $pilot->roles()->save($driverRole);
        $pilot->profile()->create(['name' => $pilot->name, 'email' => $pilot->email,]);
        $pilotToo->roles()->save($driverRole);
        $pilotToo->profile()->create(['name' => $pilotToo->name, 'email' => $pilotToo->email,]);
        $pilotThree->roles()->save($driverRole);
        $pilotThree->profile()->create(['name' => $pilotThree->name, 'email' => $pilotThree->email,]);
       

        $admin->agencies()->save($agency);
        $adminToo->agencies()->save($agencyToo);
        $adminThree->agencies()->save($agencyThree);

        $director->agencies()->save($agency);
        $directorToo->agencies()->save($agencyToo);
        $directorThree->agencies()->save($agencyThree);

        $manager->agencies()->save($agency);
        $managerToo->agencies()->save($agency);
        $managerThree->agencies()->save($agency);

        $managerFour->agencies()->save($agencyToo);
        $managerFive->agencies()->save($agencyToo);
        $managerSix->agencies()->save($agencyToo);

        $managerSeven->agencies()->save($agencyThree);
        $managerEight->agencies()->save($agencyThree);
        $managerNine->agencies()->save($agencyThree);

        $agent->agencies()->save($agency);
        $agentToo->agencies()->save($agency);
        $agentThree->agencies()->save($agency);

        $agentFour->agencies()->save($agency);
        $agentFive->agencies()->save($agency);
        $agentSix->agencies()->save($agency);

        $agentSeven->agencies()->save($agency);
        $agentEight->agencies()->save($agency);
        $agentNine->agencies()->save($agency);

        $agentTen->agencies()->save($agencyToo);
        $agentEleven->agencies()->save($agencyToo);
        $agentTwelve->agencies()->save($agencyToo);

        $agentThirteen->agencies()->save($agencyToo);
        $agentFourteen->agencies()->save($agencyToo);
        $agentFifteen->agencies()->save($agencyToo);

        $agentSixteen->agencies()->save($agencyToo);
        $agentSeventeen->agencies()->save($agencyToo); 
        $agentEighteen->agencies()->save($agencyToo);

        $agentNineteen->agencies()->save($agencyThree);
        $agentTwenty->agencies()->save($agencyThree);
        $agentTwentyOne->agencies()->save($agencyThree);

        $agentTwentyTwo->agencies()->save($agencyThree);
        $agentTwentyThree->agencies()->save($agencyThree);
        $agentTwentyFour->agencies()->save($agencyThree);

        $agentTwentyFive->agencies()->save($agencyThree);
        $agentTwentySix->agencies()->save($agencyThree);
        $agentTwentySeven->agencies()->save($agencyThree); 

        $driver->agencies()->save($agency);
        $driverToo->agencies()->save($agency);
        $driverThree->agencies()->save($agency);

        $driverFour->agencies()->save($agencyToo);
        $driverFive->agencies()->save($agencyToo);
        $driverSix->agencies()->save($agencyToo);

        $driverSeven->agencies()->save($agencyThree);
        $driverEight->agencies()->save($agencyThree);
        $driverNine->agencies()->save($agencyThree);

        $chauffer->agencies()->save($agency);
        $chaufferToo->agencies()->save($agencyToo);
        $chaufferThree->agencies()->save($agencyThree);

        $pilot->agencies()->save($agency);
        $pilotToo->agencies()->save($agencyToo);
        $pilotThree->agencies()->save($agencyThree);

        // factory(App\User::class, 20)->create();
    }
}
