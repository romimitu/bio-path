<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Agent::class,function(Faker\Generator $faker){
	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
	    'mobile'=>$faker->phoneNumber,
	    'address'=>$faker->Address,
	    'activity'=>$faker->boolean
	];

});


$factory->define(App\Billing::class,function(Faker\Generator $faker){
	return [
		'regno'=> $faker->postcode,
		'receipt'=> $faker->postcode,
		'name'=> $faker->name,
		'mobile'=> $faker->phoneNumber,
		'birthday'=> $faker->date,
		'country'=> $faker->country,
		'father'=> $faker->name($gender = null|'male'),
		'mother'=> $faker->name($gender = null|'female'),
		'medicaldate'=> $faker->date,
		'passport'=> $faker->swiftBicNumber,
		'slipdate'=> $faker->date,
		'recrutoffice'=> $faker->company,
		'gcc_slipdate'=> $faker->date,
		'gcc_expirydate'=> $faker->date,
		'recrutingcontact'=> $faker->phoneNumber,
		'reportdate'=> $faker->date,
		'medicalfee'=> $faker->year,
		'reporttime'=> $faker->time,
		'remarks'=> $faker->text,
		'password'=> 123,
		'image'=> $faker->imageUrl

	];

});
