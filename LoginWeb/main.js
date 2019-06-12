function Registro() {
    var xhr = new XMLHttpRequest();
    var regusername = document.getElementById("regusername").value;
    var regpassword = document.getElementById("regpassword").value;
    var regrepassword = document.getElementById("regrepassword").value;
    var form = new FormData();
    form.append('regusername', regusername);
    form.append('regpassword', regpassword);
    form.append('regrepassword', regrepassword);
    xhr.open('POST', './BACKEND/index.php/usuarios/Alta', true);
    xhr.setRequestHeader("enctype", "multipart/form-data");
    xhr.send(form);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            //Segun la respuesta , registro correcto o no poner una ventana que avise lo acontecido    
        }
    };
}
function Login() {
    var xhr = new XMLHttpRequest();
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var form = new FormData();
    form.append('username', username);
    form.append('password', password);
    xhr.open('POST', './BACKEND/index.php/usuarios/Login', true);
    xhr.setRequestHeader("enctype", "multipart/form-data");
    xhr.send(form);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            if (xhr.responseText == "Logueado con éxito!")
                window.location.replace("./BACKEND/default.php");
            //Hacer una sesion en el momento del login. Para que si alguien entra a bienvenido.php sin haberse logueado tenga que loguearse (lo se porque no hay ninguna sesión) 
        }
    };
}
