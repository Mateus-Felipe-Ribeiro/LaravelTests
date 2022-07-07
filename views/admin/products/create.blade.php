@extends('layouts.app')

@section('content')
    <h1>Criar Produto</h1>

    <!--<form action="/admin/stores/store" method="POST">-->
    <form action="{{route('admin.products.store')}}" method="POST">
        @csrf
        <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->

        <div class="form-group">
            <label>Nome do produto</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label>Conteúdo</label>
            <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control">
        </div>
        <div class="form-group">
            <label>Lojas</label>
            <select name="store" class="form-control">
                @foreach ($stores as $store)
                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Criar produto</button>
            <a href="{{route('admin.products.index')}}" class="btn btn-md btn-info">Voltar</a>
        </div>
    </form>
@endsection
