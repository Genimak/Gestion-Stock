<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>  {{@config('app.name')}} @yield('titre')</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
         </head>

    <body class="py-10 flex flex-col justify-between items-center  min-h-screen">

    <main class="py-10 flex flex-col justify-between items-center " role="main">
      
 @yield('content')
    </main> 
  

 <p>contenue de chaque page</p>

   <footer>
   	<p class ="text-gray-400">
   		&copy; Copyright {{date('Y')}}  &middot; 
      @if(!Route::is('about'))

      <a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-600 underline"> À propos de nous</a>  
      @endif
   	</p>

   </footer>

    </body>
</html>