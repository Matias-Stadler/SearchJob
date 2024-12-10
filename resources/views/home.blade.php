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
                    <th scope="col">Direccion Web</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Actualizado</th>
                    <th scope="col">Novedades</th>
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
                        <td>{{ $offer->web}}</td>
                        <td>{{ $offer->created_at}}</td>
                        <td>
                            @forelse ($offer->follows as $follow)
                            {{$follow->updated_at}}
                            @empty
                            {{$offer->updated_at}}    
                            @endforelse
                        </td>
                        <td>
                            <ul>
                                @forelse ($offer->follows as $follow)
                                    <li>{{$follow->news}}</li>
                                @empty
                                    <li>no hay seguimiento</li>
                                @endforelse
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
