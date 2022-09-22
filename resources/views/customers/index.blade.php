@extends('layouts.main')
@section('title', '顧客一覧')
@section('content')
    <h1>顧客一覧</h1>

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
            @foreach ($customers as $customer)
                <tr>
                    <td><a href="{{ route('customers.show', $customer) }}">{{ $customer->id }}</a></td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->postcode }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button tyepe="button" onclick="location.href='/customers/address'">新規作成</button>

@endsection
