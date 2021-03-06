<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();

        // $user = User::factory()->create([
        //     'name' => 'Le Thinh',
        //     'email' => 'thinh@gmail.com'
        // ]);

        // Listing::factory(6)->create([
        //     'user_id' => $user->id
        // ]);
        // User::create([
        //     'name' => 'Le Thinh',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('123123'),
        //     'img' => '/storage/user-img/avatar.jpg',
        // ]);

        //Ballad

        Listing::create([
            'user_id' => '1',
            'title' => 'All of me',
            'tags' => 'Ballad',
            'logo' => 'logos/imagee1.jpg',
            'song' => 'playlist/Songg1.mp3',
            'description' => 'John Legend',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Comedy',
            'tags' => 'Ballad',
            'logo' => 'logos/imagee2.jpg',
            'song' => 'playlist/Songg2.mp3',
            'description' => 'Gen Hoshino',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'I Love You 3000',
            'tags' => 'Ballad',
            'logo' => 'logos/imagee3.jpg',
            'song' => 'playlist/Songg3.mp3',
            'description' => 'Stephanie Poetri',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'La la la',
            'tags' => 'Ballad',
            'logo' => 'logos/imagee4.jpg',
            'song' => 'playlist/Songg4.mp3',
            'description' => 'VONCKEN',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Love Yourself',
            'tags' => 'Ballad',
            'logo' => 'logos/imagee5.jpg',
            'song' => 'playlist/Songg5.mp3',
            'description' => 'Justin Bieber',
        ]);

//Hip Hop

        Listing::create([
            'user_id' => '1',
            'title' => 'Ch??m s??u',
            'tags' => 'HipHop',
            'logo' => 'logos/imagee6.jpg',
            'song' => 'playlist/Songg6.mp3',
            'description' => 'RPT MCK',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'DIOR',
            'tags' => 'HipHop',
            'logo' => 'logos/imagee7.jpg',
            'song' => 'playlist/Songg7.mp3',
            'description' => 'POP SMOKE',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'HIGHEST IN THE ROOM',
            'tags' => 'HipHop',
            'logo' => 'logos/imagee8.jpg',
            'song' => 'playlist/Songg8.mp3',
            'description' => 'Travis Scott',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Panda',
            'tags' => 'HipHop',
            'logo' => 'logos/imagee9.jpeg',
            'song' => 'playlist/Songg9.mp3',
            'description' => 'Desiigner',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Without Me',
            'tags' => 'HipHop',
            'logo' => 'logos/imagee10.jpg',
            'song' => 'playlist/Songg10.mp3',
            'description' => 'Eminem',
        ]);

// //MV
        Listing::create([
            'user_id' => '1',
            'title' => 'TH???NG ??I??N ',
            'tags' => 'MV',
            'logo' => 'logos/imgMV1.jpg',
            'song' => 'playlist/MV1.mp4',
            'description' => 'JUSTATEE x PH????NG LY',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Thanh Xu??n',
            'tags' => 'MV',
            'logo' => 'logos/imgMV2.jpg',
            'song' => 'playlist/MV2.mp4',
            'description' => 'Da LAB',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'We Dont Talk Anymore',
            'tags' => 'MV',
            'logo' => 'logos/imgMV3.jpg',
            'song' => 'playlist/MV3.mp4',
            'description' => 'Charlie Puth feat Selena Gomez',
        ]);
        Listing::create([
            'user_id' => '1',
            'title' => 'Ch??? l?? anh kh??ng bi???t',
            'tags' => 'MV',
            'logo' => 'logos/imgMV4.jpg',
            'song' => 'playlist/MV4.mp4',
            'description' => 'H??? Gia Kh??nh',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'H???t Th????ng C???n Nh???',
            'tags' => 'MV',
            'logo' => 'logos/imgMV5.jpg',
            'song' => 'playlist/MV5.mp4',
            'description' => '?????c Ph??c',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'L?? Xa L??a C??nh',
            'tags' => 'MV',
            'logo' => 'logos/imgMV6.jpg',
            'song' => 'playlist/MV6.mp4',
            'description' => 'L?? B???o b??nh',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Ph??? T??nh',
            'tags' => 'MV',
            'logo' => 'logos/imgMV7.jpg',
            'song' => 'playlist/MV7.mp4',
            'description' => 'Tr???nh ????nh Quang',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Thay T??i Y??u C?? ???y',
            'tags' => 'MV',
            'logo' => 'logos/imgMV8.jpg',
            'song' => 'playlist/MV8.mp4',
            'description' => 'Thanh H??ng',
        ]);

//POP
        Listing::create([
            'user_id' => '1',
            'title' => '7 Years',
            'tags' => 'Pop',
            'logo' => 'logos/imagee11.jpg',
            'song' => 'playlist/Songg11.mp3',
            'description' => 'Lukas Graham',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Intentions',
            'tags' => 'Pop',
            'logo' => 'logos/imagee12.jpg',
            'song' => 'playlist/Songg12.mp3',
            'description' => 'Justin Bieber',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Light Switch',
            'tags' => 'Pop',
            'logo' => 'logos/imagee13.png',
            'song' => 'playlist/Songg13.mp3',
            'description' => 'Charlie Puth',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Runaway Baby',
            'tags' => 'Pop',
            'logo' => 'logos/imagee14.png',
            'song' => 'playlist/Songg14.mp3',
            'description' => 'Bruno Mars',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Shape of You',
            'tags' => 'Pop',
            'logo' => 'logos/imagee15.jpg',
            'song' => 'playlist/Songg15.mp3',
            'description' => 'Ed Sheeran',
        ]);

