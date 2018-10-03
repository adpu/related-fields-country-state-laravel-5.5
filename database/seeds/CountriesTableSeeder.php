<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        if(DB::table('countries')->get()->count() == 0) {

            DB::table('countries')->insert([
                [
                    'id' => '5',
                    'sortname' => 'AD',
                    'name' =>'Andorra'],
                [
                    'id' => '13',
                    'sortname' => 'AU',
                    'name' =>'Australia'],
                [
                    'id' => '14',
                    'sortname' => 'AT',
                    'name' =>'Austria'],
                [
                    'id' => '21',
                    'sortname' => 'BE',
                    'name' =>'Belgium'],
                [
                    'id' => '38',
                    'sortname' => 'CA',
                    'name' =>'Canada'],
                [
                    'id' => '44',
                    'sortname' => 'CN',
                    'name' =>'China'],
                [
                    'id' => '54',
                    'sortname' => 'HR',
                    'name' =>'Croatia'],
                [
                    'id' => '58',
                    'sortname' => 'DK',
                    'name' =>'Denmark'],
                [
                    'id' => '74',
                    'sortname' => 'FI',
                    'name' =>'Finland'],
                [
                    'id' => '75',
                    'sortname' => 'FR',
                    'name' =>'France'],
                [
                    'id' => '82',
                    'sortname' => 'DE',
                    'name' =>'Germany'],
                [
                    'id' => '98',
                    'sortname' => 'HK',
                    'name' =>'Hong Kong S.A.R.'],
                [
                    'id' => '100',
                    'sortname' => 'IS',
                    'name' =>'Iceland'],
                [
                    'id' => '105',
                    'sortname' => 'IE',
                    'name' =>'Ireland'],
                [
                    'id' => '109',
                    'sortname' => 'JP',
                    'name' =>'Japan'],
                [
                    'id' => '116',
                    'sortname' => 'KR',
                    'name' =>'Korea South'],
                [
                    'id' => '125',
                    'sortname' => 'LI',
                    'name' =>'Liechtenstein'],
                [
                    'id' => '127',
                    'sortname' => 'LU',
                    'name' =>'Luxembourg'],
                [
                    'id' => '128',
                    'sortname' => 'MO',
                    'name' =>'Macau S.A.R.'],
                [
                    'id' => '135',
                    'sortname' => 'MT',
                    'name' =>'Malta'],
                [
                    'id' => '145',
                    'sortname' => 'MC',
                    'name' =>'Monaco'],
                [
                    'id' => '155',
                    'sortname' => 'NL',
                    'name' =>'Netherlands The'],
                [
                    'id' => '157',
                    'sortname' => 'NZ',
                    'name' =>'New Zealand'],
                [
                    'id' => '164',
                    'sortname' => 'NO',
                    'name' =>'Norway'],
                [
                    'id' => '176',
                    'sortname' => 'PT',
                    'name' =>'Portugal'],
                [
                    'id' => '189',
                    'sortname' => 'SM',
                    'name' =>'San Marino'],
                [
                    'id' => '196',
                    'sortname' => 'SG',
                    'name' =>'Singapore'],
                [
                    'id' => '198',
                    'sortname' => 'SI',
                    'name' =>'Slovenia'],
                [
                    'id' => '211',
                    'sortname' => 'SE',
                    'name' =>'Sweden'],
                [
                    'id' => '212',
                    'sortname' => 'CH',
                    'name' =>'Switzerland'],
                [
                    'id' => '214',
                    'sortname' => 'TW',
                    'name' =>'Taiwan'],
                [
                    'id' => '217',
                    'sortname' => 'TH',
                    'name' =>'Thailand'],
                [
                    'id' => '230',
                    'sortname' => 'GB',
                    'name' =>'United Kingdom'],
                [
                    'id' => '231',
                    'sortname' => 'US',
                    'name' =>'United States']
            ]);
        }
    }
}
