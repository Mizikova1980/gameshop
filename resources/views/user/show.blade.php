

<div>
    <div>ID пользователя: {{$user->id}}</div>
    <div> Имя пользователя: {{$user->name}}</div>
    <div> Электронная почта пользователя: {{$user->email}} </div>

    <div>
    <a href="{{ route('users.edit', $user->id) }}">Редактировать пользователя</a>
    </div>

    <div>
        <form action="{{ route('users.destroy', $user->id) }}" method="post" >
        @csrf
        @method('delete')
            <input type="submit" value="Удалить пользователя">
        </form>

    </div>

</div>


<div>
    <a href="{{ route('admin.index') }}" role="button" aria-disabled="true">Админка</a>
</div>


