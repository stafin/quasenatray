@component('mail::message')

Olá <strong>{{$seller->name}}</strong>,

@if($seller->ordersDay->count() > 0)

Suas vendas do dia <strong>{{date('d/m/Y')}} </strong>.

@component('mail::table')
| Id Venda      | Valor Venda   | Comissão  | Valor Comissão  |
|:-------------:| -------------:| ---------:| ---------------:|
@foreach($seller->ordersDay as $order)
<?php
$orderTotal += $order->order_value;
$commissionTotal += $order->commission_value;
?>
| {{$order->id}} | R$ {{number_format($order->order_value, 2, ',', '.')}} | {{number_format($order->commission->percentage, 2, ',', '.')}}% | R$ {{number_format($order->commission_value, 2, ',', '.')}} |
@endforeach
@endcomponent

@component('mail::panel')
    <strong>Total Vendas:</strong> R$ {{number_format($orderTotal, 2, ',', '.')}}<br>
    <strong>Total Comissão:</strong> R$ {{number_format($commissionTotal, 2, ',', '.')}}
@endcomponent

@else

@component('mail::panel')
    Infelizmente não foram encontrados registros de vendas no dia de hoje para você :(
@endcomponent

@endif

Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent
