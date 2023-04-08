

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3 class="panel-heading">Редактирование товара</h3>

                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{route('products.update', $product->id)}}">
                        @csrf
                        @method('patch')

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Наименование товара</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{$product->name}}" required autofocus>

                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Название категории</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="category" value="{{$product->name}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Описание</label>

                            <div class="col-md-6">
                                <textarea  type="text" class="form-control" name="description"  required>{{$product->description}}</textarea>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Цена товара</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="price" value="{{$product->price}}" required autofocus>

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
