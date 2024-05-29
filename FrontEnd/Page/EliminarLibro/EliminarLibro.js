window.onload=()=>{
    ObtenerLibro();
 }

 async function ObtenerLibro(){ 
    let url = "http://localhost/CRUD_Biblioteca_EmilioGonzalez/BackEnd/Controller/LibroController.php?function=ObtenerLibro"
    let consulta = await fetch(url);
    let datos = await consulta.json();
    console.log(datos);
   MostrarLibro(datos)
    
 }
 async function EliminarLibro(id){
  let formData = new FormData();
  formData.append("id", id);
  let url = "http://localhost/CRUD_Biblioteca_EmilioGonzalez/BackEnd/Controller/LibroController.php?function=EliminarLibro"
  
  let config = {
      method: 'POST',
      body: formData
}
  let respuesta = await fetch(url, config);
  let datos = await respuesta.json();
  console.log(datos);
  location.reload();
  alert(id);
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
               <td><button onclick="EliminarLibro(${libro[i].id})">Eliminar</button></td>
       </tr>
       `;

}
}