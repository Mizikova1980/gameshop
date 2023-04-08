
<div>
<a href="{{ route('products.create') }}" role="button" aria-disabled="true">Создать товар</a>
</div>


<h2> Список существующих товаров</h2>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID товара</th>
                    <th scope="col">ID категории</th>
                    <th scope="col">Наименование товара</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Фото</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($products as $product)
            <tbody>
                <tr>
                    <th>{{$product->id}}</th>
                    <td>{{$product->categoryId}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->descriotion}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->image}}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}">Перейти к товару</a>
                    </td>

                </tr>
            </tbody>
            @endforeach
        </table>

    </div>


    <div>
        <a href="{{ route('admin.index') }}" role="button" aria-disabled="true">Админка</a>
    </div>
