<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Agency;

class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::truncate();
        
        $alisi = Agency::create([
            'name' => 'ALISI',
            'about' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Quos ut, nulla veniam iusto facere magni exercitationem aut vero 
                        corporis non iste obcaecati assumenda laboriosam, itaque, debitis
                        voluptas eius explicabo deleniti.',
            'logo' => '/images/agencies/default.jpg',
            'established' => 2015,
            'address' => '6750 Building Ayala Avenue, Makati, Philippines',
            'phone' => '000-000-0000',
            'fax' => '000-000-0000',
            'email' => 'support@ayalaland.com.ph',
            'website' => 'www.atayala.com',
            'fb_page' => 'www.facebook.com/ayalainternational',
        ]);

        $century = Agency::create([
            'name' => 'Century Properties',
            'about' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Quos ut, nulla veniam iusto facere magni exercitationem aut vero 
                        corporis non iste obcaecati assumenda laboriosam, itaque, debitis
                        voluptas eius explicabo deleniti.',
            'logo' => '/images/agencies/default.jpg',
            'established' => 2015,
            'address' => 'Pacific Star Building, Makati Avenue, Makati, Philippines',
            'phone' => '000-000-0000',
            'fax' => '000-000-0000',
            'email' => 'support@centuryproperties.com.ph',
            'website' => 'www.centuryproperties.com',
            'fb_page' => 'www.facebook.com/centuryproperties',
        ]);

        $robinsons = Agency::create([
            'name' => 'Robinsons Land Corporation',
            'about' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Quos ut, nulla veniam iusto facere magni exercitationem aut vero 
                        corporis non iste obcaecati assumenda laboriosam, itaque, debitis
                        voluptas eius explicabo deleniti.',
            'logo' => '/images/agencies/default.jpg',
            'established' => 2015,
            'address' => '6750 Building Ayala Avenue, Makati, Philippines',
            'phone' => '000-000-0000',
            'fax' => '000-000-0000',
            'email' => 'support@robinsonsland.com.ph',
            'website' => 'www.robinsonsland.com',
            'fb_page' => 'www.facebook.com/robinsonsland',
        ]);

        // factory(App\Agency::class, 3)->create();
    }
}
