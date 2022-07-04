@extends('layouts.app')

@section('content')
    <h1>Atualizar Produto</h1>

    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="POST">

        @csrf
        <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">
         Para suportar um update 
        <input type="hidden" name="_method" value="PUT">-->
        @method("PUT")

        <div class="form-group">
            <label>Nome do produto</label>
            <input type="text" name="name" class="form-control" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control" value="{{$product->description}}">
        </div>
        <div class="form-group">
            <label>Conteúdo</label>
            <textarea class="form-control" name="body" id="" cols="30" rows="10" value="{{$product->body}}"></textarea>
        </div>
        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="price" class="form-control" value="{{$product->price}}">
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{$product->slug}}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Atualizar produto</button>
            <a href="{{route('admin.products.index')}}" class="btn btn-md btn-info">Voltar</a>
        </div>
    </form>
@endsection
