window.onload=()=>{
    ObtenerLibroPorPrecio();
 }

 async function ObtenerLibroPorPrecio(){ 
    let url = "http://localhost/CRUD_Biblioteca_EmilioGonzalez/BackEnd/Controlador/ControladorLibro.php?funcion=ObtenerLibroPorPrecio"
    let consulta = await fetch(url);
    let datos = await consulta.json();
    console.log(datos);
   MostrarLibro(datos)
    
 }
 
 function MostrarLibro(libro){
   let tbodyElement = document.querySelector("#cuerpoTablaUsuarios")
   for (let i=0; i < libro.length; i++){
       tbodyElement.innerHTML+= `
           <tr>
               <td>${libro[i].id}</td>
               <td>${libro[i].nombre}</td>
               <td>${libro[i].fecha}</td>
               <td>${libro[i].precio}</td>
       </tr>
       `;

}
}