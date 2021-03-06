@extends('layouts.app')

@section('content')
    <a href="{{route('admin.products.create')}}" class="btn btn-lg btn-success">Criar Produto</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Loja</th>
                <th>Preço (R$)</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->store->name}}</td>
                    <td class="text-right">{{ number_format($product->price,2,',','.') }}</td>
                    <td class="text-right">
                        <div class="btn-group">
                            <a href="{{route('admin.products.edit', ['product' => $product->id])}}" class="btn btn-sm btn-primary">EDITAR</a>
                            <form action="{{route('admin.products.destroy', ['product' => $product->id])}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger">EXCLUIR</button>
                            </form> 
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
@endsection
