var newConfirmed = document.getElementById('newConfirmed');
var newDeaths = document.getElementById('newDeaths');
var totalConfirmed = document.getElementById('totalConfirmed');
var totalDeaths = document.getElementById('totalDeaths');
fetch('https://api.covid19api.com/summary')
    .then(function(response) {
        return response.json();
    })
    .then(function(json) {
        newConfirmed.innerText = `New Confirmed: ${json.Global.NewConfirmed}`
        newDeaths.innerText = `New Deaths: ${json.Global.NewDeaths}`
        totalConfirmed.innerText = `New Confirmed: ${json.Global.TotalConfirmed}`
        totalDeaths.innerText = `New Deaths: ${json.Global.TotalDeaths}`
        console.log(json.Global);
    })

newConfirmed.innerText = `New Confirmed: 123`