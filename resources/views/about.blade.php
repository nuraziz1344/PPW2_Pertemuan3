@extends('layout')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td>{{ $phone }}</td>
        </tr>
    </table>
@endsection
