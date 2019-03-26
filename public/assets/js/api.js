
    const request = new XMLHttpRequest();
     //save api using - just enable when u need it
    request.open('GET', 'http://api.coinlayer.com/api/live?access_key=022c4f9851295e8e3491e702e6189ac8');
    request.send(); 
     
    request.onload = () => {
        //BTC
        var BTCRates = JSON.parse(request.response).rates.BTC;
        var USDMYR = BTCRates * 4.069;
        var BTCMYR = USDMYR.toFixed(3);
        //ETH
        var ETHRates = JSON.parse(request.response).rates.ETH;
        var USDMYR = ETHRates * 4.069;
        var ETHMYR = USDMYR.toFixed(3);
        //ADA
        var ADARates = JSON.parse(request.response).rates.ADA;
        var USDMYR = ADARates * 4.069;
        var ADAMYR = USDMYR.toFixed(3);

        var timestamp = JSON.parse(request.response).timestamp;
        var date = new Date(timestamp*1000);

        
        document.getElementById("BTCRates").innerHTML="$ MYR " + BTCMYR;
        document.getElementById("ETHRates").innerHTML="$ MYR " + ETHMYR;
        document.getElementById("ADARates").innerHTML="$ MYR " + ADAMYR;
        // document.getElementById("hours").innerHTML=hours + ":" + minutes + " GMT";
        document.getElementById("hours").innerHTML=date.toLocaleTimeString("en-US", {hour: 'numeric', minute:'numeric'});
        document.getElementById("hours1").innerHTML=date.toLocaleTimeString("en-US", {hour: 'numeric', minute:'numeric'});
        document.getElementById("hours2").innerHTML=date.toLocaleTimeString("en-US", {hour: 'numeric', minute:'numeric'});
    };
