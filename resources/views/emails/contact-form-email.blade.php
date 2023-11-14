<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border: #333;
            border-radius: 5%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            color: black;
        }

        p {
            color: black;
        }

        .contact-info {
            font-size: 18px;
        }

        .signature {
            font-weight: bold;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Mensaje de contacto</h2>
        </div>
        <p>De: {{ $contact['nombre'] }}</p>
        <p>Teléfono: {{ $contact['teléfono'] }}</p>
        <p>Correo: {{ $contact['correo'] }}</p>
        <p>Mensaje:</p>
        <p>{{ $contact['mensaje'] }} </p>

        <div class="contact-info">
            <p>Motores y Bombas de Occidentes. © Copyright</p>
        </div>

    </div>
</body>
