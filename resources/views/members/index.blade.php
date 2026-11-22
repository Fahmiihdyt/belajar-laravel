@extends('layouts.app')

@section('title', 'Data Member')

@section('content')
    <h2>Data Member</h2>

    <a href="{{ route('members.create') }}">Tambah Member</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($members as $member)
            <li>
                {{ $member->name }}

                <a href="{{ route('members.edit', $member->id) }}">Edit</a>

                <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('Yakin ingin menghapus member ini?')">
                        Hapus
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection