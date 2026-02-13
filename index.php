  <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $datos = [
        "tipoReporte" => $_POST['tipoReporte'] ?? '',
        "Entidad" => $_POST['Entidad'] ?? '',
        "areaProceso" => $_POST['areaProceso'] ?? '', 
        "fechaAproximada" => $_POST['fechaAproximada'] ?? '',
        "lugarHechos" => $_POST['lugarHechos'] ?? '',
        "descripcionHechos" => $_POST['descripcionHechos'] ?? '',
        "personasInvolucradas" => $_POST['personasInvolucradas'] ?? '',
        "Anonimo" => $_POST['Anonimo'] ?? '',
        "nombreCompleto" => $_POST['nombreCompleto'] ?? '',
        "relacionEntidad" => $_POST['relacionEntidad'] ?? '',
        "correoElectronico" => $_POST['correoElectronico'] ?? '',
        "telefonoContacto" => $_POST['telefonoContacto'] ?? '',
        "autorizacionTratamientoDatos" => isset($_POST['autorizacionTratamientoDatos']),
        "declaraBuenaFe" => isset($_POST['declaraBuenaFe']),
        "fechaEnvio" => date("Y-m-d"),
        "estadoDenuncia" => $_POST['estadoDenuncia'] ?? ''
    ];
  
    echo "<script>";
    echo "console.log(" . json_encode($datos) . ");";
    echo "</script>";
}
?>

  <!DOCTYPE html>
  <html lang="es">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Canal Ético - PTEE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body class=" font-sans">

    <header class="bg-blue-900 text-white py-4 text-xl font-bold relative">
      <img src="./assets/CEMIDBLANCO.png" alt="Logo"
        class="h-15 absolute left-4 top-1/2 -translate-y-1/2 hidden md:block">
      <div class="text-center">
        Canal Ético - PTEE
      </div>
    </header>
    <form action="" method="post" class="form-box">

      <main class="max-w-5xl mx-auto px-4">
  
        <h1 class="text-2xl font-bold text-[#00487A] text-center mt-6">
          Canal Ético - Programa de Transparencia y Ética Empresarial (PTEE)
        </h1>
  
        <p class="text-gray-600 text-sm text-center mt-3">
          Este canal hace parte del PTEE de la Corporación Educativa Minuto de Dios, en cumplimiento de la
          Circular Externa 20251000000035CS de la Superintendencia de
          Vigilancia y Seguridad Privada. Está destinado a reportar, de buena fe, posibles actos de corrupción,
          soborno, fraude o incumplimientos éticos.
        </p>
  
        <div class="flex justify-between mt-8 border-b pb-3 text-sm font-semibold">
          <div id="step-1" class="step text-blue-900 border-b-4 border-blue-900">1. Contexto</div>
          <div id="step-2" class="step text-gray-400">2. Detalles</div>
          <div id="step-3" class="step text-gray-400">3. Información</div>
          <div id="step-4" class="step text-gray-400">4. Finaliza</div>
        </div>
        
         <input type="hidden" id="estadoDenuncia" name="estadoDenuncia" value="Pendiente">

        <input type="hidden" id="tiempo_inicio" name="tiempo_inicio">
        <input type="hidden" name="tipoReporte" id="tipoReporte">
        <div id="paso-1" class="requerido paso bg-white rounded-2xl shadow p-6 mt-6">
          <label class="block font-semibold mb-2">Tipo de reporte</label>
  
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
  
            <button type="button" data-value="Corrupción o soborno"
    class="opcion border rounded-xl p-3 flex items-center gap-3 transition">
    <img src="./assets/tramposo.png" class="w-10 h-10 object-contain">
    <span>Corrupción o soborno</span>
  </button>
  
  <button type="button" data-value="Fraude o manipulación"
    class="opcion border rounded-xl p-3 flex items-center gap-3 transition">
    <img src="./assets/fraude.png" class="w-10 h-10 object-contain">
    <span>Fraude o manipulación</span>
  </button>
  
  <button type="button" data-value="Conflicto de interés"
    class="opcion border rounded-xl p-3 flex items-center gap-3 transition">
    <img src="./assets/conflictos.png" class="w-10 h-10 object-contain">
    <span>Conflicto de interés</span>
  </button>
  
  <button type="button" data-value="Incumplimiento PTEE o Código de Ética"
    class="opcion border rounded-xl p-3 flex items-center gap-3 transition">
    <img src="./assets/incumplimiento.png" class="w-10 h-10 object-contain">
    <span>Incumplimiento PTEE o Código de Ética</span>
  </button> 
  
          </div>
  
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 py-4">
            <div>
              <label class="block  font-semibold mb-1">
                Entidad involucrada
              </label>
              <select id="Entidad" name="Entidad" class=" requerido w-full border  border-gray-300 rounded-lg p-2
                focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600
                bg-white">
                <option value="" disabled selected>Seleccione una Entidad</option>
                <option value="CEMID">CEMID</option>
                <option value="San Pablo">San Pablo</option>
                <option value="Formemos">Formemos</option>
                <option value="Coompuente">Coompuente</option>
                <option value="especializada">Coop especializada de Educación (Nocturno)</option>
                <option value="Fundación">Fundación Rafael Pombo</option>
              </select>
            </div>
            <div>
              <label class="block font-semibold mb-1">
                Área o proceso involucrado
              </label>
              <input type="text" id="areaProceso" name="areaProceso" class="requerido w-full border border-gray-300 rounded-lg p-2
                focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600">
            </div>
            <div>
              <label class="block font-semibold mb-1">
                Fecha aproximada
              </label>
              <input type="date" id="fechaAproximada" name="fechaAproximada" class="requerido w-full border border-gray-300 rounded-lg p-2
                focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600">
            </div>
          </div>
      
          <div class="flex justify-between mt-6 py-2">
            <button disabled class="border px-4 py-2 rounded text-gray-400 cursor-not-allowed">
              Atras
            </button>
  
              <button type="button" onclick="siguientePaso()" class="bg-blue-900 text-white px-6 py-2 rounded">
              Siguiente
            </button>
          </div>
        </div>
        </div>
  
        <div id="paso-2" class=" paso hidden bg-white rounded-2xl shadow p-6 mt-6">
  
          <label class="block font-semibold mb-2">Lugar o sede donde ocurrieron los hechos</label>
          <textarea id="lugarHechos" name="lugarHechos" class="requerido w-full border rounded p-2 mb-4"
            placeholder="Describe la sede, ciudad o lugar específico donde sucedieron los hechos."></textarea>
  
          <label class="block font-semibold mb-2">Descripción de los hechos</label>
          <textarea id="descripcionHechos" name="descripcionHechos" rows="2" class="requerido w-full border rounded p-2 mb-4"
            placeholder="Describe de manera clara qué ocurrió, cómo ocurrió y quiénes están involucrados, en lo posible con datos verificables."></textarea>
  
          <label class="block font-semibold mb-2">Personas involucradas (si las conoces)</label>
          <textarea id="personasInvolucradas" name="personasInvolucradas" rows="2" class="requerido w-full border rounded p-2 mb-4"
            placeholder="Incluye nombres, cargos o cualquier dato que permita identificar a las personas mencionadas."></textarea>
      
          <div class="flex justify-between mt-6">
            <button type="button" onclick="pasoAnterior()" class="border px-4 py-2 rounded">
              Atras
            </button>
  
            <button type="button" onclick="siguientePaso()" class="bg-blue-900 text-white px-6 py-2 rounded">
              Siguiente
            </button>
          </div>
        </div>
  
        <div id="paso-3" class="paso hidden bg-white rounded-2xl shadow p-6 mt-6">
  
      <label class="block font-semibold mb-1">
        ¿Desea realizar el reporte de forma anonima?
      </label>
  
      <select id="Anonimo" name="Anonimo" class="w-full border rounded p-2 mb-4" onchange="AnonimoSi()">
        <option value="No">No</option>
        <option value="Si">Si</option>
      </select>
  
      <div id="datos-personales" class="grid grid-cols-1 md:grid-cols-2 gap-4 py-2">
        <div>
          <label id="nombre" class="block font-semibold mb-1">Nombre completo</label>
          <input type="text" id="nombreCompleto" name="nombreCompleto" class="requerido w-full border rounded p-2 mb-4">
        </div>
  
        <div>
          <label class="block font-semibold mb-1">Relación con la Entidad</label>
          <input type="text" id="relacionEntidad" name="relacionEntidad" class="requerido w-full border rounded p-2">
        </div>
  
        <div>
          <label class="block font-semibold mb-1">Correo electrónico</label>
          <input type="text" id="correoElectronico" name="correoElectronico" class="requerido w-full border rounded p-2 mb-4">
        </div>
  
        <div>
          <label class="block font-semibold mb-1">Teléfono de contacto</label>
          <input type="text" id="telefonoContacto" name="telefonoContacto" class="requerido w-full border rounded p-2">
        </div>
          </div>
  
          <div class="flex justify-between mt-6">
            <button type="button" onclick="pasoAnterior()" class="border px-4 py-2 rounded">
              Atras
            </button>
  
            <button type="button" onclick="siguientePaso()" class="bg-blue-900 text-white px-6 py-2 rounded">
              Siguiente
            </button>
          </div>
        </div>
        </div>
  
  
        <div id="paso-4" class="paso hidden bg-white rounded-2xl shadow p-6 mt-6 text-center">
  
      <h2 class="text-xl font-bold text-blue-900 mb-4">
        Autorización de tratamiento de datos personales
      </h2>
  
      <p class="text-gray-600 mb-6">
        La corporación Educativa Minuto de Dios garantiza la confidencialidad de la información y prohíbe cualquier
        represalia contra quienes denuncien de buena fe. La información será tratada conforme al PTEE y a los
        procedimientos internos definidos según la Circular Externa 20251000000035CS.
      </p>
      <p class="text-blue-900 font-semibold mb-2">
        Autorizo el tratamiento de mis datos personales conforme a la Política de Tratamiento de Datos de
        la Corporación Educativa Minuto de Dios y a las finalidades asociadas a la gestión de denuncias del PTEE.
      </p>
  
      <div class="flex items-start gap-3 mb-6">
        <input type="checkbox" id="autorizacionTratamientoDatos" name="autorizacionTratamientoDatos" class="requerido mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded
          focus:ring-blue-600">
        <label class="text-sm text-gray-700">
          Sí autorizo. Puede consultar la
          <a href="https://corporacioneducativaminutodedios.edu.co/hubfs/Minuto%20de%20Dios%20-%20Main%20Theme/DOCUMENTOS%20CEMID/Politica-TratamientoDatos.pdf"
            class="text-blue-700 font-semibold underline hover:text-blue-900"
            target="_blank"
            rel="noopener noreferrer">
            Política de Tratamiento de Datos Personales
          </a>
          en el siguiente enlace.
        </label>
      </div>
  
      <p class="text-blue-900 font-semibold mb-2">
        Declaración de buena fe
      </p>
  
      <div class="flex items-start gap-3 mb-6">
        <input type="checkbox" id="declaraBuenaFe" name="declaraBuenaFe" class="requerido mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded
          focus:ring-blue-600">
        <label class="text-sm text-gray-700">
          Declaro que la información suministrada es veraz según mi conocimiento y que actué de buena fe,
          entendiendo que el uso malintencionado de este canal puede generar responsabilidades; por tanto,
          confirmo el envío de esta denuncia al Canal Ético.
        </label>
      </div>
  
  
          <div class="flex justify-between mt-6">
            <button type="button" onclick="pasoAnterior()" class="border px-4 py-2 rounded">
              Atras
            </button>
  
           <button type="button" onclick="finalizar()" class="bg-blue-900 text-white px-6 py-2 rounded">
              Finalizar
            </button>
          </div>
        </div>
      </main>
    </form>
  <script>
    
    document.getElementById("tiempo_inicio").value = Date.now();
    const botones = document.querySelectorAll('.opcion');
    let opcionSeleccionada = false;
    let pasoActual = 1;
    const inputHidden = document.getElementById('tipoReporte');

