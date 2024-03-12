let registrarProducto = async()=>{
    let url="?controlador=producto&accion=registrar";
    fd= new FormData();
    fd.append("producto" , document.getElementById("producto").value);
    fd.append("precio" , document.getElementById("precio").value);
    fd.append("img" , document.getElementById("img").files[0]);

    let respuesta = await fetch(url,{
        method:"post",
        body : fd
    });
    let info =await respuesta.json();
    Swal.fire({
        position: "top-end",
        icon: info.icono,
        title: info.mensaje,
        showConfirmButton: false,
        timer: 1500
      });
      setTimeout(() => {
        window.location.href="?controlador=producto&accion=principal";
      }, 1500);
      
      $("#frmpro")[0].reset();
}

let EditarProducto = async () => {
    let formUrl = "?controlador=producto&accion=editar";
    fd = new FormData();
    fd.append("producto", document.getElementById("producto").value);
    fd.append("precio", document.getElementById("precio").value);
    fd.append("uid", document.getElementById("uid").value);
  
    let respuesta = await fetch(formUrl, {
      method: "post",
      body: fd,
    });
    let info = await respuesta.json();
    Swal.fire({
      icon: info.icono,
      title: info.mensaje,
      timer: 2000,
    });
    setTimeout(() => {
        window.location.href='?controlador=producto&accion=principal';
      }, 1500);
    
  };

  let eliminar = async()=>{
    Swal.fire({
      title: "¿Estás seguro?",
      text: "No podrás revertir esto.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sí, eliminar",
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "¡Eliminado!",
          text: "Tu archivo ha sido eliminado.",
          icon: "success",
          timer: 2000,
        });
         setTimeout(() => {
            window.location.href = `?controlador=producto&accion=eliminar${uid}`;
          }, 1500);
      }
    });
}

