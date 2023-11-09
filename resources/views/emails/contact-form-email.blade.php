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
            background-color: #666;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #333;
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
        <p>De: {{ $contact['name'] }}</p>
        <p>Teléfono: {{ $contact['phone'] }}</p>
        <p>Correo: {{ $contact['email'] }}</p>
        <p>Mensaje:</p>
        <p>{{ $contact['contactMessage'] }}</p>

        <div class="contact-info">
            <p>Motores y Bombas de Occidentes.</p>
        </div>

    </div>
</body>
