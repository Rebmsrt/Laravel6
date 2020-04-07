@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="ru">
<head>
    <title>Admin_Page</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card row">
                <div class="card-header bg-primary text-white rounded">{{ __('Admin panel') }}</div>
                <div class="row justify-content-center">
                <div class="card-body col-md-6 m-1">
                        <form id="create_sec" method="POST" action="" enctype="multipart/form-data">
                            <div class="h3">Создание раздела</div>
                                    <div class="form-group">
                                        <label for="sec_name">Наименование раздела:</label>
                                        <input id="sec_name" type="text" class="form-control" name="sec_name" value="{{ old('sec_name') }}" required autocomplete="sec_name" autofocus>
                                    </div>
                                    <button type="button" class="btn btn-outline-success col-md-3">Создать</button>
                        </form>
                    </div>
                <div class="card-body col-md-6 m-1">
                    <form id="create_sec" method="POST" action="" enctype="multipart/form-data">
                        <div class="h3">Создание подраздела</div>
                        <div class="form-group">
                            <label for="razdel_name">Наименование подраздела:</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите наименование">
                        </div>
                        <button type="button" class="btn btn-outline-success col-md-3">Создать</button>
                    </form>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
