function registrar(){
    const nombre = document.getElementById("name").value;
    const apellidos = document.getElementById("lname").value;
    const usuario = document.getElementById("user").value;
    const contraseña = document.getElementById("password").value;
    
    var fs = require('fs');
    fs.writeFile("Base de datos.txt", usuario +"|"+contraseña+"\n" , function(err) {
      if (err) {
        return alert(err);
      }
    
      alert("Se registró correctamente");
    });
    
    document.getElementById("titulo").innerText = nombre +" " +apellidos;

}
    

function cerrar(){
  alert("Se cerró correctamente");
 
}
    //document.getElementById("titulo").innerText = nombre +" " +apellido;
  

    
    /*var fs = require('fs');

fs.writeFile("Base de datos.txt", nombre +" | "+contraseña+"\n" , function(err) {
  if (err) {
    return console.log(err);
  }

  alert("Se registró correctamente");
});
}
    /*const fs = require('fs');

let data = nombre + " " + contraseña;
fs.writeFile('', data)
function ingresar(){

fs.readFile('contenido.txt', 'utf8', function(err, data) {
  if (err) {
    return console.log(err);
  }

  console.log(data)
});
}*/


