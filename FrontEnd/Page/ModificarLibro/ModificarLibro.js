window.onload=()=>{
  ObtenerLibro();
  ModificarLibro();
}

async function ObtenerLibro(){ 
  let url = "http://localhost/CRUD_Biblioteca_EmilioGonzalez/BackEnd/Controller/LibroController.php?function=ObtenerLibro"
  let consulta = await fetch(url);
  let datos = await consulta.json();
  console.log(datos);
 MostrarLibro(datos)
  
}

function MostrarLibro(libro){
 let tbodyElement = document.querySelector("#tBodyLibros")
 for (let i=0; i < libro.length; i++){
     tbodyElement.innerHTML+= `
         <tr>
             <td>${libro[i].id}</td>
             <td>${libro[i].nombre}</td>
             <td>${libro[i].fecha}</td>
             <td>${libro[i].precio}</td>
             <td><button onclick="CargarDatos('${libro[i].id}', '${libro[i].nombre}', '${libro[i].fecha}', '${libro[i].precio}')">Seleccionar</button></td>
     </tr>
     `;

  }
}
  function CargarDatos(id, nombre, fecha, precio){

    let idInput = document.querySelector("#id");
     idInput.value = id;

    let nombreInput = document.querySelector("#nombre");
      nombreInput.value = nombre;
  
    let fechaInput = document.querySelector("#fecha");
      fechaInput.value = fecha;

    let precioInput = document.querySelector("#precio");
      precioInput.value = precio;
}

async function ModificarLibro(){
  let formElement = document.querySelector("#formModificar")
  
  formElement.onsubmit = async (e) =>{
      e.preventDefault()
      let formData =  new FormData(formElement);
      let url = "http://localhost/CRUD_Biblioteca_EmilioGonzalez/BackEnd/Controller/LibroController.php?function=ModificarLibro"

      let config = {
          method: 'POST',
          body: formData
      }
      
      let respuesta = await fetch(url, config);
      let datos = await respuesta.json();
      location.reload();
      console.log(datos);
      
}
}
