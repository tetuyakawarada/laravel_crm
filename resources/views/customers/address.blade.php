@extends('layouts.main')
@section('title', '郵便番号検索画面')
@section('content')
    <h1>郵便番号検索画面</h1>

    <div>
        郵便番号検索
        <input type="text" name="title" id="postcode" placeholder="検索したい郵便番号">
        <button tyepe="button" onclick="location.href='{{ route('customers.create') }}'">検索</button>
    </div>

    <div>
        <button tyepe="button" onclick="location.href='{{ route('customers.index') }}'">一覧へ戻る</button>
    </div>


@endsection