botones.forEach(boton => {
  boton.addEventListener('click', () => {

    botones.forEach(b => b.classList.remove('bg-[#EEAD15]'));
    boton.classList.add('bg-[#EEAD15]');

    opcionSeleccionada = true;
    inputHidden.value = boton.dataset.value;
  });
});

function mostrarPaso(paso) {
  document.querySelectorAll('.paso').forEach(p => p.classList.add('hidden'));

  document.querySelectorAll('.step').forEach(s => {
    s.classList.remove('text-blue-900','border-b-4','border-blue-900');
    s.classList.add('text-gray-400');
  });

  document.getElementById(`paso-${paso}`).classList.remove('hidden');

  const step = document.getElementById(`step-${paso}`);
  step.classList.add('text-blue-900','border-b-4','border-blue-900');
  step.classList.remove('text-gray-400');

  pasoActual = paso;
}

function siguientePaso() {
  if (!validarPaso(pasoActual)) return;
  if (pasoActual < 4) mostrarPaso(pasoActual + 1);
}

function pasoAnterior() {
  if (pasoActual > 1) mostrarPaso(pasoActual - 1);
}

function validarPaso(paso) {

  let valido = true;
  let primerError = null;

  if (paso === 1 && !opcionSeleccionada) {
    const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: false,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});
