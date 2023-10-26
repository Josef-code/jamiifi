<?php

namespace App\Livewire;

use App\Models\Contributions;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Donation extends Component
{

    public $project;

    public $phone = '';

    public $amount = '';


    public function createApiUser()
    {
        $reference = Str::uuid()->toString();

        $response = Http::withHeaders([
            'X-Reference-Id' => $reference,
            'Ocp-Apim-Subscription-Key' => env('PRIMARY_KEY'),
        ])->post('https://sandbox.momodeveloper.mtn.com/v1_0/apiuser', [
            'providerCallbackHost' => 'https://webhook.site/43d7027b-c74e-4266-bdf9-1903ff9c0eed',
        ]);
    
        if ($response->status() == 201) {
            $apiKey =  $this->createApiKey($reference);
            $accessToken = $this->createAccessToken($reference, $apiKey);
            return $this->requestToPay($accessToken);
        }
    
        return false;
    }

    public function createApiKey($reference)
    {

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Ocp-Apim-Subscription-Key' => env('PRIMARY_KEY'),
        ])->post('https://sandbox.momodeveloper.mtn.com/v1_0/apiuser/' . $reference . '/apikey', [
            'providerCallbackHost' => 'https://webhook.site/43d7027b-c74e-4266-bdf9-1903ff9c0eed',
        ]);

        if ($response->successful()) {

            $getbody = $response->json();

            $getKey = $getbody['apiKey'];

            return $getKey;
        } else {
            return Log::ERROR($response->body() . ' error getting api key' );
        }
       
    }

    public function createAccessToken($reference, $apiKey)
    {
        $encodedValue = 'Basic ' . base64_encode($reference . ':' . $apiKey);

        $response = Http::withHeaders([
            'Authorization' => $encodedValue,
            'Ocp-Apim-Subscription-Key' => env('PRIMARY_KEY'),
        ])->post('https://sandbox.momodeveloper.mtn.com/collection/token/', [
            'providerCallbackHost' => 'https://webhook.site/43d7027b-c74e-4266-bdf9-1903ff9c0eed',
        ]);

        if ($response->status() == 200) {
            $getToken = $response->json();
            $token = $getToken['access_token'];
            return $token;
        } else {
            Log::error($response->body() . ' error getting access token');
        }

    }

    public function requestToPay($accessToken)
    {  
        $externalId = rand(10000000,9999999);
        $reference = Str::uuid()->toString();

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $accessToken,
            'X-Reference-Id' => $reference,
            'X-Target-Environment' => 'sandbox',
            'Content-Type' => 'application/json',
            'Cache-Control' => 'no-cache',
            'Ocp-Apim-Subscription-Key' => env('PRIMARY_KEY'),
        ])->post('https://sandbox.momodeveloper.mtn.com/collection/v1_0/requesttopay', [
            'amount' => $this->amount,
            'currency' => 'EUR',
            'externalId' => $externalId,
            'payer' => [
                'partyIdType' => 'MSISDN',
                'partyId' => $this->phone,
            ],
            'payerMessage' => 'DONATION',
            'payeeNote' => 'THANKS',
        ]);

        if ($response->status() == 202) {
            // Request was successful
            // Handle the response data here
            $storeContribution = $this->storeContribution($this->amount);
            Log::info($response->json());
        } else {
            // Request failed, handle the error
            $errorResponse = $response->json();
            Log::error($response->json());
            // Log or handle the error as needed
        }

    }

    public function storeContribution($amount)
    {
        $storeContribution = Contributions::create([
            'project_id' => $this->project,
            'contributor_id' => auth()->user()->id,
            'contribution_amount' => $this->amount,
            'contribution_date' => date('Y-m-d'),
            'contribution_status'=> 'pending',
        ]);

        return true;

    }

    public function render()
    {
        return view('livewire.donation');
    }
}


