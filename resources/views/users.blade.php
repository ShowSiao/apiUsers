@extends('template')

@section('content')

<table class="table table-striped-columns">
    <thead>
        <tr class="text-white">
            <th scope="col">#</th>
            <th scope="col">Número de identificación</th>
            <th scope="col">Número de télefono</th>
            <th scope="col">Fecha de creación</th>
            <th scope="col">Transacción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sortedArr as $users)
            <tr>
                <th scope="row"> {{ $users['id'] }} </th>
                <td> {{ $users['identification_number'] }} </td>
                <td> {{ $users['mobile_number'] }} </td>
                <td> {{ $users['created_at'] }} </td>
                <td>
                    <a href="{{ route('transaction', $users['id']) }}" class="btn btn-outline-primary">Transacciones</a>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>

@endsection