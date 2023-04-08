Пользователь {{ $user->id }} заказал следующие товары: <br>

<br>
@forelse($order->products as $product)
    {{ $product->id }} {{ $product->title }}
@empty
    Нет товаров в заказе
@endforelse
