<?php

use Illuminate\Database\Seeder;
use App\Vehicle;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::truncate();

        Vehicle::create([
        	'name' => 'Ford Everest',
            'description' => 'Fortified with ultra-high strength steel and with 7 airbags, Everest gives you and your clients layers of protection. And then there\'s safety technology that\'s designed to prevent incidents in the first place. Like Everest\'s Forward Collision Warning, that uses smart sensors to help you avoid a collision or reduce impact speed.',
        	'vehicle_type_id' => 1,
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Nissan X-Trail',
        	'vehicle_type_id' => 1,
            'description' => 'Share the joys of your tripping in a bigger, bolder SUV. X-Trail delivers muscular styling, solid capabilities, next-level technologies and all the comfort and flexibility you need for action-packed tripping with clients.',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Toyota Fortuner',
            'description' => 'The Toyota Fortuner is built to withstand and protect the people inside the vehicle. The all-new Fortuner is equipped with Driver, Passenger, Side, and Curtain Shield Airbags, Active Traction Control, Vehicle Stability Control, and Hill-Start Assist Control for improved safety.',
        	'vehicle_type_id' => 1,
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Toyota Innova',
            'description' => 'The bold exteriors of 2018 Innova is paralleled with its equally impressive inner upholstery. Its new G variant interior is covered with leather, faux wood and suede-like inserts that resembles a plush cocoon-like environment to make your trippings comfortable and cozy.',
        	'vehicle_type_id' => 1,
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Mitsubishi Pajero',
            'description' => 'Nothing says power and prestige like Mitsubishi’s internationally acclaimed Pajero. Sleek yet rugged, this exclusive, all-around SUV is ready to take on any environment, from crowded city streets and bumpy back roads to unpaved paths just waiting to be explored. With premium features, exhilarating performance, and style that just won’t quit, you’ll only wish you’d discovered it sooner.',
        	'vehicle_type_id' => 1,
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Nissan Urvan',
            'description' => 'Either for trippings or other business use, the Nissan NV350 Urvan is a reliable workhorse that can comfortably accommodate 10 to 18 people, depending on the variant. The Nissan NV350 Urvan in the Philippines runs on a 2.5L diesel engine that can produce up to 129 hp and 356 Nm of torque.',
        	'vehicle_type_id' => 2,
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Hyundai Starex',
            'description' => 'No matter where you choose to go, Grand Starex\'s robust exterior design provides the ideal comfort for modern travelling and offers driving dynamics in style with innovative features including powerful 16" alloy wheels that brilliantly enhance its spacious and grand appearance.',
        	'vehicle_type_id' => 2,
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
            'name' => 'Mercedez S-Class',
            'description' => 'Often regarded as a celebrity’s choice, the Mercedes-Benz S-Class Saloon is one of those works of German art that’s well accustomed in front of flashing cameras and beaming spotlights. Often featured in many of our country’s mainstream lifestyle and leisure TV shows and magazines; the S-Class Saloon is a dream come true for some, and a goal to attain for many.',
            'vehicle_type_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Vehicle::create([
            'name' => 'Range Rover',
            'description' => 'The latest Range Rover, the fourth generation of the model, is as revolutionary as any in history, with a new aluminium monocoque chassis and an unashamedly luxurious agenda. That it is a luxury car first and 4x4 second is not to run down its capability offroad one jot, however.',
            'vehicle_type_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Vehicle::create([
            'name' => 'Jaguar I-Pace',
            'description' => 'More SUV than saloon, the I-Pace majors on interior quality and striking design, while offering a touring range of around 215 miles. With two 197bhp electric motors - one at each axle - it’s quick too, and not just in a straight line; with the I-Pace Jaguar has also engineered a fine-handling car.',
            'vehicle_type_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Vehicle::create([
            'name' => 'Tesla Model S',
            'description' => 'The first bespoke creation from electric car pioneer Elon Musk’s firm, the Model S is the machine that brought credibility, luxury and useful range to the electric car market. The Model S can take off with the ferocity of a super saloon, but even more wonderful is how precisely and effortlessly you can meter out its pace, and how quietly it can be delivered.',
            'vehicle_type_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Vehicle::create([
            'name' => 'Bell 206',
            'description' => 'The Bell 206 is a family of two-bladed, single- and twin-engined helicopters, manufactured by Bell Helicopter at its Mirabel, Quebec, plant. Originally developed as the Bell YOH-4 for the United States Army\'s Light Observation Helicopter program, it was not selected by the Army. Bell redesigned the airframe and successfully marketed the aircraft commercially as the five-place Bell 206A JetRanger.',
            'vehicle_type_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Vehicle::create([
            'name' => 'Eurocopter EC135',
            'description' => 'The Eurocopter EC135 (now Airbus Helicopters H135) is a twin-engine civil light utility helicopter produced by Airbus Helicopters (formerly known as Eurocopter). It is capable of flight under instrument flight rules (IFR) and is outfitted with a digital automatic flight control system (AFCS).',
            'vehicle_type_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Vehicle::create([
            'name' => 'AgustaWestland AW109',
            'description' => 'The AgustaWestland AW109 is a lightweight, twin-engine, eight-seat multi-purpose helicopter built by the Italian manufacturer Leonardo S.p.A. The rotorcraft had the distinction of being the first all-Italian helicopter to be mass-produced.',
            'vehicle_type_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
