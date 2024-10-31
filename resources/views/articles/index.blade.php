@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Daftar Antrean</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Tambahkan Antrean</a>
    <div class="list-group">
        @foreach($articles as $article)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
                <div>
                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
