async function listar(accion, datosJson) {
  try {
    const response = await fetch(`controllers/${accion}.controlador.php`, {
      method: "POST",
      body: JSON.stringify(datosJson),
      headers: {
        "Content-Type": "application/json",
      },
    });

    if (!response.ok) {
      throw new Error(`Error en la solicitud: ${response.status}`);
    }

    const data = await response.json();

    // Verificamos si el JSON es válido y tiene la propiedad 'success'
    if (!data || typeof data.success === "undefined") {
      throw new Error("Datos inválidos recibidos");
    }

    if (!data.success) {
      throw new Error(data.message);
    }

    return data; // Devolvemos los datos si todo fue correcto
  } catch (error) {
    console.error("Error:", error.message);
  }
}

// Usamos async/await para esperar que la función listar termine antes de continuar
document.addEventListener("DOMContentLoaded", async function () {
  const totalClientes = await listar("clientes", { accion: "totalClientes" });
  document.getElementById("totalClientes").innerText = totalClientes.data;
});
