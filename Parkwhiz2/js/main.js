
// Parkwhiz Main JavaScript
function openDrawer() {
    document.getElementById('drawer').classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closeDrawer() {
    document.getElementById('drawer').classList.remove('active');
    document.body.style.overflow = '';
}
// Dashboard map/list toggle
function showMap() {
    var mapSection = document.getElementById('mapSection');
    var listSection = document.getElementById('listSection');
    var mapBtn = document.getElementById('mapBtn');
    var listBtn = document.getElementById('listBtn');
    if (mapSection && listSection && mapBtn && listBtn) {
        mapSection.style.display = '';
        listSection.style.display = 'none';
        mapBtn.style.background = '#222';
        mapBtn.style.color = '#fff';
        listBtn.style.background = '#fff';
        listBtn.style.color = '#222';
    }
}
function showList() {
    var mapSection = document.getElementById('mapSection');
    var listSection = document.getElementById('listSection');
    var mapBtn = document.getElementById('mapBtn');
    var listBtn = document.getElementById('listBtn');
    if (mapSection && listSection && mapBtn && listBtn) {
        mapSection.style.display = 'none';
        listSection.style.display = '';
        listBtn.style.background = '#222';
        listBtn.style.color = '#fff';
        mapBtn.style.background = '#fff';
        mapBtn.style.color = '#222';
    }
}
// Reserve page cost calculation
function reserveCostInit() {
    var radios = document.querySelectorAll('input[name="slotType"]');
    var durationSelect = document.getElementById('duration');
    var baseRates = { regular: 5, vip: 12, admin: 0 };
    function updateCost() {
        var type = document.querySelector('input[name="slotType"]:checked');
        var duration = parseInt(durationSelect && durationSelect.value) || 0;
        if (type && document.getElementById('baseRate')) {
            document.getElementById('baseRate').textContent = `$${baseRates[type.value].toFixed(2)}/hour`;
        }
        if (document.getElementById('durationText')) {
            document.getElementById('durationText').textContent = duration ? `${duration} hours` : '-- hours';
        }
        if (document.getElementById('totalCost')) {
            document.getElementById('totalCost').textContent = `$${(baseRates[type.value] * duration).toFixed(2)}`;
        }
    }
    if (radios.length && durationSelect) {
        radios.forEach(function(radio) {
            radio.addEventListener('change', updateCost);
        });
        durationSelect.addEventListener('change', updateCost);
        updateCost();
    }
}
document.addEventListener('DOMContentLoaded', function() {
    // Initialize reserve cost calculation if on reserve.php
    if (document.querySelector('.reserve-form')) {
        reserveCostInit();
    }
});
// Signin page show password toggle
function togglePassword() {
    var passwordInput = document.getElementById('password');
    var showCheckbox = document.getElementById('show-password');
    if (passwordInput && showCheckbox) {
        passwordInput.type = showCheckbox.checked ? 'text' : 'password';
    }
}
