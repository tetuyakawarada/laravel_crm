@extends('layouts.main')
@section('title', '編集画面')
@section('content')
    <h1>編集画面</h1>

    <form action="/customers/{{ $customer->id }}" method="post">
        @csrf
        @method('PATCH')

        <div>
            <label for="name">名前 </label>
            <input type="text" name="name" id="name" value="{{ old('name', $customer->name) }}">

        </div>

        <div>
            <label for="email">メールアドレス </label>
            <input type="text" name="email" id="email" value="{{ old('email', $customer->email) }}">
        </div>

        <div>
            <label for="postcode">郵便番号 </label>
            <input type="text" name="postcode" id="postcode" value="{{ old('postcode', $customer->postcode) }}">
        </div>

        <div>
            <label for="address">住所 </label>
            <input type="textarea" name="address" id="address" value="{{ old('address', $customer->address) }}">
        </div>

        <div>
            <label for="phone">電話番号 </label>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $customer->phone) }}">
        </div>

        <div>
            <input type="submit" value="更新">
        </div>
    </form>

    <button tyepe="button" onclick="location.href='{{ route('customers.show', $customer) }}'">戻る</button>

@endsection
