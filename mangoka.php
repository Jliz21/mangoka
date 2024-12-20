<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Gift Exchange</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4CAF50, #8BC34A);
            color: #fff;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        button {
            font-size: 1.2rem;
            padding: 10px 20px;
            background-color: #ffffff;
            color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #4CAF50;
            color: #ffffff;
        }
        .result {
            margin-top: 20px;
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Secret Gift Exchange</h1>
    <p>Click the button to draw a name for your gift exchange. The name will be shown only to you!</p>
    <button onclick="drawName()">Draw Name</button>
    <div class="result" id="result"></div>

    <script>
        // List of names
        const names = ["Jason", "Khia", "Sandy", "Donna", "CJ", "Fiona"];

        function drawName() {
            if (names.length === 0) {
                document.getElementById('result').innerText = "All names have been drawn!";
                return;
            }

            // Draw a random name
            const randomIndex = Math.floor(Math.random() * names.length);
            const drawnName = names[randomIndex];

            // Remove the drawn name from the array
            names.splice(randomIndex, 1);

            // Display the drawn name
            document.getElementById('result').innerText = `You drew: ${drawnName}`;
        }
    </script>
</body>
</html>
