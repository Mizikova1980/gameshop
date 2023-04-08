@extends('layouts.app')

@section('content')

<h3>Админка</h3>
<div>
<a href="{{ route('categories.index') }}" role="button" aria-disabled="true">Категории товаров</a>
</div>

<div>
<a href="{{ route('products.index') }}" role="button" aria-disabled="true">Товары</a>
</div>

<div>
<a href="{{ route('users.index') }}" role="button" aria-disabled="true">Клиенты</a>
</div>


<div>
<a href="{{ route('orders.index') }}" role="button" aria-disabled="true">Заказы</a>
</div>
@endsection
