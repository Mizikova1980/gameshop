

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3 class="panel-heading">Редактирование категории</h3>

                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{route('categories.update', $category->id)}}">
                        @csrf
                        @method('patch')

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Название категории</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$category->name}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Описание</label>

                            <div class="col-md-6">
                                <textarea  type="text" class="form-control" name="description"  required>{{$category->description}}</textarea>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Обновить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <a href="{{ route('admin.index') }}" role="button" aria-disabled="true">Админка</a>
</div>
