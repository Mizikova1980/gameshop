

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3 class="panel-heading">Создание товара</h3>

                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{route('products.store')}} ">
                        @csrf

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Наименование товара</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Категория товара</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control" name="category"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Описание товара</label>

                            <div class="col-md-6">
                                <textarea type="text" class="form-control" name="description" required></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Цена товара</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="price" required>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-md-4 control-label">Изображение</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Сохранить
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
