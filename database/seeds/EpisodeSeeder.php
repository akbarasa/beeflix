<?php

use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//
    	DB::table('episodes')->insert([
    		 [
	        	'movies_id' => '1',
	        	'episode' => '1',
	        	'title' => 'Early',
	        ],
	        [
	        	'movies_id' => '1',
	        	'episode' => '2',
	        	'title' => 'Prolog',
	        ],
	        [
	        	'movies_id' => '1',
	        	'episode' => '3',
	        	'title' => 'Someone?',
	        ],
	        [
	        	'movies_id' => '1',
	        	'episode' => '4',
	        	'title' => 'Why me?',
	        ],
	        [
	        	'movies_id' => '1',
	        	'episode' => '5',
	        	'title' => 'Come on baby',
	        ],
	        [
	        	'movies_id' => '1',
	        	'episode' => '6',
	        	'title' => 'Something else',
	        ],
	        [
	        	'movies_id' => '1',
	        	'episode' => '7',
	        	'title' => 'Please Help!',
	        ],
	        [
	        	'movies_id' => '1',
	        	'episode' => '8',
	        	'title' => 'Where u go ?',
	        ],
	        [
	        	'movies_id' => '1',
	        	'episode' => '9',
	        	'title' => 'Come back with me!!!',
	        ],


	        [
	        	'movies_id' => '2',
	        	'episode' => '1',
	        	'title' => 'How are u ?',
	        ],
	        [
	        	'movies_id' => '2',
	        	'episode' => '2',
	        	'title' => 'Something wrong!',
	        ],
	        [
	        	'movies_id' => '2',
	        	'episode' => '3',
	        	'title' => 'Why?',
	        ],
	        [
	        	'movies_id' =>'2',
	        	'episode' => '4',
	        	'title' => 'Can u see me',
	        ],
	        [
	        	'movies_id' => '2',
	        	'episode' => '5',
	        	'title' => 'Look At me',
	        ],
	        [
	        	'movies_id' => '2',
	        	'episode' => '6',
	        	'title' => 'After that',
	        ],



	        [
	        	'movies_id' => '3',
	        	'episode' => '1',
	        	'title' => 'Who?',
	        ],
	        [
	        	'movies_id' => '3',
	        	'episode' => '2',
	        	'title' => 'Games',
	        ],
	        [
	        	'movies_id' => '3',
	        	'episode' => '3',
	        	'title' => 'Starving',
	        ],
	        [
	        	'movies_id' => '3',
	        	'episode' => '4',
	        	'title' => 'Love You',
	        ],
	        [
	        	'movies_id' => '3',
	        	'episode' => '5',
	        	'title' => 'Please!',
	        ],
	        [
	        	'movies_id' => '3',
	        	'episode' => '6',
	        	'title' => 'Wrong',
	        ],
            [
                'movies_id' => '3',
                'episode' => '7',
                'title' => 'Byeeee!',
            ],
            [
                'movies_id' => '3',
                'episode' => '8',
                'title' => 'God Bless Me',
            ],
            [
                'movies_id' => '3',
                'episode' => '9',
                'title' => 'Shut up',
            ],[
                'movies_id' => '3',
                'episode' => '10',
                'title' => 'Want u',
            ],




	        [
	        	'movies_id' => '4',
	        	'episode' => '1',
	        	'title' => 'START-UP',
	        ],
	        [
	        	'movies_id' => '4',
	        	'episode' => '2',
	        	'title' => 'FAMILY, FRIENDS, FOOL',
	        ],
	        [
	        	'movies_id' => '4',
	        	'episode' => '3',
	        	'title' => 'Angel',
	        ],
	        [
	        	'movies_id' => '4',
	        	'episode' => '4',
	        	'title' => 'Sandbox',
	        ],
	        [
	        	'movies_id' => '4',
	        	'episode' => '5',
	        	'title' => 'Hackathon',
	        ],
	        [
	        	'movies_id' => '4',
	        	'episode' => '6',
	        	'title' => 'Key Man',
	        ],
	         [
	        	'movies_id' => '4',
	        	'episode' => '7',
	        	'title' => 'Living room',
	        ],
	        [
	        	'movies_id' => '4',
	        	'episode' => '8',
	        	'title' => 'la-la-la',
	        ],
	        [
	        	'movies_id' => '4',
	        	'episode' => '9',
	        	'title' => 'Nice',
	        ],


	        [
	        	'movies_id' => '5',
	        	'episode' => '1',
	        	'title' => 'Boy Api',
	        ],
	          [
	        	'movies_id' => '5',
	        	'episode' => '2',
	        	'title' => 'Adududu',
	        ],
	        [
	        	'movies_id' => '5',
	        	'episode' => '3',
	        	'title' => 'Yaya',
	        ],




	        [
	        	'movies_id' => '6',
	        	'episode' => '1',
	        	'title' => 'Games',
	        ],
	          [
	        	'movies_id' => '6',
	        	'episode' => '2',
	        	'title' => 'Good',
	        ],
	        [
	        	'movies_id' => '6',
	        	'episode' => '3',
	        	'title' => 'Funny',
	        ],
	        [
	        	'movies_id' => '6',
	        	'episode' => '4',
	        	'title' => 'Cool',
	        ],
	        [
	        	'movies_id' => '6',
	        	'episode' => '5',
	        	'title' => 'yay-yay-yay',
	        ],


	        [
	        	'movies_id' => '7',
	        	'episode' => '1',
	        	'title' => 'Krusty-Krab',
	        ],
	          [
	        	'movies_id' => '7',
	        	'episode' => '2',
	        	'title' => 'Kraby-Patty',
	        ],
	        [
	        	'movies_id' => '7',
	        	'episode' => '3',
	        	'title' => 'Spongebob',
	        ],
	        [
	        	'movies_id' => '7',
	        	'episode' => '4',
	        	'title' => 'Patrick',
	        ],
	        [
	        	'movies_id' => '7',
	        	'episode' => '5',
	        	'title' => 'Plankton',
	        ],
	        [
	        	'movies_id' => '7',
	        	'episode' => '6',
	        	'title' => 'Squidward',
	        ],
	         [
	        	'movies_id' => '7',
	        	'episode' => '7',
	        	'title' => 'Sandy',
	        ],



	        [
	        	'movies_id' => '8',
	        	'episode' => '1',
	        	'title' => 'Upin',
	        ],
	          [
	        	'movies_id' => '8',
	        	'episode' => '2',
	        	'title' => 'Ipin',
	        ],
	        [
	        	'movies_id' => '8',
	        	'episode' => '3',
	        	'title' => 'Ehsan',
	        ],
	        [
	        	'movies_id' => '8',
	        	'episode' => '4',
	        	'title' => 'Mei-mei',
	        ],
	        [
	        	'movies_id' => '8',
	        	'episode' => '5',
	        	'title' => 'Ayam jago',
	        ],
	        [
	        	'movies_id' => '8',
	        	'episode' => '6',
	        	'title' => 'Tuk dalang',
	        ],




	        [
	        	'movies_id' => '9',
	        	'episode' => '519',
	        	'title' => 'Episode 519',
	        ],
	        [
	        	'movies_id' => '9',
	        	'episode' => '520',
	        	'title' => 'Episode 520',
	        ],
	        [
	        	'movies_id' => '9',
	        	'episode' => '521',
	        	'title' => 'Episode 521',
	        ],
	        [
	        	'movies_id' => '9',
	        	'episode' => '522',
	        	'title' => 'Episode 522',
	        ],
	        [
	        	'movies_id' => '9',
	        	'episode' => '523',
	        	'title' => 'Episode 523',
	        ],
	        [
	        	'movies_id' => '9',
	        	'episode' => '524',
	        	'title' => 'Episode 524',
	        ],
	        [
	        	'movies_id' => '9',
	        	'episode' => '525',
	        	'title' => 'Episode 525',
	        ],
	        [
	        	'movies_id' => '9',
	        	'episode' => '526',
	        	'title' => 'Episode 526',
	        ],
	        [
	        	'movies_id' => '9',
	        	'episode' => '527',
	        	'title' => 'Episode 527',
	        ],



	        [
	        	'movies_id' => '10',
	        	'episode' => '245',
	        	'title' => 'Episode 245',
	        ],
	        [
	        	'movies_id' => '10',
	        	'episode' => '246',
	        	'title' => 'Episode 246',
	        ],
	        [
	        	'movies_id' => '10',
	        	'episode' => '247',
	        	'title' => 'Episode 247',
	        ],
	        [
	        	'movies_id' => '10',
	        	'episode' => '248',
	        	'title' => 'Episode 248',
	        ],
	        [
	        	'movies_id' => '10',
	        	'episode' => '249',
	        	'title' => 'Episode 249',
	        ],
	        [
	        	'movies_id' => '10',
	        	'episode' => '250',
	        	'title' => 'Episode 250',
	        ],
	        [
	        	'movies_id' => '10',
	        	'episode' => '251',
	        	'title' => 'Episode 251',
	        ],
	        [
	        	'movies_id' => '10',
	        	'episode' => '252',
	        	'title' => 'Episode 252',
	        ],
	        [
	        	'movies_id' => '10',
	        	'episode' => '253',
	        	'title' => 'Episode 253',
	        ],



	        [
	        	'movies_id' => '11',
	        	'episode' => '346',
	        	'title' => 'Episode 346',
	        ],
	        [
	        	'movies_id' => '11',
	        	'episode' => '347',
	        	'title' => 'Episode 347',
	        ],
	        [
	        	'movies_id' => '11',
	        	'episode' => '348',
	        	'title' => 'Episode 348',
	        ],
	        [
	        	'movies_id' => '11',
	        	'episode' => '349',
	        	'title' => 'Episode 349',
	        ],
	        [
	        	'movies_id' => '11',
	        	'episode' => '350',
	        	'title' => 'Episode 350',
	        ],
	        [
	        	'movies_id' => '11',
	        	'episode' => '351',
	        	'title' => 'Episode 351',
	        ],
	        [
	        	'movies_id' => '11',
	        	'episode' => '352',
	        	'title' => 'Episode 352',
	        ],
	        [
	        	'movies_id' => '11',
	        	'episode' => '353',
	        	'title' => 'Episode 353',
	        ],
	        [
	        	'movies_id' => '11',
	        	'episode' => '354',
	        	'title' => 'Episode 354',
	        ],



	        [
	        	'movies_id' => '12',
	        	'episode' => '1',
	        	'title' => 'WOW',
	        ],
	        [
	        	'movies_id' => '12',
	        	'episode' => '2',
	        	'title' => 'GOOD',
	        ],
	        [
	        	'movies_id' => '12',
	        	'episode' => '3',
	        	'title' => 'FAR AWAY',
	        ],
	        [
	        	'movies_id' => '12',
	        	'episode' => '4',
	        	'title' => 'COME ON',
	        ],


    	]);
    }
}
