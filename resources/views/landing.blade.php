<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="content" data-scroll-container>
        <section class="h-screen bg-gray-10 flex items-center justify-center">
            <h1 class="text-6xl font-bold text-gray-800">Bienvenidos a la Landing</h1>
        </section>
        <section class="h-screen bg-blue-100 flex items-center justify-center">
            <h2 class="text-4xl font-medium text-blue-800">Información importante</h2>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/locomotive-scroll/4.1.3/locomotive-scroll.min.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
