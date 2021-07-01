<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = [
            [
                'book_name' => 'Wikipedia',
                'description' => 'Sint commodo veniam ad cillum occaecat aute consectetur Lorem. Occaecat adipisicing est ad do tempor ipsum. Eu eiusmod proident sit amet consectetur irure sunt consequat. Dolor anim nisi consequat nulla veniam magna duis ex aliquip veniam.',
                'img' => '.\public\wiki.jpg',
                'author_id' => '2',
            ],
            [
                'book_name' => 'Qui commodo',
                'description' => 'Et occaecat in ut pariatur elit qui. Enim do consectetur velit sunt minim velit eu est. Laboris cillum eiusmod ex aliquip. Voluptate in reprehenderit est ea duis duis magna.',
                'img' => '.\public\wiki.jpg',
                'author_id' => '1',
            ],
            [
                'book_name' => 'Et occaecat in',
                'description' => 'Excepteur dolore labore reprehenderit ex quis reprehenderit nulla deserunt ullamco ea exercitation aliqua aute. Fugiat esse pariatur fugiat exercitation incididunt adipisicing ex excepteur id aute labore ad fugiat nulla. Incididunt nulla nostrud in labore in pariatur irure ipsum ipsum exercitation.',
                'img' => '.\public\wiki.jpg',
                'author_id' => '3',
            ],
            [
                'book_name' => 'Excepteur dolore',
                'description' => 'Adipisicing officia reprehenderit consequat labore excepteur culpa laborum occaecat. Adipisicing anim deserunt reprehenderit exercitation in deserunt. Lorem ad aliquip exercitation aliquip esse adipisicing ullamco in ullamco deserunt ipsum anim. Cillum esse fugiat proident elit aliquip. Magna reprehenderit aliquip laborum cillum in veniam in nostrud dolore irure proident veniam nulla est.',
                'img' => '.\public\wiki.jpg',
                'author_id' => '4',
            ],
            [
                'book_name' => 'Adipisicing officia',
                'description' => 'Anim occaecat ad est nulla laboris laborum esse irure id ullamco adipisicing fugiat laborum nisi. Amet minim sit commodo proident adipisicing exercitation in elit laboris. Ex elit aliquip magna adipisicing veniam officia sit proident duis non. Eiusmod minim aute do ea sit veniam excepteur adipisicing quis exercitation commodo in laborum nulla. Commodo anim commodo et aliquip reprehenderit laboris aute ut cupidatat magna. Culpa veniam aliqua tempor adipisicing anim aliqua magna ipsum qui magna dolore elit dolor. Id exercitation quis esse laborum anim dolore ipsum reprehenderit do.',
                'img' => '.\public\wiki.jpg',
                'author_id' => '5',
            ],
        ];

        foreach ($book as $data) {
            \App\Models\Book::create($data);
        }
    }
}
