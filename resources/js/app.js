import './bootstrap';
import Quagga from 'quagga'; // ES6
import Alpine from 'alpinejs';

Quagga.init({
    inputStream: {
        name: "Live",
        type: "LiveStream",
        target: document.querySelector('#readResult')    // Or '#yourElement' (optional)
    },
    decoder: {
        readers: ["code_128_reader", "ean_reader", "ean_8_reader", "code_39_reader", "code_39_vin_reader", "codabar_reader", "upc_reader", "upc_e_reader", "i2of5_reader"],
        locate: true
    }
}, function (err) {
    if (err) {
        console.log(err);
        return
    }
    console.log("Initialization finished. Ready to start");
    Quagga.start();
});

console.log("hello world")


Quagga.onDetected(function (result) {
    console.log("Barcode detected : " + result);
});

window.Alpine = Alpine;

Alpine.start();

