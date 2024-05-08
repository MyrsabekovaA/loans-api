<?php
namespace Tests\Feature;

use App\Models\Loan;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Tests\TestCase;

class LoanTest extends TestCase
{
    use DatabaseMigrations;

    public function testLoanCreation()
    {
        $data = ['amount' => 5000, 'creation_date' => '2024-05-07'];
        $response = $this->json('POST', '/loans', $data);
        $response->assertResponseStatus(201);

        $responseData = [
            'amount' => 5000,
            'creation_date' => '2024-05-07T00:00:00.000000Z',
            'id' => 1,
            'created_at' => $response->response->getData(true)['created_at'],
            'updated_at' => $response->response->getData(true)['updated_at']
        ];

        $this->seeJsonEquals($responseData);
    }

    public function testLoanRetrieval()
    {
        $loan = Loan::create(['amount' => 5000, 'creation_date' => '2024-05-07', 'status' => 'pending']);
        $response = $this->json('GET', "/loans/{$loan->id}");
        $response->assertResponseStatus(200);
        $this->seeJsonEquals([
            'id' => $loan->id,
            'amount' => 5000,
            'creation_date' => $loan->creation_date->format('Y-m-d\TH:i:s.u').'Z',
            'status' => $loan->status,
            'created_at' => $loan->created_at->format('Y-m-d\TH:i:s.u').'Z',
            'updated_at' => $loan->updated_at->format('Y-m-d\TH:i:s.u').'Z',
        ]);
    }
}
