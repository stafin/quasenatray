<?php

namespace App\Mail;

use App\Models\Seller;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SellersOrdersReport extends Mailable
{
    use Queueable, SerializesModels;

    public float $orderTotal = 0;
    public float $commissionTotal = 0;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        private Seller $seller,
    )
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('[QuaseNaTray] - Vendas do dia '.date('d/m/Y'));
        $this->to($this->seller->email, $this->seller->name);
        $this->to('stafin@gmail.com', 'João Stafin');
        return $this->markdown('mail.sellers-orders-report', ['seller' => $this->seller]);
    }
}
