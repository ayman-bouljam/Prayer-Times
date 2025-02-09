function updateClock(){
    const now = new Date();
    const date_options = {
        weekday: 'long', 
        year: 'numeric', 
        month: 'long', 
        day: 'numeric', 
    };

    document.getElementById('date').innerHTML = now.toLocaleDateString('en-MA',date_options);
    const hour_options = {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: false, 
    };
    document.getElementById('hour').innerHTML = now.toLocaleTimeString('en-MA',hour_options);
}
setInterval(()=>{
    updateClock();
},1);

let prayer_times;
async function fetchPraryerTimes(){
    const response = await fetch('prayer_times.php');
    prayer_times = await response.json();
    document.getElementById('fajr').innerHTML = prayer_times.fajr;
    document.getElementById('duhr').innerHTML = prayer_times.duhr;
    document.getElementById('asr').innerHTML = prayer_times.asr;
    document.getElementById('maghrib').innerHTML = prayer_times.maghrib;
    document.getElementById('isha').innerHTML = prayer_times.isha;
}
fetchPraryerTimes();