//EDM
        Listing::create([
            'user_id' => '1',
            'title' => 'Defqwop',
            'tags' => 'EDM',
            'logo' => 'logos/imagee16.jpg',
            'song' => 'playlist/Songg16.mp3',
            'description' => 'Heart Afire (feat. Strix)',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Best of Me',
            'tags' => 'EDM',
            'logo' => 'logos/imagee17.jpg',
            'song' => 'playlist/Songg17.mp3',
            'description' => 'NEFFEX',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Safe And Sound',
            'tags' => 'EDM',
            'logo' => 'logos/imagee18.jpg',
            'song' => 'playlist/Songg18.mp3',
            'description' => 'Different Heaven',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'No No No',
            'tags' => 'EDM',
            'logo' => 'logos/imagee19.jpg',
            'song' => 'playlist/Songg19.mp3',
            'description' => 'TheFatRat',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Vicetone',
            'tags' => 'EDM',
            'logo' => 'logos/imagee20.jpg',
            'song' => 'playlist/Songg20.mp3',
            'description' => 'Way Back (feat. Cozi Zuehlsdorff)',
        ]);

//Nhac tre

        Listing::create([
            'user_id' => '1',
            'title' => 'C?? Ph??',
            'tags' => 'Nh???c tr???',
            'logo' => 'logos/imagee21.jpg',
            'song' => 'playlist/Songg21.mp3',
            'description' => 'MIN',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => '????i Mi Em ??ang U S???u',
            'tags' => 'Nh???c tr???',
            'logo' => 'logos/imagee22.jpg',
            'song' => 'playlist/Songg22.mp3',
            'description' => '????ng Nhi',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Du H??nh V??o T??m Tr??',
            'tags' => 'Nh???c tr???',
            'logo' => 'logos/imagee23.jpg',
            'song' => 'playlist/Songg23.mp3',
            'description' => 'GiGi H????ng Giang, K-ICM',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'G???i Em',
            'tags' => 'Nh???c tr???',
            'logo' => 'logos/imagee24.jpg',
            'song' => 'playlist/Songg24.mp3',
            'description' => 'Hoa Vinh',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'T??m S??? Tu???i 30',
            'tags' => 'Nh???c tr???',
            'logo' => 'logos/imagee25.jpg',
            'song' => 'playlist/Songg25.mp3',
            'description' => 'Tr???nh Th??ng B??nh',
        ]);

//Nhac tru tinh

        Listing::create([
            'user_id' => '1',
            'title' => 'Bi???n T??nh',
            'tags' => 'Nh???c tr??? t??nh',
            'logo' => 'logos/imagee26.jpg',
            'song' => 'playlist/Songg26.mp3',
            'description' => 'H??ng C?????ng',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'L??? ????',
            'tags' => 'Nh???c tr??? t??nh',
            'logo' => 'logos/imagee27.jpg',
            'song' => 'playlist/Songg27.mp3',
            'description' => 'Giang H???ng Ng???c',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'M???t Th???i ???? Xa',
            'tags' => 'Nh???c tr??? t??nh',
            'logo' => 'logos/imagee28.jpg',
            'song' => 'playlist/Songg28.mp3',
            'description' => 'Quang D??ng',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'N??m 17 Tu???i',
            'tags' => 'Nh???c tr??? t??nh',
            'logo' => 'logos/imagee29.jpg',
            'song' => 'playlist/Songg29.mp3',
            'description' => 'Ng???c B???o Vy',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Ng?? ?????ng',
            'tags' => 'Nh???c tr??? t??nh',
            'logo' => 'logos/imagee30.jpg',
            'song' => 'playlist/Songg30.mp3',
            'description' => 'Nguy???n H???ng Nhung',
        ]);

//Nhac US UK

        Listing::create([
            'user_id' => '1',
            'title' => 'A Driver Saved My  Night',
            'tags' => 'Nh???c US-UK',
            'logo' => 'logos/imagee31.jpg',
            'song' => 'playlist/Songg31.mp3',
            'description' => 'Sigrid',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Honest',
            'tags' => 'Nh???c US-UK',
            'logo' => 'logos/imagee32.jpg',
            'song' => 'playlist/Songg32.mp3',
            'description' => 'Justin Bieber',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'Provenza',
            'tags' => 'Nh???c US-UK',
            'logo' => 'logos/imagee33.jpg',
            'song' => 'playlist/Songg33.mp3',
            'description' => 'Karol G',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'We Are',
            'tags' => 'Nh???c US-UK',
            'logo' => 'logos/imagee34.jpg',
            'song' => 'playlist/Songg34.mp3',
            'description' => 'Jon Batiste',
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'What would you do',
            'tags' => 'Nh???c US-UK',
            'logo' => 'logos/imagee35.jpg',
            'song' => 'playlist/Songg35.mp3',
            'description' => 'Tate McRae',
        ]);

    }
}
