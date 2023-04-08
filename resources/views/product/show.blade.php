
<div>
    <div>ID товара: {{$product->id}}</div>
    <div>ID категории: {{$product->categoryId}}</div>
    <div> Наименование товара: {{$product->name}}</div>
    <div> Описание: {{$product->description}} </div>
    <div> Цена: {{$product->price}} </div>
    <div> Фото: {{$product->image}} </div>

    <div>
    <a href="{{ route('products.edit', $product->id) }}">Редактировать</a>
    </div>

    <div>
        <form action="{{ route('products.destroy', $product->id) }}" method="post" >
        @csrf
        @method('delete')
            <input type="submit" value="Удалить">
        </form>

    </div>

</div>


<div>
    <a href="{{ route('admin.index') }}" role="button" aria-disabled="true">Админка</a>
</div>


