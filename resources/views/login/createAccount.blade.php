@extends('layouts.plantilla')

@section('title', 'Crear Cuenta')
<link rel="stylesheet" href="{{asset('/css/login.css')}}">

@section('content')

<body class="bodeishon">
    
<div class="supercontenedor">
    <h1 class="SecretHalloween">Crear cuenta</h1>


    
    <form action="validacion" method="POST" id="val">
        @csrf
        <label class="labels" for="username">Usuario</label><br>
        <input class="recuadros" type="text" placeholder="Ingresa tu usuario" name="username" required><br>

        <br><label class="labels" for="email">Email</label><br>
        <input class="recuadros" type="email" placeholder="Ingrese su email" autocomplete="off" name="email"><br>

        <br><label class="labels" for="password">Contraseña</label><br>
        <input class="recuadros" type="password" placeholder="Ingrese su contraseña" required name="password"><br>
        
        <br><label class="labels" for="imguser">Imagen</label><br><br>
        
        <input type="radio" name="imguser" value="https://hectorsnightmares.000webhostapp.com/images/avatares/Avatar1.png">
        <label for="1"><img class="avatar" src="../images/avatares/Avatar1.png" alt="Avatar1"></label>
        <input type="radio" name="imguser" value="https://hectorsnightmares.000webhostapp.com/images/avatares/Avatar2.png">
        <label for="2"><img class="avatar" src="../images/avatares/Avatar2.png" alt="Avatar2"></label>
        <input type="radio" name="imguser" value="https://hectorsnightmares.000webhostapp.com/images/avatares/Avatar3.png">
        <label for="3"><img class="avatar" src="../images/avatares/Avatar3.png" alt="Avatar3"></label>
        <input type="radio" name="imguser" value="https://hectorsnightmares.000webhostapp.com/images/avatares/Avatar4.png">
        <label for="3"><img class="avatar" src="../images/avatares/Avatar4.png" alt="Avatar4"></label>
        <br>
        <br><input  class="aboutus"  type="submit" value="Crear">
        
        <script>
            document.getElementById("val").addEventListener("submit", function(event) {
            var radios = document.getElementsByName("imguser");
            var algunoSeleccionado = false;

            for (var i = 0; i < radios.length; i++) {
                if (radios[i].checked) {
                    algunoSeleccionado = true;
                    break;
                }
            }

            if (!algunoSeleccionado) {
                event.preventDefault(); // Previene el envío del formulario
                document.getElementById("error").textContent = "Selecciona al menos una imagen.";
            } else {
                document.getElementById("error").textContent = ""; // Borra el mensaje de error si había uno
            }
        });
        </script>

    </form>
    <button class="aboutus" onclick="window.history.back();" role="button"><span>Volver</span></button>
    @if($errors->has('email'))
        <h2 class="text-danger">{{ $errors->first('email') }}</h2>
    @endif
    <div id="error" style="color: red;"></div>
</div>
</body>

