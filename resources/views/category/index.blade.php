
<div>
<a href="{{ route('categories.create') }}" role="button" aria-disabled="true">Создать категорию</a>
</div>


<h2> Список существующих категорий</h2>

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID категории</th>
                <th scope="col">Название категории</th>
                <th scope="col">Описание</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @foreach ($categories as $category)
        <tbody>
            <tr>
                <th>{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <a href="{{ route('categories.show', $category->id) }}">Перейти к категории</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

<div>
    <a href="{{ route('admin.index') }}" role="button" aria-disabled="true">Админка</a>
</div>

