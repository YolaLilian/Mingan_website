// declaring variables
let finalResult;
let value;

// on-click, calculate score
document.querySelector('#result').addEventListener("click", function(){
    finalResult = 0;
    for(let i = 1; i <= 4; i++){
        value = document.querySelector(`input[name="q${i}"]:checked`).value;
        value = Number(value);
        finalResult += value;

    }
    console.log(finalResult);
// show results based on score
    if (finalResult >= 20 && finalResult <= 24){
        document.body.innerHTML = "<h2>Chakra</h2><p class='results'><span class='resultHeader'>U heeft mogelijk baat bij een Chakrabehandeling!" +
            "</span><br><br>Ik bied een aantal chakrabehandelingen aan: een normale chakrabehandeling van 90 minuten" +
            "en een chakrabehandeling inclusief massage van 2 uur. </p>"
    } else if (finalResult >=14 && finalResult <=19) {
        document.body.innerHTML = "<h2>Reiki</h2><p class='results'><span class='resultHeader'>U heeft mogelijk baat bij een Reikibehandeling!" +
            "</span><br><br>Ik bied een aantal reikibehandelingen aan: een normale reikibehandeling van 60 minuten," +
            "een reiki behandeling gecombineerd met een rugmassage van 90 minuten en een reikibehandeling met " +
            "een ontspanningsmassage, welke 2 uur duurt.</p>"
    } else if (finalResult >=8 && finalResult <= 13) {
        document.body.innerHTML = "<h2>Massage</h2><p class='results'><span class='resultHeader'>U heeft mogelijk baat bij een van mijn massages!" +
            "</span><br><br>Ik bied drie soorten massagebehandelingen aan: een rugmassage van 30 minuten, een massage " +
            "van de rug en benen, welke 45 minuten duurt en een ontspanningsmassage die een uur duurt.</p>"
    }

});
