<?php

// resources/lang/en/messages.php

return [
    'common' => [
        'update' => 'Actualizar',
        'submit' => 'Enviar',
        'go back' => 'Regresa',
        'edit' => 'Editar',
        'delete' => 'Borrar',
        'profile' => 'Perfil',
        'logout' => 'Cerrar sesión',
        'queue' => 'Cola',
        'served' => 'servido',
        'noshow' => 'No presentarse',
        'serving' => 'Servicio',
        'links' => 'Enlaces',
        'close' => 'Cerrar',
    ],
    'menu' => [
        'dashboard' => 'Tablero',
        'counters' => 'Contadores',
        'services' => 'Servicios',
        'users' => 'Usuarios',
        'call' => 'Llamada',
        'user roles' => 'Roles del usuario',
        'reports' => 'Informes',
        'user report' => 'Informe de usuario',
        'queue list' => 'Lista de cola',
        'monthly report' => 'Reporte mensual',
        'settings' => 'Ajustes',
        'issue token url' => 'URL del quiosco',
        'display url' => 'URL visible',
    ],
    'counter_page' => [
        'counters' => 'Contadores',
        'name' => 'Nombre',
        'status' => 'estado',
        'action' => 'Acción',
        'add counter' => 'Añadir contador',
        'counter name' => 'Nombre del contador',
        'edit counter' => 'Editar contador'
    ],
    'dashboard' => [
        'today queue' => 'Cola de hoy',
        'today served' => 'Hoy servido',
        'today noshow' => 'Hoy No Show',
        'today serving' => 'Hoy sirviendo',
        'today' => 'Hoy dia',
        'today vs yesterday' => 'Hoy vs Ayer',
        'day' => 'Día',
        'number of tokens' => 'Número  de  fichas',
        'yesterday' => 'Ayer',
        'time' => 'Hora',
    ],
    'service_page' => [
        'services' => 'Servicios',
        'name' => 'Nombre',
        'status' => 'Estado',
        'action' => 'Acción',
        'letter' => 'Letra',
        'starting number' => 'Número inicial',
        'add service' => 'Agregar servicio',
        'service name' => 'Nombre del Servicio',
        'edit service' => 'Editar servicio',
        'Ask Name For Token' => 'Pedir nombre para token',
        'Name is required' => 'Se requiere el nombre',
        'Ask Email For Token' => 'Solicitar token por correo electrónico',
        'Email is required' => 'correo electronico es requerido',
        'Ask Phone For Token' => 'Pedir token al teléfono',
        'Phone is required' => 'Se requiere teléfono',
        'Optin Message' => 'Mensaje de suscripción',
        'Optin Message Format' => 'Formato de mensaje de opción',
        'Call Message' => 'Mensaje de llamada',
        'Call Message Format' => 'Formato de mensaje de llamada',
        'No Show Message' => 'Mensaje de ausencia',
        'No Show Message Format' => 'Formato de mensaje de no presentación',
        'Service Completed Message' => 'Mensaje de servicio completado',
        'Service Completed Message Format' => 'Formato de mensaje de servicio completado',
        'Status Message' => 'Mensaje de estado',
        'Status Message Format' => 'Formato de mensaje de estado',
        'Send status message when position is' => 'Enviar mensaje de estado cuando la posición es',
        'Message Keywords' => 'Palabras clave del mensaje',
        'Token Number' => 'Número de ficha',
        'Name of the service from which user has taken the token' => 'Nombre del servicio del que el usuario ha tomado el token',
        'Token Date' => 'Fecha del token',
        'Name of the counter' => 'nombre del contador',
        'Current position of user in the queue' => 'Posición actual del usuario en la cola',
    ],
    'user_page' => [
        'users' => 'Usuarios',
        'name' => 'Nombre',
        'email' => 'Correo electrónico',
        'action' => 'Acción',
        'add user' => 'Agregar usuario',
        'password' => 'Clave',
        'image' => 'Imagen',
        'role' => 'Papel',
        'select role' => 'Seleccionar rol',
        'edit user' => 'editar usuario'
    ],
    'user_roles_page' => [
        'user roles' => 'Roles del usuario',
        'name' => 'Nombre',
        'action' => 'Acción',
        'add user role' => 'Añadir rol de usuario',
        'role name' => ' Nombre de rol',
        'module' => 'Módulo',
        'access' => 'Acceso',
        'view dashboard' => 'Ver panel',
        'view counters' => 'Ver contadores',
        'view services' => 'Ver servicios',
        'view users' => 'Ver usuarios',
        'call token' => 'Token de llamada',
        'issue token' => 'Token de emisión',
        'view display' => 'Ver pantalla',
        'view reports' => 'Ver los informes',
        'view profile' => 'Ver perfil',
        'view settings' => 'Ver configuraciones',
        'view user roles' => 'Ver roles de usuario',
        'select all' => 'Seleccionar todo',
        'edit user role' => 'Editar rol de usuario',
    ],
    'reports' => [
        'select user' => 'Seleccionar usuario',
        'select service' => 'Seleccionar servicio',
        'select counter' => 'Seleccionar contador',
        'select status' => 'Seleccionar estado',
        'all users' => 'Todos los usuarios',
        'all services' => '
        Todos los servicios',
        'all counters' => '
        Todos los contadores',
        'all statuses' => 'Todos los estados',
        'date' => 'Fecha',
        'go' => '
        Ir',
        'service' => 'Servicio',
        'token number' => 'Número de ficha',
        'counter' => 'Contador',
        'called' => 'Llamado',
        'user' => 'Usuario',
        'starting date' => 'Fecha de inicio',
        'ending date' => 'Fecha de finalización',
        'called date' => 'Fecha de llamada',
        'issued time' => 'Tiempo emitido',
        'called time' => 'Tiempo llamado',
        'total time' => 'Tiempo Total',
        'served time' => 'Tiempo servido',
        'waiting time' => 'Tiempo de espera',
        'served at' => 'Servido en',
        'called at' => 'Llamado a',
        'report' => 'Informe',
    ],
    'settings' => [
        'company settings' => 'Configuración de la empresa',
        'name' => 'Nombre',
        'email' => 'Correo electrónico',
        'address' => 'Habla a',
        'phone' => 'Teléfono',
        'location' => 'Ubicación',
        'timezone' => 'Zona horaria',
        'logo' => 'Logo',
        'change default language' => 'Cambiar idioma predeterminado',
        'select language' => 'Seleccione el idioma',
        'notification' => 'Notificación',
        'preview' => 'Avance',
        'notification text' => 'Texto de notificación',
        'font size' => 'Tamaño de fuente',
        'color' => 'Color',
        'display voice settings' => 'Mostrar configuración de voz',
        'please proceed to translation' => 'Continúe con la traducción',
        'token translation' => 'Traducción de tokens',
        'Preview' => 'Avance',
        'select timezone' => 'Selecciona la zona horaria',
        'General Settings' => 'Configuración general',
        'SMS Settings' => 'Configuración de SMS',
        'URL Keywords' => 'Palabras clave de URL',
        'Phone Number' => 'Número de teléfono',
        'SMS Text' => 'SMS de texto',
        'SMS URL' => 'URL de SMS',
        'SMS Enabled' => 'SMS habilitado',
    ],
    'call_page' => [
        'set service and counter' => "Establecer servicio y mostrador",
        'service' => 'Servicio',
        'counter' => 'Contador',
        'choose your counter' => 'Elige tu mostrador',
        'choose your service' => 'Elige tu servicio',
        'served' => 'Servido',
        'noshow' => 'No presentarse',
        'call next' => 'llamar siguiente',
        'recall' => 'Recordar',
        'nil' => 'NULO',
        'no ticket available' => 'No hay boleto disponible',
        'next to call' => 'Siguiente para llamar',
        'called' => 'Llamado',
        'walk in' => 'ENTRAR',
        'recalled' => 'Retirado',
        'already used' => 'Ya usado',
        'already selected' => 'Ya seleccionado',
        'already called' => 'ya llamado',
        'something went wrong' => 'algo salió mal',
    ],
    'issue_token' => [
        'click one service to issue token' => 'Haga clic en un servicio para emitir token',
        'customer waiting' => 'Cliente en espera',
        'please wait for your turn' => 'por favor espera tu turno'
    ],
    'display' => [
        'token number' => 'Número de ficha',
        'please proceed to' => 'por favor proceda a',
        'served' => 'SERVIDO',
        'noshow' => 'NO PRESENTACIÓN',
        'serving' => 'SERVICIO',
        'nil' => 'NULO',
    ],
    'profile' => [
        'change password' => 'Cambia la contraseña',
        'new password' => 'Nueva contraseña',
        'confirm password' => 'Confirmar contraseña',
    ]

];
