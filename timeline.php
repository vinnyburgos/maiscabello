
<h2>Quer saber como identificar se o seu caso já é calvície?</h2>
<p class="subTitle">Existem até sete níveis de calvície que vão desde a perda mínima de cabelo até ao grau mais grave.
  <br>Conheça as fases e veja se você se encaixa em alguma delas:
</p>

<div class="numbers">
  <p class="number">1</p>
  <p class="number">2</p>
  <p class="number">3</p>
  <p class="number">4</p>
  <p class="number">5</p>
  <p class="number">6</p>
  <p class="number sete">7</p>
</div>

<input id="numerodemqs_input" type="range" min="1" max="7" value="1">

<h5 id="resultado1"></h5>
<div class="personaWrap" id="1" name="div">
  <img class="personas" src="images/ilustra-calvicie-1.png" alt="">
</div>
<div class="personaWrap perHidden" id="2" name="div">
  <img class="personas" src="images/ilustra-calvicie-2.png" alt="">
</div>
<div class="personaWrap perHidden" id="3" name="div">
  <img class="personas" src="images/ilustra-calvicie-3.png" alt="">
</div>
<div class="personaWrap perHidden" id="4" name="div">
  <img class="personas" src="images/ilustra-calvicie-4.png" alt="">
</div>
<div class="personaWrap perHidden" id="5" name="div">
  <img class="personas" src="images/ilustra-calvicie-5.png" alt="">
</div>
<div class="personaWrap perHidden" id="6" name="div">
  <img class="personas" src="images/ilustra-calvicie-6.png" alt="">
</div>
<div class="personaWrap perHidden" id="7" name="div">
  <img class="personas" src="images/ilustra-calvicie-7.png" alt="">
</div>


<style>
  .personaWrap {
    position: relative;
    width: 80%;

    margin: 30px auto;
    transition: all .3s;
  }
    .personaWrap img {
      width: 100%;
      margin-left: 40px;
      transition: all .3s;
      opacity: 1;
    }
  #numerodemqs_input {
    width: 100%;
  }
  .perHidden {
    display: none;
    transition: all .3s;
  }
  #resultado1 {
    display: none;
    transition: all .3s;
  }
</style>

<script>
var inputvar = document.getElementById("numerodemqs_input"),
number_mqs = document.getElementById("resultado1");

inputvar.addEventListener("input", function() {
  number_mqs.innerHTML = inputvar.value;
  var elementos = document.getElementsByName("div");
  for (i = 0; i < elementos.length; i++) {
    value_element = elementos[i].getAttribute('id');
    if (value_element == inputvar.value) {
      displayBlock(elementos[i]);
    } else {
      displayNone(elementos[i]);
    }
  }
}, false);


function displayNone(element) {
  element.style.display = "none";
}
function displayBlock(element) {
  element.style.display = "block";
}
</script>
</body>
</html>