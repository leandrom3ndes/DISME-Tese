@extends('bi_elements.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Business Intelligence Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bi_elements.create') }}"> Criar novo dashboard</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($bi_elements as $bi_element)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/image/{{ $bi_element->preview }}" width="100px"></td>
                <td>{{ $bi_element->title }}</td>
                <td>{{ $bi_element->description }}</td>
                <td>
                    <form action="{{ route('bi_elements.destroy',$bi_element->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('bi_elements.show',$bi_element->id) }}">Ver</a>

                        <a class="btn btn-primary" href="{{ route('bi_elements.edit',$bi_element->id) }}">Editar</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $bi_elements->links() !!}

@endsection