Toast.fire({
  icon: "info",
  title: "Seleccione un tipo de reporte"
});
    return false;
  }

  const Anonimo = document.getElementById("Anonimo")?.value;
  const campos = document.querySelectorAll(`#paso-${paso} .requerido`);

  campos.forEach(campo => {
    if (Anonimo === "Si" && campo.closest('#datos-personales')) {
      return;
    }

    if (campo.type === "checkbox") {
      if (!campo.checked) {
        valido = false;
        if (!primerError) primerError = campo;
      }
      return;
    }

    if (!campo.value.trim()) {
      campo.classList.add('border-red-500');
      valido = false;
      if (!primerError) primerError = campo;
    } else {
      campo.classList.remove('border-red-500');
    }

    if (campo.id === "correoElectronico" && campo.value.trim() !== "") {
      if (!campo.value.includes("@") || !campo.value.includes(".")) {
        campo.classList.add('border-red-500');
        valido = false;
        if (!primerError) primerError = campo;
      }
    }

    if (campo.id === "telefonoContacto" && campo.value.trim() !== "") {
    const telefonoRegex = /^[0-9]{10}$/;

    if (!telefonoRegex.test(campo.value)) {
      campo.classList.add('border-red-500');
      valido = false;
    if (!primerError) primerError = campo;
   }
  }
  });

  if (!valido && primerError) {
    primerError.scrollIntoView({ behavior: 'smooth', block: 'center' });
    const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: false,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});
Toast.fire({
  icon: "info",
  title: "Por favor complete correctamente los campos obligatorios."
});
  }

  return valido;
}


function AnonimoSi() {
  const Anonimo = document.getElementById("Anonimo").value;
  const datos = document.getElementById("datos-personales");

  if (Anonimo === "Si") {
    datos.style.display = "none";
  } else {
    datos.style.display = "grid";
  }
}


function finalizar() {

  const inicio = document.getElementById("tiempo_inicio").value;
  const ahora = Date.now();
  const segundos = (ahora - inicio) / 1000;

  if (segundos < 5) {
    Swal.fire("Espere unos segundos antes de enviar el formulario");
    return;
  }

  if (!validarPaso(pasoActual)) return;

  Swal.fire({
    icon: 'success',
    title: 'Reporte enviado',
    text: 'Gracias por utilizar el Canal Ético del PTEE.'
  });

  setTimeout(() => {
    document.querySelector("form").submit();
  }, 1500);
}

</script>
  </body>

  </html>