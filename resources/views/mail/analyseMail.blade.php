<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intake Aanmelding</title>
    <style>
        /* Reset styles */
        body, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Responsive container */
        .container {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        /* Heading styles */
        h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Paragraph styles */
        p {
            margin-bottom: 10px;
        }

        /* Contact details */
        .contact-details {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            padding: 15px;
            margin-top: 20px;
        }

        .contact-details p {
            margin-bottom: 5px;
        }

        /* Responsive adjustments */
        @media only screen and (max-width: 480px) {
            body {
                padding: 10px;
            }

            .container {
                padding: 10px;
            }

            h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Beste Rob,</h1>

        <p>{{ $name }} heeft zich aangemeld.
        Neem op <b> vóór {{$date2}} </b> op met de kandidaat.</p>

        <div class="contact-details">
            <p><strong>Contactgegevens:</strong></p>
            <p>Naam: {{ $name }}</p>
            <p>Telefoon: {{ $telefoon }}</p>
            <p>Email: {{ $mail }}</p>
            <p>Datum intake: {{ $date2 }}</p>
            <p>Tijdstip: {{ $time }}</p>
            <p>Gekozen dienst: {{ $pakket }}</p>
        </div>
    </div>
</body>
</html>
