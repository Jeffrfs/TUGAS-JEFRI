@extends('layouts.app')

@section('content')
    <h1>Ubah Antrean</h1>
    <form action="{{ route('articles.update', $article) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Nama</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Jenis mobil & Plat nomor</label>
            <textarea name="content" id="content" class="form-control" required>{{ $article->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
