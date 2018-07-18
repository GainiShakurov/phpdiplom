<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class SeedAnswers extends Migration
{

    private function getAnswersArray()
    {
        $answer = [];

        $now = Carbon::now()->toDateTimeString();

        $answer[] = [
            'id' => 1,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non a ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem! Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem atque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.',
            'question_id' => 1,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 2,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cupiditate et laudantium esse adipisci consequatur modi possimus accusantium vero atque excepturi nobis in doloremque repudiandae soluta non minus dolore voluptatem enim reiciendis officia voluptates, fuga ullam? Voluptas reiciendis cumque molestiae unde numquam similique quas doloremque non, perferendis doloribus necessitatibus itaque dolorem quam officia atque perspiciatis dolore laudantium dolor voluptatem eligendi? Aliquam nulla unde voluptatum molestiae, eos fugit ullam, consequuntur, saepe voluptas quaerat deleniti. Repellendus magni sint temporibus, accusantium rem commodi?',
            'question_id' => 2,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 3,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 3,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 4,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 4,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 5,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.',
            'question_id' => 5,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 6,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi tempore, placeat quisquam rerum! Eligendi fugit dolorum tenetur modi fuga nisi rerum, autem officiis quaerat quos. Magni quia, quo quibusdam odio. Error magni aperiam amet architecto adipisci aspernatur! Officia, quaerat magni architecto nostrum magnam fuga nihil, ipsum laboriosam similique voluptatibus facilis nobis? Eius non asperiores, nesciunt suscipit veniam blanditiis veritatis provident possimus iusto voluptas, eveniet architecto quidem quos molestias, aperiam eum reprehenderit dolores ad deserunt eos amet. Vero molestiae commodi unde dolor dicta maxime alias, velit, nesciunt cum dolorem, ipsam soluta sint suscipit maiores mollitia assumenda ducimus aperiam neque enim! Quas culpa dolorum ipsam? Ipsum voluptatibus numquam natus? Eligendi explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores officia! Beatae, molestias!',
            'question_id' => 6,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 7,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 7,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 8,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis earum autem consectetur labore eius tenetur esse, in temporibus sequi cum voluptatem vitae repellat nostrum odio perspiciatis dolores recusandae necessitatibus, unde, deserunt voluptas possimus veniam magni soluta deleniti! Architecto, quidem, totam. Fugit minus odit unde ea cupiditate ab aperiam sed dolore facere nihil laboriosam dolorum repellat deleniti aliquam fugiat laudantium delectus sint iure odio, necessitatibus rem quisquam! Ipsum praesentium quam nisi sint, impedit sapiente facilis laudantium mollitia quae fugiat similique. Dolor maiores aliquid incidunt commodi doloremque rem! Quaerat, debitis voluptatem vero qui enim, sunt reiciendis tempore inventore maxime quasi fugiat accusamus beatae modi voluptates iste officia esse soluta tempora labore quisquam fuga, cum. Sint nemo iste nulla accusamus quam qui quos, vero, minus id. Eius mollitia consequatur fugit nam consequuntur nesciunt illo id quis reprehenderit obcaecati voluptates corrupti, minus! Possimus, perspiciatis!',
            'question_id' => 8,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 9,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo tempore soluta, minus magnam non blanditiis dolore, in nam voluptas nobis minima deserunt deleniti id animi amet, suscipit consequuntur corporis nihil laborum facere temporibus. Qui inventore, doloribus facilis, provident soluta voluptas excepturi perspiciatis fugiat odit vero! Optio assumenda animi at! Assumenda doloremque nemo est sequi eaque, ipsum id, labore rem nisi, amet similique vel autem dolore totam facilis deserunt. Mollitia non ut libero unde accusamus praesentium sint maiores, illo, nemo aliquid?',
            'question_id' => 9,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 10,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 10,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 11,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum at aspernatur iure facere ab a corporis mollitia molestiae quod omnis minima, est labore quidem nobis accusantium ad totam sunt doloremque laudantium impedit similique iste quasi cum! Libero fugit at praesentium vero. Maiores non consequuntur rerum, nemo a qui repellat quibusdam architecto voluptatem? Sequi, possimus, cupiditate autem soluta ipsa rerum officiis cum libero delectus explicabo facilis, odit ullam aperiam reprehenderit! Vero ad non harum veritatis tempore beatae possimus, ex odio quo.',
            'question_id' => 11,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 12,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.',
            'question_id' => 12,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 13,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur accusantium dolorem vel, ad, nostrum natus eos, nemo placeat quos nisi architecto rem dolorum amet consectetur molestiae reprehenderit cum harum commodi beatae necessitatibus. Mollitia a nostrum enim earum minima doloribus illum autem, provident vero et, aspernatur quae sunt illo dolorem. Corporis blanditiis, unde, neque, adipisci debitis quas ullam accusantium repudiandae eum nostrum quis! Velit esse harum qui, modi ratione debitis alias laboriosam minus eaque, quod, itaque labore illo totam aut quia fuga nemo. Perferendis ipsa laborum atque assumenda tempore aspernatur a eos harum non id commodi excepturi quaerat ullam, explicabo, incidunt ipsam, accusantium quo magni ut! Ratione, magnam. Delectus nesciunt impedit praesentium sed, aliquam architecto dolores quae, distinctio consectetur obcaecati esse, consequuntur vel sit quis blanditiis possimus dolorum. Eaque architecto doloremque aliquid quae cumque, vitae perferendis enim, iure fugiat, soluta aut!',
            'question_id' => 13,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 14,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 14,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 15,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.',
            'question_id' => 15,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 16,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 16,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 17,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus magni vero deserunt enim et quia in aliquam, rem tempore voluptas illo nisi veritatis quas quod placeat ipsa! Error qui harum accusamus incidunt at libero ipsum, suscipit dolorum esse explicabo in eius voluptates quidem voluptatem inventore amet eaque deserunt veniam dignissimos excepturi? Dolore, quo amet nostrum autem nemo. Sit nam assumenda, corporis ea sunt distinctio nostrum doloribus alias, beatae nesciunt dolore saepe consequuntur minima eveniet porro dolor officiis maiores ab obcaecati officia enim aliquam. Itaque fuga molestiae hic accusantium atque corporis quia id sequi enim vero? Hic aperiam sint facilis aliquam quia, accusamus tenetur earum totam enim est, error. Iusto, reiciendis necessitatibus molestias. Voluptatibus eos explicabo repellat nesciunt nam vero minima.',
            'question_id' => 17,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 18,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 18,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 19,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.',
            'question_id' => 19,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 20,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 20,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 21,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 21,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 22,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.',
            'question_id' => 22,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 23,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 23,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 24,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 24,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 25,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 25,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 26,
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 26,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];
        $answer[] = [
            'id' => 27,
            'answer' => 'HLorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.',
            'question_id' => 27,
            'admin_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];

        return $answer;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::transaction(function () {
            DB::table('answers')->delete();

            DB::table('answers')->insert(
                $this->getAnswersArray()
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
