@extends('layouts.app')

@section('content')
     <div class="container">
         <div class="text-end">
             <a class="btn btn-success" href="{{ route('admin.caterers.create') }}">Aggiungi un ristorante</a>
         </div>
         <div class="container d-flex flex-wrap gap-3 justify-content-start mt-5">

             @foreach ($caterers as $caterer)
                 <div class="card" style="width: 18rem;">
                     <div class="card-body">
                         <h5 class="card-title">{{ $caterer->name }}</h5>
                         <img class="card-img-top" :src="" alt="">
                     </div>
                     <div class="card-body d-flex flex-column align-items-center gap-2 ">
                         <a href="{{ route('admin.caterers.show', $caterer->slug) }}"
                             class="btn btn-success text-white">Vedi in dettaglio</a>
                         {{-- <a href="{{ route('admin.caterers.edit', $caterer->slug) }}"
                             class="btn btn-warning text-white">Modifica</a> --}}
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 @endsection
