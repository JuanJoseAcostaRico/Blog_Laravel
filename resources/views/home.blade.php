@extends('layuot')

@section('content')

 <!-- Page Header-->
        <header class="masthead" style="background-image: url('img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Bienvenido</h1>
                            <span class="subheading">Blog hecho con Laravel</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Bienvenidos a mi blog. Aquí encontrarás contenido interesante y útil sobre temas variados, desde la vida cotidiana hasta el mundo de la tecnología. Estoy seguro de que disfrutarás leyendo mis artículos.</p>

                            <p>Me complace darte la bienvenida a este lugar virtual en el que compartiré conocimiento y experiencias. Espero que encuentres algo que te inspire y te ayude a mejorar tu vida.</p>

                            <p>Este blog es un espacio para aprender, crecer y descubrir nuevas cosas. Te invito a explorar los temas que aquí se tratan y a compartir tus opiniones conmigo.</p>

                            <p>En mi blog encontrarás contenido relacionado con la tecnología, la educación, la salud, el emprendimiento y muchos otros temas. Estoy seguro de que encontrarás algo que te interese.</p>

                            <p>Espero que disfrutes de tu estancia aquí y que encuentres información útil para ti. Si tienes alguna pregunta o sugerencia, no dudes en contactarme.</p>

                        <p>¡Bienvenido a mi blog!</p>

                        <p>Puedes navegar entre los siguientes enlaces a continuación:</p>

                    <ul class=" ms-auto py-4 py-lg-0">
                        <li class=""><a class="" href="{{ route('home') }}">Página Principal</a></li>
                        <li class=""><a class="" href="{{ route('blog.index') }}">Blog</a></li>
                        <li class=""><a class="" href="{{ route('contact') }}">Contacto</a></li>
                        <li class=""><a class="" href="{{ route('about') }}">Sobre nosotros</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </main>



@endsection
