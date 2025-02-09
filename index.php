<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Prayer Times Casablanca</title>
</head>
<body>
    <div class="container text-center">
        <h1 class="p-4">Prayer Times in Casablanca</h1>
        <p id="date"></p>
        <div class="clock" id="hour">
        </div>
        <div class="row d-flex justify-content-center p-4">
            <div class="col-md-2">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h5>Fajr</h5>
                        <p id="fajr">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5>Duhr</h5>
                        <p id="duhr">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5>Asr</h5>
                        <p id="asr">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5>Maghrib</h5>
                        <p id="maghrib">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5>Isha</h5>
                        <p id="isha">Loading...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>