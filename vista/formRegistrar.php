   <main class="form-main">
        <div class="contenedor">        
            <h1 class="titulo">Formulario</h1>
        </div>  
        <form action="" method="POST" class="form grid col-4" onsubmit="return enviar()">

            <div class="form__contenedor span-col-4 span-col-md-2">

                <label for="nombreP" class="form__label">Nombre</label>
                <input type="text" id="nombreP" class="form__input" placeholder="ej: Benito">

               <label for="apellidoP" class="form__label">Apellido</label>
               <input type="text" id="apellidoP" class="form__input" placeholder="ej: Rodriguez">

                <label for="ci" class="form__label">Cedula</label>
                <div class="span-col-4 span-col-md-2">
                    <select name="" id="" class="form__select">
                        <option value="V">V</option>
                        <option value="F">F</option>
                    </select>
                    <input type="text" id="ci" class="form__input span-col-3" placeholder="ej: 123456789">
                </div> 

                <label for="tel" class="form__label">Telefono</label>
                <input type="text" id="tel" class="form__input" placeholder="ej: 02121234567"> 

            </div>
            <div class="form__contenedor span-col-4 span-col-md-2">

                <label for="nombreS" class="form__label">Segundo Nombre</label>
                <input type="text" id="nombreS" class="form__input" placeholder="ej: Camela">

                <label for="apellidoS" class="form__label"> Segundo Apellido</label>
                <input type="text" id="apellidoS" class="form__input" placeholder="ej: Rosa">

            <label for="email" class="form__label">Email</label>
            <input type="text" id="email" class="form__input" placeholder="ej: example@mail.com"> 

            </div>

            <div class="form__contenedor span-col-4 span-col-md-2">

                <h2 class="form__subtitulo">Genero</h2>

                <div class="grid col-6">

                    <div class="span-col-2">
                        Hombre: <input type="radio" id="hombre" value="hombre" name="sexo">
                    </div>

                    <div class="span-col-2">
                        Mujer: <input type="radio" id="mujer" value="mujer" name="sexo">
                    </div>

                    <div class="span-col-2">
                        Otros: <input type="radio" id="otros" value="otros" name="sexo">
                    </div>

                </div>

            </div>

            <div class="form__contenedor span-col-4 span-col-md-2">
                <h2 class="form__subtitulo">fecha de Nacimiento</h2>
                <input type="date" id="fechaNacimiento" class="form__input">
            </div>

            <div class="form__contenedor span-col-4">
               <button type="submit" class="form__btn">Enviar</button>
           </div>

        </form>
    </main>
        
</body>
</html>