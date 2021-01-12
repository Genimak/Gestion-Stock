@extends('app')

@section ('titre')
 Bienvenue
@endsection

@section ('content')
  
    <img src="/images/drap_alg.jpg" alt="Algerie" class="rounded  h-32">
   

     <h1 class="mt-5 text-3xl sm:text-4xl font-semibold text-indigo-600">  Bienvenue sur le site de USTHB-Stock </h1> 
<p lass="text-lg text-gray-800">
On est le : {{date('d/m/Y')}}
Elle  est maintenant : {{date('H:i')}}
</p>


 @endsection