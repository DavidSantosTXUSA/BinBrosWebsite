document.getElementById('signupButton').addEventListener('click', function() {
    window.location.href = 'signup.html';
});

function toggleGateCode() {
    var checkBox = document.getElementById("hasGateCode");
    var gateCode = document.getElementById("gateCode");
    if (checkBox.checked == true){
        gateCode.style.display = "block";
    } else {
        gateCode.style.display = "none";
    }
}
