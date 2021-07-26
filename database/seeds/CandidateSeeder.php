<?php

use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('candidate')->insert([
    			'name'          => $faker->name,
                'gender'        => 'Laki-Laki',
                'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'religion_id'   => $faker->numberBetween(1,5),
                'email'         => $faker->safeEmail(),
                'phone'         => $faker->phoneNumber,
                'identity_number' => 6767672251,
                'identity_file'   => 'askldjkalsjdkasjdkljasldkjasd',
                'bank_id'       => $faker->numberBetween(1,8),
                'bank_account'  => 123123123,
                'bank_name'     => 'Wayaw',
                'address'       => $faker->address,
                'education_id'  => $faker->numberBetween(1,6),
                'university_id' => $faker->numberBetween(17,40),
                'university_other' => 'Universitas Luar Biasa',
                'major'         => 'Teknik Informatika',
                'graduation_year' => $faker->numberBetween(2000, 2020),
                'semester'   => 1,
                'skill'      => '',
                'file_cv'    => '',
                'file_photo' => '',
                'source_information_id' => $faker->numberBetween(1, 6),
                'source_information_other' => 'LAIN-LAIN',
                'ranking'    => '',
                'instagram'  => '',
                'twitter'    => '',
                'facebook'   => '',
                'linkedin'   => '',
                'candidate_status_id' => $faker->numberBetween(1, 5),
                'created_by' => 'Admin',
                'updated_by' => ''
    		]);
 
    	}
    }
}
