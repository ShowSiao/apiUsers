@extends('template')

@section('content')

<table class="table table-striped-columns">
    <thead>
        <tr class="text-white">
            <th scope="col">#</th>
            <th scope="col">Detalles de la transacción</th>
            <th scope="col">Fecha de creación</th>
        </tr>
    </thead>
    <tbody>
        @forelse($sortedArr as $userTransaction)
            <tr>
                <th scope="row"> {{ $userTransaction['id'] }} </th>
                <td> {{ $userTransaction['transaction_detail'] }} </td>
                <td> {{ $userTransaction['created_at'] }} </td>
            </tr>
            @empty
            <tr>
                <td></td>
                <td class="fw-bold text-warning py-3">El usuario no tiene transacciones</td>
                <td></td>
            </tr>
        @endforelse
    </tbody>

</table>

@endsection