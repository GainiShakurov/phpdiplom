<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class SeedQuestions extends Migration
{

    private function getQuestionsArray()
    {
        $question = [];

        $now = Carbon::now()->toDateTimeString();

        $question[] = [
            'id' => 1,
            'question' => 'How do I change my password?',
            'category_id' => 1,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 2,
            'question' => 'How do I sign up?',
            'category_id' => 1,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 3,
            'question' => 'Can I remove a post?',
            'category_id' => 1,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 4,
            'question' => 'How do reviews work?',
            'category_id' => 1,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 5,
            'question' => 'How does syncing work?',
            'category_id' => 2,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 6,
            'question' => 'How do I upload files from my phone or tablet?',
            'category_id' => 2,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 7,
            'question' => 'How do I link to a file or folder?',
            'category_id' => 2,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 8,
            'question' => 'How do I change my password?',
            'category_id' => 3,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 9,
            'question' => 'How do I delete my account?',
            'category_id' => 3,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 10,
            'question' => 'How do I change my account settings?',
            'category_id' => 3,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 11,
            'question' => 'I forgot my password. How do I reset it?',
            'category_id' => 3,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 12,
            'question' => 'Can I have an invoice for my subscription?',
            'category_id' => 4,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 13,
            'question' => 'Why did my credit card or PayPal payment fail?',
            'category_id' => 4,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 14,
            'question' => 'Why does my bank statement show multiple charges for one upgrade?',
            'category_id' => 4,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 15,
            'question' => 'Can I specify my own private key?',
            'category_id' => 5,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 16,
            'question' => 'My files are missing! How do I get them back?',
            'category_id' => 5,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 17,
            'question' => 'How can I access my account data?',
            'category_id' => 5,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 18,
            'question' => 'How can I control if other search engines can link to my profile?',
            'category_id' => 5,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 19,
            'question' => 'What should I do if my order hasn\'t been delivered yet?',
            'category_id' => 6,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 20,
            'question' => 'How can I find your international delivery information?',
            'category_id' => 6,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 21,
            'question' => 'Who takes care of shipping?',
            'category_id' => 6,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 22,
            'question' => 'How do returns or refunds work?',
            'category_id' => 6,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 23,
            'question' => 'How do I use shipping profiles?',
            'category_id' => 6,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 24,
            'question' => 'How does your UK Next Day Delivery service work?',
            'category_id' => 6,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 25,
            'question' => 'How does your Next Day Delivery service work?',
            'category_id' => 6,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 26,
            'question' => 'When will my order arrive?',
            'category_id' => 6,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $question[] = [
            'id' => 27,
            'question' => 'When will my order ship?',
            'category_id' => 6,
            'author' => 'Anonymous',
            'published' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];

        return $question;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::transaction(function(){
            DB::table('questions')->delete();

            DB::table('questions')->insert(
                $this->getQuestionsArray()
            );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
