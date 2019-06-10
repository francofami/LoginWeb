function Registro()
{
    let xhr : XMLHttpRequest = new XMLHttpRequest();
    let regusername : string = (<HTMLInputElement> document.getElementById("regusername")).value;
    let regpassword : string = (<HTMLInputElement> document.getElementById("regpassword")).value;
    let regrepassword : string = (<HTMLInputElement> document.getElementById("regrepassword")).value;
    
    let form : FormData = new FormData();
    form.append('regusername', regusername);
    form.append('regpassword', regpassword);
    form.append('regrepassword', regrepassword);
    xhr.open('POST', './BACKEND/index.php', true);
    xhr.setRequestHeader("enctype", "multipart/form-data");
    xhr.send(form);
}

function Login()
{
    let xhr : XMLHttpRequest = new XMLHttpRequest();
    let username : string = (<HTMLInputElement> document.getElementById("username")).value;
    let password : string = (<HTMLInputElement> document.getElementById("password")).value;

    let form : FormData = new FormData();
    form.append('username', username);
    form.append('password', password);
    xhr.open('POST', './BACKEND/index.php', true);
    xhr.setRequestHeader("enctype", "multipart/form-data");
    xhr.send(form);    
}