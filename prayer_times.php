<?php
    $city = "Casablanca";
    $country = "Morocco";
    $date = 'today';
    $apiUrl = "https://api.aladhan.com/v1/timingsByCity/$date?city=$city&country=$country";
    $response = file_get_contents($apiUrl);
    $data = json_decode($response, false);
    if(isset($data)){
        $fajr = $data->data->timings->Fajr;
        $duhr = $data->data->timings->Dhuhr;
        $asr = $data->data->timings->Asr;
        $maghreb = $data->data->timings->Maghrib;
        $isha = $data->data->timings->Isha;
        echo json_encode(
            [
                'fajr' => $fajr,
                'duhr' => $duhr,
                'asr' => $asr,
                'maghrib' => $maghreb,
                'isha' => $isha,
            ]
            );
    }
    

    
?>