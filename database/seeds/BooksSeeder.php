<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;
use App\BorrowLog;
use App\User;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $author1 = Author::create(['name'=>'Mohammad Fauzil Adhim']);
        $author2 = Author::create(['name'=>'Salim A. Fillah']);
    	$author3 = Author::create(['name'=>'Aam Amiruddin']);

    	$book1 = Book::create(['title'=>'Kupinang Engkau dengan Hamdallah', 'amount'=>3, 'author_id'=>$author1->id]);
    	$book2 = Book::create(['title'=>'Jalan cinta Para Pejuang', 'amount'=>2, 'author_id'=>$author2->id]);
    	$book3 = Book::create(['title'=>'Membingkai Surga Dalam Rumah Tangga', 'amount'=>4, 'author_id'=>$author3->id]);
    	$book4 = Book::create(['title'=>'Cinta & Seks Rumah Tangga Muslim', 'amount'=>3, 'author_id'=>$author3->id]);

        $member = User::where('email','member@gmail.com')->first();
        BorrowLog::create(['user_id'=>$member->id,'book_id'=>$book1->id,'is_returned'=>0]);
        BorrowLog::create(['user_id'=>$member->id,'book_id'=>$book2->id,'is_returned'=>0]);
        BorrowLog::create(['user_id'=>$member->id,'book_id'=>$book3->id,'is_returned'=>1]);
    }
}