<footer class="foter">
    <p>&copy; 2023 Jorge Márquez, Ivan Caldera & Rita Camacho</p>
    <button id="btn_aboutus_open" onclick="aboutus()" class="aboutus">Conocenos</button>
    <dialog id="modalaboutus">
        <h1>Conocenos</h1> 
        <br>
        <h2>Equipo de desarrollo</h2>
        
        <h2>Ivan Caldera</h2>
        <h3>Back end developer - Encargado de funcionalidad y jugabilidad. <br>
            <a target="_blank" href="https://www.linkedin.com/in/ivan-caldera-b4290421a/ ">https://www.linkedin.com/in/ivan-caldera- </a></h3>
        
        <h2>Jorge Márquez</h2>
        <h3>Front End Developer - Encargado de Arte y estructura visual. <br>
            <a target="_blank" href="https://www.linkedin.com/in/jorge-marquez-">https://www.linkedin.com/in/jorge-marquez- </a></h3> 
      
        <h2>Rita Camacho</h2>
        <h3>Software engineer - Encargada de requerimientos y proceso de documentación. <br>
            <a target="_blank" href="https://www.linkedin.com/in/rita-camacho-guzman-813386293">https://www.linkedin.com/in/rita-camacho-guzman-</a></h3> 
            
        
        <h2>Carlos Guzman</h2> 
        <h3>Consultor - Asesoramiento y opinión experta. <br>
            <a target="_blank" href="https://www.linkedin.com/in/carlos-a-guzman-8b808b3b">https://www.linkedin.com/in/carlos-a-guzman-</a></h3> 
            
        <h2>Proposito</h2>
        <h3>Somos un equipo de desarrollo motivado por la aplicación de las nuevas tecnologías con la meta de
            compartir con todos a quienes lleguemos la educación a través de experiencias inmersivas/modernas que
            permitan experimentar distintas sensaciones inolvidables y poder aprender en base a ellas.  <br><br>
            Somos unos apasionados por el género (entre otros) del terror y estamos orgullosos de poder combinar 
            estos tópicos y presentarlos como en esta ocasión con Hector's Nightmare, basado en la recopilación de
            leyendas urbanas y relatos del plantel educativo junto con una historia de un estudiante (Hector) que 
            verdaderamente fue quien sirvió como inspiración para poder realizar este proyecto.
        </h3>
        <button id="btn_aboutus_close" class="aboutus">Cerrar</button>
    </dialog>
    <button id="btn_credits_open" onclick="credits()" class="aboutus">Creditos</button>
    <dialog id="modalcredits">
        <h2>Equipo</h2>
        <h3>Ivan Caldera <br>
        Back end developer - Encargado de funcionalidad y gameplay.
            <br><br>
        Jorge Márquez <br>
        Front End Developer - Encargado de Arte y estructura visual.	
            <br><br>
        Rita Camacho <br>
        Software engineer - Encargada de requerimientos y proceso de documentación.
            <br><br>
        Carlos Guzman <br>
        Consultor - Asesoramiento y opinión experta.
        </h3>

        <h2>Recursos utilizados</h2>

        <h3>Big Furniture Pack <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/3d/props/furniture/big-furniture-pack-7717">https://assetstore.unity.com/packages/3d/props/furniture/big-furniture-pack-7717</a>
            <br>
        Anime girl idle animations
            <br>
            <a target="_blank" href=" https://assetstore.unity.com/packages/3d/animations/anime-girl-idle-animations-free-150406"> https://assetstore.unity.com/packages/3d/animations/anime-girl-idle-animations-free-150406</a>
            <br>
       
        Door cabinets & lockers
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/audio/sound-fx/foley/door-cabinets-lockers-free-257610">https://assetstore.unity.com/packages/audio/sound-fx/foley/door-cabinets-lockers-free-257610</a>
            <br>
        
        Door Free pack Aferar
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/3d/props/interior/door-free-pack-aferar-148411">https://assetstore.unity.com/packages/3d/props/interior/door-free-pack-aferar-148411</a>
            <br>
        
        Free stylized textures
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/2d/textures-materials/free-stylized-textures-204742">https://assetstore.unity.com/packages/2d/textures-materials/free-stylized-textures-204742</a>
            <br>
        
        Hair Shaders
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/tools/hair-shader-1-0-117773">https://assetstore.unity.com/packages/tools/hair-shader-1-0-117773</a>
            <br>
        
        Horror Elements Audio Sound fx
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/audio/sound-fx/horror-elements-112021">https://assetstore.unity.com/packages/audio/sound-fx/horror-elements-112021</a>
            <br>
        
        Japanese School Stylized
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/3d/environments/japanese-school-stylized-221256">https://assetstore.unity.com/packages/3d/environments/japanese-school-stylized-221256</a>
            <br>
        
        Metal Door
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/3d/props/metal-door-5397">https://assetstore.unity.com/packages/3d/props/metal-door-5397</a>
            <br>
        
        Modular Fences Pack
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/3d/props/industrial/modular-fences-pack-34359">https://assetstore.unity.com/packages/3d/props/industrial/modular-fences-pack-34359</a>
            <br>
            
        Oculus Integration
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/tools/integration/oculus-integration-82022">https://assetstore.unity.com/packages/tools/integration/oculus-integration-82022</a>
            <br>
        
        QA Books
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/3d/props/interior/qa-books-115415">https://assetstore.unity.com/packages/3d/props/interior/qa-books-115415</a>
            <br>
        
        Realistic Fences
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/3d/environments/realistic-fences-pack-211850">https://assetstore.unity.com/packages/3d/environments/realistic-fences-pack-211850</a>
            <br>
        
        Realistic Tree 9 rainbow
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/3d/vegetation/trees/realistic-tree-9-rainbow-tree-54622">https://assetstore.unity.com/packages/3d/vegetation/trees/realistic-tree-9-rainbow-tree-54622</a>
            <br>
        
        Simple Street Props
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/3d/props/simple-street-props-194706">https://assetstore.unity.com/packages/3d/props/simple-street-props-194706</a>
            <br>
    
        Single Street Lamp
            <br>
            <a target="_blank" href="https://assetstore.unity.com/packages/3d/environments/urban/single-street-lamp-121728">https://assetstore.unity.com/packages/3d/environments/urban/single-street-lamp-121728</a>
            <br>
        </h3>
        <button id="btn_credits_close" class="aboutus">Cerrar</button>
    </dialog>
</footer>
<script>
    function aboutus() {
       const btn_aboutus_open = document.querySelector("#btn_aboutus_open");
       const btn_aboutus_close = document.querySelector("#btn_aboutus_close");
       const modalaboutus = document.querySelector("#modalaboutus");

       btn_aboutus_open.addEventListener("click",()=>{
        modalaboutus.showModal();
       })
       btn_aboutus_close.addEventListener("click",()=>{
        modalaboutus.close();
       })
    }

    function credits() {
       const btn_credits_open = document.querySelector("#btn_credits_open");
       const btn_credits_close = document.querySelector("#btn_credits_close");
       const modalcredits = document.querySelector("#modalcredits");

       btn_credits_open.addEventListener("click",()=>{
        modalcredits.showModal();
       })
       btn_credits_close.addEventListener("click",()=>{
        modalcredits.close();
       })
    }
</script>

@endsection