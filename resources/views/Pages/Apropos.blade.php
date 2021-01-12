@extends('app')

@section ('titre')
 A propos
@endsection


@section ('content')
   <h2 class=" mt-5 text-3xl sm:text-4xl font-semibold text-indigo-600" >  A propos de nous</h2> 
   <img src="/images/mak.png" alt="nait said makhlouf " class=" mt-6 rounded shadow-md h-64" >
     <a class=" mt-12 text-indigo-500 hover:text-indigo-600 underline" href="{{route('home')}}"> Page d'acceuil</a>
   
 @endsection