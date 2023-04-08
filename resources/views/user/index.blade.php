
<h2> Список существующих пользователей</h2>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Почта</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($users as $user)
            <tbody>
                <tr>
                    <th>{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}">Перейти к пользователю</a>
                    </td>

                </tr>
            </tbody>
            @endforeach
        </table>

    </div>

    <div>
        <a href="{{ route('admin.index') }}" role="button" aria-disabled="true">Админка</a>
    </div>
