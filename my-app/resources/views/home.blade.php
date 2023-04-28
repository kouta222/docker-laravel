<head>
<link rel="stylesheet" href="{{ asset('\css\button.css') }}">
</head>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ログイン情報') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('ログイン成功しました！   以下のボタンから過去問.comをお楽しみください') }}
                    <!-- ボタン -->

                

                </div>
                
            </div>
             
            <div class="home-button">
                          <a class="homehome" href="{{ route('index') }}">
                              <button class="btn btn-danger" type="button">ホームに行く</button>
                          </a>
             </div>
        </div>
    </div>
</div>
@endsection
