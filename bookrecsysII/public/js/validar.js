function validarValoracion(){
    var titulo, autor, anio, descripcion,   opinion, valoracion, expresion;
    titulo = document.getElementById("titulo").value;
    autor = document.getElementById("autor").value;
    anio = document.getElementById("anio").value;
    descripcion = document.getElementById("descripcion").value;
    opinion = document.getElementById("opinion").value;
    valoracion = document.getElementById("valoracion").value;

    if(titulo === ""){
        alert("El campo título está vacío. Por favor, rellénelo");
        return false;
    }
    else if(autor === ""){
        alert("El campo autor está vacío. Por favor, rellénelo");
        return false;
    }
    else if(anio === ""){
        alert("El campo año está vacío. Por favor, rellénelo");
        return false;
    }
    else if(descripcion === ""){
        alert("El campo descripción está vacío. Por favor, rellénelo");
        return false;
    }
    else if(opinion === ""){
        alert("El campo opinión está vacío. Por favor, rellénelo");
        return false;
    }
    else if(valoracion === ""){
        alert("El campo valoración está vacío. Por favor, rellénelo");
        return false;
    }

    else if(titulo.length > 30){
        alert("El campo título no puede tener más de 30 caracteres");
        return false;
    }
    else if(autor.length > 30){
        alert("El campo autor no puede tener más de 30 caracteres");
        return false;
    }
    else if(descripcion.length > 100000){
        alert("El campo descripción no puede tener más de 100000 caracteres");
        return false;
    }
    else if(opinion.length > 100000){
        alert("El campo opinion no puede tener más de 100000 caracteres");
        return false;
    }

    else if(anio < 1000 || anio > 2019 || isNaN(anio)){
        alert("El campo año debe ser un número y estar comprendido entre el año 1000 y el 2019.");
        return false;
    }

    else if(valoracion < 0 || valoracion > 10 || isNaN(valoracion)){
        alert("El campo valoración debe estar comprendido entre 0 y 10.");
        return false;
    }
}

    function validarUsuario(){
        var nombre_usu, mail, password, expresion;
        nombre_usu = document.getElementById("nombre_usu").value;
        mail = document.getElementById("mail").value;
        password = document.getElementById("password").value;
        
        expresion = /\w+@\w+\.+[a-z]/;

        if(nombre_usu === ""){
            alert("El campo Nombre de Usuario está vacío. Por favor, rellénelo.");
            return false;
        }
        else if(mail === ""){
            alert("El campo EMail está vacío. Por favor, rellénelo.");
            return false;
        }
        else if(!expresion.test(mail)){
            alert("El formato de correo introducido no es correcto. Ejemplo válido -> correo1@dominio.es");
            return false;
        }
        else if(password === ""){
            alert("El campo Contraseña está vacío. Por favor, rellénelo.");
            return false;
        }
        else if(nombre_usu.length > 15){
            alert("El campo Nombre de Usuario no puede tener más de 15 caracteres. Por favor, elija otro.");
            return false;
        }
        else if(mail.length > 30){
            alert("El campo Email no puede tener más de 30 caracteres.");
            return false;
        }
        else if(password.length > 30){
            alert("El campo contraseña no puede tener más de 30 caracteres. Por favor, elija otra.");
            return false;
        }
    }
