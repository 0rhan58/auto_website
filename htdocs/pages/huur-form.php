<!DOCTYPE html>
<html lang="nl">

<?php require "./includes/header.php" ?>

<head>
    <meta charset="UTF-8">
    <title>Auto Reserveren | EasyDrive</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }

        .reservering-container {
            width: 90%;
            max-width: 600px;
            margin: 60px auto;
            background-color: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .reservering-container h2 {
            text-align: center;
            color: #222;
            margin-bottom: 25px;
        }

        .form-groep {
            margin-bottom: 18px;
        }

        .form-groep span {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #333;
        }

        .form-groep input,
        .form-groep select,
        .form-groep textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #bbb;
            border-radius: 8px;
            font-size: 15px;
            background-color: #fdfdfd;
        }

        .form-groep textarea {
            resize: vertical;
        }

        .verzend-knop {
            width: 100%;
            padding: 14px;
            background-color: #007b54;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 10px;
        }

        .verzend-knop:hover {
            background-color: #005c3e;
        }
    </style>
</head>
<body>
    <div class="reservering-container">
        <h2>Reserveer een Voertuig</h2>
        <form action="/bedankt" method="POST">
            <div class="form-groep">
                <span>Naam en Achternaam</span>
                <input type="text" name="naam" required>
            </div>

            <div class="form-groep">
                <span>E-mail</span>
                <input type="email" name="email" required>
            </div>

            <div class="form-groep">
                <span>Mobiele Nummer</span>
                <input type="tel" name="telefoon" required>
            </div>

            <div class="form-groep">
                <span>Voertuigselectie</span>
                <select name="auto" required>
                    <option value="">Kies een model</option>
                    <option value="Golf 8">Volkswagen Golf 8</option>
                    <option value="Tesla 3">Tesla Model 3</option>
                    <option value="Q5 S-Line">Audi Q5 S-Line</option>
                    <option value="Corolla Hybrid">Toyota Corolla Hybrid</option>
                </select>
            </div>

            <div class="form-groep">
                <span>Ophaaldatum</span>
                <input type="date" name="start_datum" required>
            </div>

            <div class="form-groep">
                <span>Inleverdatum</span>
                <input type="date" name="eind_datum" required>
            </div>

            <div class="form-groep">
                <span>Locatie (optioneel)</span>
                <input type="text" name="locatie" placeholder="Bijvoorbeeld: Den Haag CS">
            </div>

            <div class="form-groep">
                <span>Extra wensen of opmerkingen</span>
                <textarea name="bericht" rows="3" placeholder="Bijvoorbeeld: automaat, kinderzitje..."></textarea>
            </div>

            <button type="submit" class="verzend-knop">Reservering Versturen</button>
        </form>
    </div>
</body>

<?php require "includes/footer.php" ?>
</html>
