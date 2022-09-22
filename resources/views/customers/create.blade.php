@extends('layouts.main')
@section('title', '新規登録画面')
@section('content')
    <h1>新規登録画面</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('customers.store') }}" method="post">
        @csrf
        <div>
            <label for="name">名前 </label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>

        <div>
            <label for="email">メールアドレス </label>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
        </div>

        <div>
            <label for="postcode">郵便番号 </label>
            <input type="text" name="postcode" id="postcode" value="{{ $postcode }}">
        </div>

        <div>
            <label for="address">住所 </label>
            <textarea type="text" name="address" id="address">{{ $address }}</textarea>
        </div>

        <div>
            <label for="phone">電話番号 </label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
        </div>

        <div>
            <input type="submit" value="登録">
        </div>
    </form>

    <button tyepe="button" onclick="location.href='/customers/address'">郵便番号検索に戻る</button>

@endsection
