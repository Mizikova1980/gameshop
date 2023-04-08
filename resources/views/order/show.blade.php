

<div>
    <div>ID заказа: {{$order->id}}</div>
    <div> ID пользователя: {{$order->user_id}}</div>
    <div> Email пользователя: {{$userEmail}}</div>
    <div> Статус заказа: {{$order->state}} </div>
    @foreach ($order->products as $order->product)
    <div> ID товара: {{$order->product->id}}</div>
    <div> Наименование товара: {{$order->product->name}}</div>
    @endforeach


</div>

<div>
    <a href="{{ route('admin.index') }}" role="button" aria-disabled="true">Админка</a>
</div>



