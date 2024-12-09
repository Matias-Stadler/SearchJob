@extends('layouts.app')

@section('content')
    <div class="tableOffer">
        <table class="table table-striped table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Actualizado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offers as $offer)

                    <tr>
                        <td>{{ $offer->id}}</td>
                        <td>
                            @if($offer->status===1)
                            in progress
                            @else
                            finished
                            @endif
                        </td>
                        <td>{{ $offer->company}}</td>
                        <td>{{ $offer->jobPosition}}</td>
                        <td>{{ $offer->comment}}</td>
                        <td>{{ $offer->created_at}}</td>
                        <td>{{ $offer->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
