<?php

declare(strict_types=1);

namespace PlugAndPay\Sdk\Tests\Feature\Order;

use PlugAndPay\Sdk\Contract\ClientGetInterface;
use PlugAndPay\Sdk\Entity\Response;

class OrderGetClientMock implements ClientGetInterface
{
    private array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data + [
                'created_at'     => '2019-01-16T00:00:00.000000Z',
                'deleted_at'     => '2019-01-16T00:00:00.000000Z',
                'id'             => 1,
                'invoice_number' => '20214019-T',
                'invoice_status' => 'concept',
                'is_first'       => true,
                'is_hidden'      => false,
                'mode'           => 'live',
                'reference'      => '0b13e52d-b058-32fb-8507-10dec634a07c',
                'source'         => 'api',
                'subtotal'       =>
                    [
                        'currency' => 'EUR',
                        'value'    => '75.00',
                    ],
                'total'          =>
                    [
                        'currency' => 'EUR',
                        'value'    => '75.00',
                    ],
                'updated_at'     => '2019-01-16T00:00:00.000000Z',
            ];
    }

    public function billing(array $data = []): self
    {
        $this->data['billing'] = $data + [
                'address'       => [
                    'city'          => '\'t Veld',
                    'country'       => 'NL',
                    'street'        => 'Sanderslaan',
                    'street_suffix' => '42',
                    'zipcode'       => '1448VB',
                ],
                'company'       => 'Café Timmermans & Zn',
                'email'         => 'rosalie39@example.net',
                'first_name'    => 'Bilal',
                'invoice_email' => 'maarten.veenstra@example.net',
                'last_name'     => 'de Wit',
                'telephone'     => '(044) 4362837',
                'website'       => 'https://www.vandewater.nl/velit-porro-ut-velit-soluta.html',
            ];

        return $this;
    }

    public function get(string $path): Response
    {
        return new Response(Response::HTTP_OK, $this->data);
    }

    public function items(array $data = []): self
    {
        $this->data['items'] = $data + [
                [
                    'id'           => 1,
                    'discounts'    => [],
                    'product_id'   => 1,
                    'public_title' => 'culpa',
                    'quantity'     => 1,
                    'type'         => null,
                    'subtotal'     => ['currency' => 'EUR', 'value' => '75.00'],
                    'total'        => ['currency' => 'EUR', 'value' => '90.75'],
                ],
            ];

        return $this;
    }
}
