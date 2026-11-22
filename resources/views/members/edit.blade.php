@extends('layouts.app')

@section('title', 'Edit Member')

@section('content')
    <h2>Edit Member</h2>

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Nama Member</label>
            <input type="text" name="name" value="{{ $member->name }}" required>
        </div>

        <div>
            <label>Kode Member</label>
            <input type="text" name="member_code" value="{{ $member->member_code }}" required>
        </div>

        <div>
            <label>Nomor Telepon</label>
            <input type="text" name="phone" value="{{ $member->phone }}">
        </div>

        <div>
            <label>Alamat</label>
            <textarea name="address">{{ $member->address }}</textarea>
        </div>

        <button type="submit">Update Member</button>
    </form>
@endsection