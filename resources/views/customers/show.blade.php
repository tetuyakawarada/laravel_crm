@extends('layouts.main')
@section('title', '顧客詳細画面')
@section('content')
    <h1>顧客詳細画面</h1>

    <table border="1">
        <thead>
            <tr>
                <th>顧客ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>郵便番号</th>
                <th>住所</th>
                <th>電話番号</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->postcode }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->phone }}</td>
            </tr>
        </tbody>
    </table>

    <button tyepe="button" onclick="location.href='{{ route('customers.edit', $customer) }}'">編集画面</button><br>
    削除するボタン<br>
    <button tyepe="button" onclick="location.href='{{ route('customers.index') }}'">一覧へ戻る</button>


@endsection
