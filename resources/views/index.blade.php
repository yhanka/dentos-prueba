<x-guest-layout>
    <div class="w-full bg-blue-500 h-96">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-4">
                <div class="flex items-center">
                    <div class="bg-red-500 rounded-full w-20 h-20 mr-3">
                    </div>

                    <div class="flex flex-col">
                        <h1>Sara Vega</h1>
                        <p>@saravega</p>
                    </div>
                </div>
            </div>



            <div class="col-span-6 col-start-8">
                <p id="edad">

                    
                </p>

            </div>
        </div>        
    </div>
    <button onclick="agendarCita()" class="bg-green-400 rounded-full py-2 px-4 text-white font-semibold">
        Agendar cita como estas alalslaslalsals askaksaks 
    </button>
    <script>
        var edadPaciente = 18;
        var etiquetaEdad = document.getElementById('edad');
        etiquetaEdad.innerHTML = edadPaciente + " años";


        
        function agendarCita() {
            if (validarEdad(edadPaciente)) {
                alert("Paciente apto para citas")
            }else{
                alert("Ups! para solicitar citas debe ser solicitado por su acudiente")
            }
        }

        function validarEdad(edadValidar) {
            if (edadValidar>=18) {
                return true;
            } else {
                return false;
            }
            
        }

    </script>
</x-guest-layout>