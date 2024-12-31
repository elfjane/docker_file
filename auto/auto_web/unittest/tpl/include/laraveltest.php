<?php

namespace Tests\Feature;

use Mockery;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Seeders\PaymentInvoiceSeeder; // 參考資料可刪除
use App\Services\CurlServiceEzPay; // 參考資料可刪除

/**
 * 執行所有測試指令
 * php artisan test --filter NameTest --testdox
 */
class NameTest extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;

    protected function initMock($class)
    {
        $mock = Mockery::mock($class)->makePartial();
        $this->app->instance($class, $mock);

        return $mock;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(PaymentInvoiceSeeder::class); // 參考資料可刪除
        $this->CurlServiceEzPay = $this->initMock(CurlServiceEzPay::class); // 參考資料可刪除
    }

    /**
     * @testdox test_run
     * artisan test --filter NameTest::test_run --testdox
     * @dataProvider run_provider
     * @return void
     */
    public function test_run($headers, $queryParams, $expectedStatusCode, $expectedResponseStructure, $expectedResponseJson): void
    {
        $this->CurlServiceEzPay->shouldReceive('post')->andReturn($example); // 不測外部功能 參考資料可刪除
        $response = $this->withHeaders($headers)->json('POST', '/api/test', $queryParams);
        $response->assertStatus($expectedStatusCode)
            ->assertJsonStructure($expectedResponseStructure)
            ->assertJson($expectedResponseJson);
    }

    public function run_provider(): array
    {
        // 預期回傳結構
        $expectedResponseStructure = [
            "status",
            "code",
            "message",
            "data",
        ];

        return [
            'success' => [
                'headers' => [
                    'token' => 'token',
                ],
                'queryParams' => [
                    'start_date' => '2023-07-18',
                ],
                'expectedStatusCode' => Response::HTTP_OK,
                'expectedResponseStructure' => $expectedResponseStructure,
                'expectedResponseJson' => [
                    'status' => 'success',
                    'code' => 200,
                    'message' => '成功,正常回傳',
                    'data' => [
                        'conditions' => [
                            'start_date' => '2023-07-18',
                            'end_date' => '2023-07-19',
                            'order_number' => '123',
                        ],
                        'orders' => [
                            [
                                'id' => 1,
                                'order_number' => '123',
                                'buyer' => '王小明',
                                'price' => '2',
                                'account_num_total' => 3,
                                'account_num_used' => 1,
                                'created_at' => '2023-07-19 19:29:30',
                                'start_date' => '2023-07-03',
                                'end_date' => '2023-07-10',
                            ],
                            [
                                'id' => 2,
                                'order_number' => '1234',
                                'buyer' => '王大明',
                                'price' => '11',
                                'account_num_total' => 4,
                                'account_num_used' => 0,
                                'created_at' => '2023-07-17 21:56:46',
                                'start_date' => '2023-07-10',
                                'end_date' => '2023-07-17',
                            ],
                        ],
                    ],
                    'meta' => [
                        'total' => 2,
                        'per_page' => 10,
                        'current_page' => 1,
                        'last_page' => 1,
                        'from' => 1,
                        'to' => 2,
                    ],
                ],
            ],
        ];
    }
}
