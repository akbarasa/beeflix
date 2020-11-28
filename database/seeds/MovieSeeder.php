<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
        	//drama
            [
                'title' => '18 Again',
                'photo' => '18again.jpg',
                'description' => 'Jung Da-Jung (Kim Ha-Neul) is married to 37-year-old Hong Dae-Young (Yoon Sang-Hyun). They have have 18-year-old son and daughter. Jung Da-Jung works hard as a rookie announcer and she has a warm heart. She becomes completely fed up with her husband and is unable to deal with him anymore. Hong Dae-Young got fired from his job and he is looked down upon by his family. Jung Da-Jung hands him divorce papers. Meanwhile, Hong Dae-Young looks at himself as an ordinary jobless middle-aged man. He regrets his life. At that moment, his body changes into that of an 18-year-old year old person, while his mind is still that of his 37-year-old self. Back in his teenage days, Hong Dae-Young (Lee Do-Hyun) was an excellent basketball player and also popular. Now, with his regained 18-year-old body, he changes his name to Ko Woo-Young and begins to live a new life.',
                'rating' => '4',
                'genre_id' => '1',
            ],
            [
                'title' => 'Do Do Sol Sol La La Sol',
                'photo' => 'dodosolsollalasol.jpg',
                'description' => "Goo Ra-Ra (Go Ara) is a pianist. She has bright personality. Something happened that caused her to become bankrupt. She doesn't have anything now and she is frustrated with her situation. Sunwoo Joon (Lee Jae-Wook) doesn't care what other people think about him, but he has a warm heart. He is free spirited and doesn't have a specific dream or goal for his life. He makes ends meet by working part-time jobs. Goo Ra-Ra and Sunwoo Joon meet at the small private piano academy LaLa Land in a country village.",
                'rating' => '3',
                'genre_id' => '1',
            ],
            [
                'title' => 'Private Lives',
                'photo' => 'privatelives.jpg',
                'description' => 'Swindlers come across a secret of the nation and try to reveal the secret. They must go up against a large company by using all of their skills. Lee Jeong-Hwan (Ko Gyung-Pyo) is a team leader for the major corporation. He looks like an ordinary company employee, but he is a mysterious figure. Cha Joo-Eun (Seohyun) is a swindler, who has the looks of a sweet & innocent woman. She supports herself with her crimes. Jeong Bok-Gi (Kim Hyo-Jin) is a professional swindler. She often targets other swindlers. She is elegant and also charismatic. Kim Jae-Wook (Kim Young-Min) is Jeong Bok-Gi’s partner in crime.',
                'rating' => '3',
                'genre_id' => '1',
            ],
            [
                'title' => 'Start Up',
                'photo' => 'startup.jpg',
                'description' => 'Needing to make $90k to open her own business, Seo Dal-Mi drops out of a university and takes up part-time work. She dreams of becoming someone like Steve Jobs. Nam Do-San is the founder of Samsan Tech. He is excellent with mathematics. He started Samsan Tech two years ago, but the company is not doing well. Somehow, Nam Do-San becomes Seo Dal-Mi’s first love. They cheer each others start and growth.',
                'rating' => '4',
                'genre_id' => '1',
            ],
            //kids
          	[
                'title' => 'BoboiBoy',
                'photo' => 'boboboy.jpg',
                'description' => 'A teenage boy has superpowers that is based on elementals. He has the ability to separate into three. With his friends, Ying, Hannah/Yaya, Gopal and Fang, they form a team and fight to protect the Earth from alien threats who aim to conquer the Earth',
                'rating' => '3',
                'genre_id' => '2',
            ],
            [
                'title' => "Blue's Clues",
                'photo' => 'blueclues.jpg',
                'description' => "An animated preschool television series broadcast on the Nick Jr. Channel. It follows the adventures of Blue, a blue spotted puppy, her owner, Steve and Blue's friends. ",
                'rating' => '3',
                'genre_id' => '2',
            ],
            [
                'title' => 'Spongebob Squarepants',
                'photo' => 'spongebob.jpg',
                'description' => "The character-driven cartoon chronicles the nautical and often nonsensical adventures of SpongeBob, an incurably optimistic and earnest sea sponge, and his underwater friends. Dwelling a few fathoms beneath the tropical isle of Bikini Atoll in the sub-surface city of Bikini Bottom, SpongeBob lives in a two-story pineapple. Instead of taking the logical approach to everyday challenges, SpongeBob approaches life in a wayward and unconventional way. Whether searching for the ultimate spatula to perfect his burger flipping technique at the Krusty Krab or just hanging out with his best friend Patrick (an amiable starfish), SpongeBob's good intentions and overzealous approach to life usually create chaos in his underwater world.",
                'rating' => '3',
                'genre_id' => '2',
            ],
            [
                'title' => 'Upin Ipin',
                'photo' => 'upinipin.jpg',
                'description' => "Upin and Ipin are five-year-old Malaysian twins who reside with their elder sister Ros and grandmother Uda (whom they call Opah) in a village house in Kampung Durian Runtuh. They have lost their parents in their infancy. Upin and Ipin study in the village's Tadika Mesra (kindergarten), with a group of classmates, including the adorable and right-thinking Mei Mei, a joker and poetic Jarjit Singh, the clumsy and short-tempered Ehsan, an easygoing and sarcastic Fizi (Ehsan's cousin), and an entrepreneurial and meticulous Mail.",
                'rating' => '3',
                'genre_id' => '2',
            ],
            // tvshow
            [
                'title' => 'Running Man',
                'photo' => 'runningman.jpg',
                'description' => 'Running Man is a reality-variety show that stars Yoo Jae Suk and many other celebrities. In each episode, they must complete missions at famous landmarks to win the race. The missions almost always feature running, hence the title, and the name tag ripping game is filled with tension as each member struggles to survive.',
                'rating' => '5',
                'genre_id' => '3',
            ],
            [
                'title' => "Knowing Bros",
                'photo' => 'knowingbros.jpg',
                'description' => "It is a sitcom talk show program set in a school. In each episode, new celebrity guests appear as transfer students at the 'Brother School' where seven mischievous brother students wait for them. The show consists of several dynamic sessions. In ‘Guess About Me,’ Celebrity guests create random, secret questions about themselves. Then the hosts called 'Knowledgeable Bros' make humorous guesses to get the answers. Another session is ‘Bros Inside’ an ad-lib skit show, where entertainers are given only the setting for a story and have to perform completely ad-libbed skits.",
                'rating' => '4',
                'genre_id' => '3',
            ],
            [
                'title' => 'The Return of Superman',
                'photo' => 'tros.jpg',
                'description' => "Celebrity dads are left to care for their kids alone for 48 hours without the help of anyone, while their wives leave the home to enjoy some relaxing time off. The wives are shown leaving the home before the 48 hours begins and coming back to greet their family once the 48 hours have ended. During the 48 hours the dads and children are either doing a task the wives have written out for the dads to complete or the dads exploring new activities with their kids. Occasionally celebrity friends of the dads will stop by to interact with the kids.",
                'rating' => '3',
                'genre_id' => '3',
            ],
            [
                'title' => 'ATEEZ Fever Road',
                'photo' => 'ateezfeverroad.jpg',
                'description' => "The upcoming show will feature the premise of the ATEEZ members discovering a secret space in which a mysterious figure left hidden missions for them two years in the past. The idols must play a variety of entertaining games as they solve the mystery of who left these missions for them and why they have caused certain events to occur.",
                'rating' => '5',
                'genre_id' => '3',
            ],
        ]);
    }
}
