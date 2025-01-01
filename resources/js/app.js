require('./bootstrap');

VANTA.NET({
    el: "#dot-matrix",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: "#a9a7a7",
    backgroundColor: "#232327",
    points: 14.00,
    maxDistance: 18.00,
    spacing: 16.00,
    onInit: function() {
        console.log('callback - dot-matrix config loaded');
    }
});
