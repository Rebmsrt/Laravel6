@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div id="sections" class="col-md-2 bg-info ">
            <br>
            <hr>
            <a href="#"><div class="text-center">Менеджеры</div><hr></a>
            <a href="#"><div class="text-center">Ведущие</div><hr></a>
            <a href="#"><div class="text-center">Ди-Джеи</div><hr></a>
            <a href="#"><div class="text-center">Фотографы</div><hr></a>
            <a href="#"><div class="text-center">Видеооператоры</div><hr></a>
            <a href="#"><div class="text-center">Оформители</div><hr></a>
            <a href="#"><div class="text-center">Аниматоры</div><hr></a>
            <br>
        </div>

        <div class="col-md-7">
            <div class="card-header bg-primary text-white rounded">Новости</div>
            <div class="card">
                <div class="card-body bg-info border-primary">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{Auth::user()->name}}, Добро пожаловать ! <br>
                </div>
            </div>
        </div>
    <div id="sections" class="col-md-2 bg-info">


    </div>
    </div>
@endsection
