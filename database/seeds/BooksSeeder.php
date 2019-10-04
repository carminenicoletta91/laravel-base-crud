<?php

use Illuminate\Database\Seeder;
use App\Model\Book;
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Book::class,10) -> create();
    }
}
