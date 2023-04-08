
<h2> Список существующих заказов</h2>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID заказа</th>
                    <th scope="col">ID клиента</th>
                    <th scope="col">Статус заказа</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($orders as $order)
            <tbody>
                <tr>
                    <th>{{$order->id}}</th>
                    <td>{{$order->user_id}}</td>
                    <td>{{$order->state}}</td>
                    <td>
                        <a href="{{ route('orders.show', $order->id) }}">Перейти к заказу</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </div>


    <div>
        <a href="{{ route('admin.index') }}" role="button" aria-disabled="true">Админка</a>
    </div>
