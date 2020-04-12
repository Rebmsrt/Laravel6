@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center text-white">Разделы</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Создание нового раздела</div>

                    <div class="card-body">
                        <form action="{{ auth()->user()->id }}/razdels" method="post" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label for="name">Название:</label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control">
                            </div>

                            <button class="btn btn-primary">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div>{{ $item-> title }}</div>
                    <div class="card-header">Существующие альбомы</div>
                    <div class="card-body">
                            <?php
                            $titles = DB::table('razdels')->get();
                            foreach ($titles as $title) {
                            ?>
                            <div>
                            <?php
                            echo $title ->title;
                            }
                            ?>
                            </div>
                    </div>

                </div>
            </div>
        </div>





@endsection
