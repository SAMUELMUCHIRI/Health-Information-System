<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health Information system</title>
    <meta name="description" content="A portal where doctors can create programs and manage clients">
  
    
    
    <script src="//unpkg.com/alpinejs" defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  
    @fluxAppearance
    
</head>
<body class="  relative min-w-screen w-dvw min-h-[200px] h-dvh transition-all duration-100  text-black bg-[#f2f2f2] dark:bg-zinc-800">

   
    {{$slot}}
   
    @fluxScripts
</body>
</html>
