<?php

use App\User;
use Illuminate\Database\Seeder;

class LabTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //6 line
        factory(\App\LabType::class)->create([
            'lab_name'          => 'Global EMC Inc.',
            'country'           => 'canada',
            'accreditation'     => 'NVLAP',
            'city'              => 'Richmond Hill, Ontario',
            'contact'           => 'Garry Lee',
            'contact_title'     => 'President',
            'email_address'     => 'garry@globaladvantage.ca',
            'address'           => '180 Brodie Drive, Unit 2,Richmond Hill, Ontario L4B 3K8',
            'website'           => 'www.globalemclabs.com',
            'status'            => \App\LabType::STATUS['c'],
            'price_day'         => 1800,
            'processing_fee'    => 100,
            'total_price'       => 1900,
            'currency'          => \App\LabType::CURRENCIES['usd'],
            'test_site'         => '3-m semi-anechoic',
        ]);

        //7 line
        factory(\App\LabType::class)->create([
            'lab_name'          => 'MET Laboratories Inc.',
            'country'           => 'usa',
            'accreditation'     => 'NVLAP',
            'city'              => 'Austin TX',
            'contact'           => 'Robert Frier',
            'contact_title'     => 'Lab Director',
            'email_address'     => 'rfrier@metlabs.com',
            'address'           => '13301 McCallen Pass, Austin, TX 78753',
            'website'           => 'www.metlabs.com',
            'status'            => \App\LabType::STATUS['c'],
            'price_day'         => 1800,
            'total_price'       => 1800,
            'currency'          => \App\LabType::CURRENCIES['usd'],
        ]);

        //8 line
        factory(\App\LabType::class)->create([
            'lab_name'          => 'MET Laboratories Inc.',
            'country'           => 'usa',
            'accreditation'     => 'NVLAP',
            'city'              => 'Santa Clara, CA',
            'contact'           => 'Robert Frier',
            'contact_title'     => 'President',
            'email_address'     => 'rfrier@metlabs.com',
            'address'           => '3162 Belick Street, Santa Clara, CA 95054',
            'website'           => 'www.metlabs.com',
            'status'            => \App\LabType::STATUS['c'],
            'price_day'         => 1800,
            'total_price'       => 1800,
            'currency'          => \App\LabType::CURRENCIES['usd'],
        ]);

        //9 line
        factory(\App\LabType::class)->create([
            'lab_name'          => 'MET Laboratories Inc.',
            'country'           => 'usa',
            'accreditation'     => 'A2LA',
            'city'              => 'Union City, CA',
            'contact'           => 'Jon Fuhrman',
            'contact_title'     => 'Quality Manager',
            'email_address'     => 'jfuhrman@metlabs.com',
            'address'           => '33439 Western Avenue, Union City, CA 94587',
            'website'           => 'www.metlabs.com',
            'status'            => \App\LabType::STATUS['c'],
            'price_day'         => 1800,
            'total_price'       => 1800,
            'currency'          => \App\LabType::CURRENCIES['usd'],
            'test_site'         => '10 m semi-anechoic',
        ]);

        //11
        factory(\App\LabType::class)->create([
            'lab_name'          => 'TUV Rheinland of North America Inc.',
            'country'           => 'usa',
            'accreditation'     => 'NVLAP',
            'city'              => 'Rochester NY',
            'contact'           => 'Bruce Fagley',
            'contact_title'     => 'EMC Program Manager',
            'email_address'     => 'bfagley@us.tuv.com',
            'address'           => '336 Initiative Drive, Bldg. 5, Rochester, NY 14624',
            'website'           => 'http://www.tuv.com/en/usa/home.jsp',
            'status'            => \App\LabType::STATUS['c'],
            'price_day'         => 1800,
            'total_price'       => 1800,
            'currency'          => \App\LabType::CURRENCIES['usd'],
        ]);

        //12
        factory(\App\LabType::class)->create([
            'lab_name'          => 'TUV Rheinland of North America Inc.',
            'country'           => 'usa',
            'accreditation'     => 'NVLAP',
            'city'              => 'Newtown, CT',
            'contact'           => 'Bruce Fagley',
            'contact_title'     => 'EMC Program Manager',
            'email_address'     => 'bfagley@us.tuv.com',
            'address'           => '12 Commerce Road, Newtown, CT 06470-1607',
            'website'           => 'http://www.tuv.com/en/usa/home.jsp',
            'status'            => \App\LabType::STATUS['c'],
            'price_day'         => 1800,
            'total_price'       => 1800,
            'currency'          => \App\LabType::CURRENCIES['usd'],
        ]);

        //13
        factory(\App\LabType::class)->create([
            'lab_name'          => 'TUV Rheinland of North America Inc.',
            'country'           => 'usa',
            'accreditation'     => 'NVLAP',
            'city'              => 'Youngsville, NC',
            'contact'           => 'Michael Moranha',
            'contact_title'     => 'EMC/Telecom Lab Manager',
            'email_address'     => 'mmoranha@us.tuv.com',
            'address'           => '762 Park Avenue, Youngsville, NC 27596',
            'website'           => 'http://www.tuv.com/en/usa/home.jsp',
            'status'            => \App\LabType::STATUS['c'],
            'price_day'         => 1800,
            'total_price'       => 1800,
            'currency'          => \App\LabType::CURRENCIES['usd'],
            'test_site'         => '5m semi-anechoic',
        ]);

        //15
        factory(\App\LabType::class)->create([
            'lab_name'          => 'Rhein Tech Laboratories, Inc.',
            'country'           => 'usa',
            'accreditation'     => 'ACLASS',
            'city'              => 'Herndon, VA',
            'contact'           => 'Richare McMurray',
//            'contact_title'     => 'EMC/Telecom Lab Manager',
            'email_address'     => 'ACLASSinfo@rheintech.com',
            'address'           => '360 Herndon Parkway, Suite 1400, Herndon, VA 20170',
            'website'           => 'www.rheintech.com',
            'status'            => \App\LabType::STATUS['tbc'],
            'price_day'         => 1800,
            'processing_fee'    => 100,
            'total_price'       => 1900,
            'currency'          => \App\LabType::CURRENCIES['usd'],
            'test_site'         => '3m OATS',
        ]);

        //16
        factory(\App\LabType::class)->create([
            'lab_name'          => 'TUV Rheinland of North America Inc.',
            'country'           => 'usa',
            'accreditation'     => 'NVLAP',
            'city'              => 'Santa Clara, CA',
            'contact'           => 'Kent Chesley',
            'contact_title'     => 'EMC Program Manager',
            'email_address'     => 'kchesley@us.tuv.com',
            'address'           => '2305 Mission Collage Blvd., Suite 105, Santa Clara, CA 95054',
            'website'           => 'http://www.tuv.com/en/usa/home.jsp',
            'status'            => \App\LabType::STATUS['tbc'],
            'price_day'         => 1800,
            'total_price'       => 1800,
            'currency'          => \App\LabType::CURRENCIES['usd'],
        ]);

        //17
        factory(\App\LabType::class)->create([
            'lab_name'          => 'TUV Rheinland of North America Inc.',
            'country'           => 'usa',
            'accreditation'     => 'NVLAP',
            'city'              => 'Pleasanton, CA',
            'contact'           => 'Kent Chesley',
            'contact_title'     => 'EMC Program Manager',
            'email_address'     => 'kchesley@us.tuv.com',
            'address'           => '1279 Quarry Lane, Pleasanton, CA 94566',
            'website'           => 'http://www.tuv.com/en/usa/home.jsp',
            'status'            => \App\LabType::STATUS['tbc'],
            'price_day'         => 1800,
            'total_price'       => 1800,
            'currency'          => \App\LabType::CURRENCIES['usd'],
            'test_site'         => '5m semi-anechoic',

        ]);

        //19
        factory(\App\LabType::class)->create([
            'lab_name'          => 'mikes-testingpartners gmbh',
            'country'           => 'germany',
            'accreditation'     => 'NVLAP',
            'city'              => 'D-94342 Strasskirchen, Germany',
            'contact'           => 'Harald Buchwald',
//            'contact_title'     => 'EMC Program Manager',
            'email_address'     => 'harald.buchwald@mikes-tp.com ',
            'address'           => 'Ohmstrasse 2-4, D-94342 Strasskirchen, Germany',
            'website'           => 'www.mikes-tp.com',
            'status'            => \App\LabType::STATUS['c'],
            'price_day'         => 1400,
            'processing_fee'    => 100,
            'total_price'       => 1500,
            'currency'          => \App\LabType::CURRENCIES['eur'],
        ]);

        //21
        factory(\App\LabType::class)->create([
            'lab_name'          => 'Bay Area Compliance Laboratories Corp.',
            'country'           => 'china',
            'accreditation'     => '2.948',
            'city'              => 'Chengdu, China',
            'contact'           => 'John Chan',
            'contact_title'     => 'President',
            'email_address'     => 'john.chan@baclcorp.com',
            'address'           => '5040, HuiLongWan Plaza, No. 1, ShaWan Road,JinNiu District',
            'website'           => 'www.baclcorp.com',
            'status'            => \App\LabType::STATUS['tbc'],
            'price_day'         => 600,
            'processing_fee'    => 60,
            'total_price'       => 650,
            'currency'          => \App\LabType::CURRENCIES['rmb'],
        ]);
    }
}
