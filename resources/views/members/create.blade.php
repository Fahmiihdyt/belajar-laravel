@extends('layouts.app')

@section('title', 'Tambah Member')

@section('content')
    <h2>Tambah Member</h2>

        <form action="{{ route('members.store') }}" method="POST">
        @csrf

        <div>
            <label>Nama Member</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label>Kode Member</label>
            <input type="text" name="member_code" required>
        </div>

        <div>
            <label>Nomor Telepon</label>
            <input type="text" name="phone">
        </div>

        <div>
            <label>Alamat</label>
            <textarea name="address"></textarea>
        </div>

        <button type="submit">Simpan Member</button>
    </form>
@endsection