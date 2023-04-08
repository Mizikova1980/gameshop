
<div>
    <div>ID категории: {{$category->id}}</div>
    <div> Наименование категории: {{$category->name}}</div>
    <div> Описание: {{$category->description}} </div>

    <div>
    <a href="{{ route('categories.edit', $category->id) }}">Редактировать</a>
    </div>

    <div>
        <form action="{{ route('categories.destroy', $category->id) }}" method="post" >
        @csrf
        @method('delete')
            <input type="submit" value="Удалить">
        </form>

    </div>

</div>


<div>
    <a href="{{ route('admin.index') }}" role="button" aria-disabled="true">Админка</a>
</div>


