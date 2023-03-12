<?php

namespace Tests\Feature;

use App\Models\Message;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateDbMessageApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_Show_All_Message()
    {

        $users = User::factory(5)->create();

        $response = $this->get('/test-db-relation');
        $response->assertStatus(200);

    }

//    public function test_it_can_retrieve_all_records_from_database()
//    {
//        // Создаем тестовые данные в базе данных
//        $records = factory(Message::class, 10)->create();
//
//        // Вызываем метод, который нужно протестировать
//        $response = $this->get('/test-db-relation');
//
//        // Проверяем, что страница отображается корректно
//        $response->assertStatus(200);
//
//        // Проверяем, что количество записей на странице равно количеству записей в базе данных
//        $response->assertSeeText(count($records));
//
//        // Проверяем, что все записи из базы данных отображаются на странице
//        foreach ($records as $record) {
//            $response->assertSeeText($record->name);
//        }
//    }

}
