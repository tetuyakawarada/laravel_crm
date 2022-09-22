@extends('layouts.main')
@section('title', '郵便番号検索画面')
@section('content')
    <h1>郵便番号検索画面</h1>

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

    <form action="{{ route('customers.create') }}" method="GET">
        郵便番号検索
        <input type="text" name="postcode" id="postcode" placeholder="検索したい郵便番号" value="{{ old('postcode') }}">
        <input type="submit" value="検索">
    </form>

    <div>
        <button tyepe="button" onclick="location.href='{{ route('customers.index') }}'">一覧へ戻る</button>
    </div>


@endsection
