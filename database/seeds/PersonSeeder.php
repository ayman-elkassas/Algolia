<?php

use Illuminate\Database\Seeder;
use \App\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        //
        $faker=\Faker\Factory::create();

        for ($i=0;$i<5000;$i++){
            //new Person
            $person=new Person();

            $person->first_name=$faker->firstName;
            $person->last_name=$faker->lastName;
            $person->title=$faker->jobTitle;
            $person->company=$faker->company;
            $person->phone=$faker->phoneNumber;
            $person->email=$faker->safeEmail;
            $person->address=$faker->streetAddress;
            $person->address_2=$faker->secondaryAddress;
            $person->city=$faker->city;
            $person->state=$faker->state;
            $person->zip_code=$faker->postcode;
            $person->photo=$faker->imageUrl('200','200','cats');
            $person->save();
        }



    }
}
