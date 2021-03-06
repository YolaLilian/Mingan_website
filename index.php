<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reiki Mingan</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <meta name="viewport" content="width=device-width initial-scale=1, minimum-scale=1">
</head>

<body>
  <header>
  <nav>
    <a href="#hero" id="title">Mingan</a>
    <a href="#" class="icon"><i class="fas fa-ellipsis-h"></i></a>
    <ul class="menu hidden">
        <li><a href="#hero" id="titleNav">Mingan</a></li>
        <li class="dropdown"><a href="#">Diensten <i id="arrow" class="fas fa-angle-down"></i></a>
        <ul class = "serviceDropdown hidden">
          <li><a href="#reiki">Reiki</a></li>
          <li><a href="#chakra">Chakratherapie</a></li>
          <li><a href="#cleansing">Huis Reiniging</a></li>
          <li><a href="#massage">Massage</a></li>
          <li><a href="#animal">Dierencommunicatie</a></li>
        </ul>
      </li>
      <li><a href="#pricing">Prijslijst</a></li>
      <li><a href="#duobehandeling">Duobehandelingen</a></li>
      <li><a href="#Anders">Schiedam Andersbeleefd</a></li>
      <li><a href="#appointment">Afspraak maken</a></li>
      <li><a href="#who">Wie ben ik</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
  </header>
<section id="hero">
    <h1>Welkom bij Reiki Mingan</h1>
    <?php  // create curl resource
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, "http://quotes.rest/qod?category=life");

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $output = curl_exec($ch);

    // close curl resource to free up system resources
    curl_close($ch);

    $obj = json_decode($output); ?>
    <p id="quote">"<?= $obj->contents->quotes[0]->quote?>"</p>
</section>
<section id="services">
  <section id="reiki">
    <div class = "treatment">
    <h3>Reiki</h3>
    <p>Reiki is een eenvoudige en natuurlijke geneeswijze, die ons in staat stelt meer levenskracht en energie op te nemen.
      De Reiki-gever fungeert als kanaal voor het geleiden van de universele levenskracht.
      Tijdens een behandeling legt de Reiki-gever de handen op iemand anders, met als doel de universele energie te laten stromen.
      Reiki kan een hulp zijn voor geestelijke en/of lichamelijke problemen.
      <br><br>Reiki:</p>
      <ul>
        <li>ontspant</li>
        <li>vermindert stress</li>
        <li>brengt lichaam en geest in balans</li>
        <li>verlicht pijn</li>
        <li>heft blokkades op</li>
        <li>versterkt het immuumsysteem</li>
      </ul>
    </div>
  </section>
  <section id="chakra">
    <div class = "treatment">
    <h3>Chakratherapie</h3>
    <p>Chakratherapie is intensiever dan een Reiki behandeling.
      Vanuit holistische gedachten is de mens lichamelijk en emotioneel met zijn sociale omgeving verbonden.
      Chakra's zijn in voortdurende wisselwerking met organen en orgaansystemen.
      Met een chakrabehandeling brengen we de chakra's weer in balans.
      Dat doen wij door de energie eerst af te voeren en daarna weer op te voeren.</p>
    </div>
  </section>  
  <section id="cleansing">
    <div class = "treatment">
    <h3>Huis reiningen</h3>
    <p>Voelt u zich al geruime tijd niet lekker in uw eigen huis?
      Heeft u medebewoners die overgevoelig zijn?
      Heeft u de laatste tijd niet in een prettige periode gezeten?
      Iedereen heeft wel eens dergelijke ervaringen gehad.
      Met een huis reiniging kan ik weer positieve energie neerzetten en alle energie die niet in uw huis thuishoort verwijderen.
      Woont u in een straal van 5 kilometer? Dan kan ik u mogelijk helpen.
      Trek er ongeveer 1 dagdeel voor uit (altijd in de ochtend of middag).
      Ik moet altijd eerst even contact met u opnemen, voordat een afspraak gemaakt kan worden.</p>
    </div>
  </section>
  <section id="massage">
    <div class = "treatment">
    <h3>Massages</h3>
    <p>Wilt u even een uurtje helemaal voor uzelf?
      Last van stijve spieren? Stijve nek? Benen die pijn doen?
      Ik bied ontspanningsmassages aan, een weldaad voor uw lichaam.
      Even relaxen, alles loslaten, muziekje aan, tijd voor uzelf.
      U kunt kiezen uit een rugmassage en een totale ontspanningsmassage (inclusief uw benen).</p>
    </div>
  </section>

  <section id="animal">
    <div class = "treatment">
    <h3>Dierencommunicatie</h3>
    <p>Ook ben ik diercommunicator. Heeft u een vraag over uw huisdier?
      Altijd al iets willen vragen?
      Met behulp van een foto kan ik contact leggen via het onderbewuste van uw huisdier.
      U hoeft het dier niet in levende lijve te laten zien, een foto is genoeg.
      Ik heb al vele dieren en hun baasjes kunnen helpen.</p>
      </div>
  </section>
</section>
<section class="whiteSection" id="pricing">
    <h3>Prijslijst</h3>
    <p>Reikipraktijk Mingan biedt de volgende behandelingen aan:</p>
    <table>
      <thead>
      <tr>
        <th>Behandeling</th>
        <th>Tijdsduur</th>
        <th>Kosten</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Reiki</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td>Reiki behandeling</td>
        <td>60 minuten</td>
        <td>&euro;25,00</td>
      </tr>
      <tr>
        <td>Reiki en rugmassage</td>
        <td>90 minuten</td>
        <td>&euro;45,00</td>
      </tr>
      <tr>
        <td>Reiki en ontspanningsmassage</td>
        <td>120 minuten</td>
        <td>&euro;65,00</td>
      </tr>
      <tr>
        <th>Chakra</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td>Chakra behandeling</td>
        <td>90 minuten</td>
        <td>&euro;37,50</td>
      </tr>
      <tr>
        <td>Chakra behandeling en massage</td>
        <td>120 minuten</td>
        <td>&euro;52,50</td>
      </tr>
      <tr>
        <th>Massage</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td>Massage Rug</td>
        <td>30 minuten</td>
        <td>&euro;25,00</td>
      </tr>
      <tr>
        <td>Massage Rug en Benen</td>
        <td>45 minuten</td>
        <td>&euro;37,50</td>
      </tr>
      <tr>
        <td>Ontspanningsmassage</td>
        <td>60 minuten</td>
        <td>&euro;45,00</td>
      </tr>
      <tr>
        <th>Reinigen</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td>Energetisch huis reinigen</td>
        <td>op aanvraag</td>
      </tr>
      <tr>
        <th>Cursus Reiki</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td>Cursus Reiki I</td>
        <td>op aanvraag</td>
      </tr>
      <tr>
        <td>Cursus Reiki II</td>
        <td>op aanvraag</td>
      </tr>
          </tbody>
    </table>
</section>
<section class="whiteSection" id="duobehandeling">
    <h3>Duobehandelingen</h3>
    <p>De volgende behandelingen en prijzen zijn voor <b>twee personen:</b></p>
  <table>
    <thead>
    <tr>
    <th>Behandeling</th>
    <th>Tijdsduur</th>
    <th>Kosten</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>Ontspanningsmassage</td>
      <td>60 minuten</td>
      <td>&euro;95,00</td>
    </tr>
    <tr>
      <td>Reiki en rugmassage</td>
      <td>90 minuten</td>
      <td>&euro;95,00</td>
    </tr>
    <tr>
      <td>Reiki en ontspanningsmassage</td>
      <td>120 minuten</td>
      <td>&euro;135,00</td>
    </tr>
    <tr>
      <td>Chakrabehandeling en massage</td>
      <td>120 minuten</td>
      <td>&euro;120,00 </td>
    </tr>
    </tbody>
  </table>
  </section>
<section class="whiteSection" id="Anders">
    <h3>Schiedam Andersbeleefd</h3>
    <p>Hiernaast biedt Reiki Mingan in samenwerking met Kamlang-Schiedam en Restaurant Parkhoeve een luxe verwendag voor 2 personen aan.
      Deze verwendag bestaat uit een behandeling en een arrangement om heerlijk na te genieten.
      De verwendagen zijn alleen iedere 2e en 3e zaterdag van de maand beschikbaar!
      Je kunt kiezen uit de volgende behandelingen (let op: <b>voor 2 personen</b>):</p>
    <table>
      <thead>
      <tr>
        <th>Behandeling</th>
        <th>Tijdsduur</th>
        <th>Kosten</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Reikibehandeling en rugmassage</td>
        <td>90 minuten</td>
        <td>&euro;105,00</td>
      </tr>
      <tr>
        <td>Reikibehandeling en ontspanningsmassage</td>
        <td>120 minuten</td>
        <td>&euro;135,00</td>
      </tr>
      <tr>
        <td>Chakrabehandeling en rugmassage</td>
        <td>120 minuten</td>
        <td>&euro;125,00</td>
      </tr>
    </tbody>
    </table>
    <p>Bij dit arrangement kan je ook kiezen uit:</p>
    <ul id="lunch">
      <li>Luxe Lunch</li>
      <li>High tea</li>
      <li>High wine</li>
      <li>High beer</li>
    </ul>
</section>
<section id="appointment">
    <h3>Afspraak maken</h3>
    <a class = "linkTo" href="appointment.php">Maak een afspraak!</a>
</section>
<section class="whiteSection" id="who">
    <h3>Wie ben ik?</h3>
    <img class="karla-img" src="https://scontent-ams3-1.xx.fbcdn.net/v/t1.0-9/391030_110168235767313_615945525_n.jpg?_nc_cat=109&_nc_ht=scontent-ams3-1.xx&oh=901806bbc1e3c129229bcd8c40454996&oe=5D0D2540">
    <p> Ik ben Karla Graper, Reiki master uit Schiedam.
      Reeds lange tijd beoefen ik de Reiki methode uit het usui-systeem.
      Ik heb al vele mensen kunnen helpen met allerlei soorten klachten.
      Ook de massage kan een ontspannende werking hebben.
      Deze behandelingen kunnen afzonderlijk van elkaar gegeven worden, maar een reiki of chakrabehandeling gecombineerd met een massage heeft een dubbele werking.
      U zult versteld staan van het resultaat.
      Over mijn werk als dierencommunicator kunt u mij altijd telefonisch benaderen.</p>
</section>
<section id="contact">
  <h3>Contactgegevens</h3>
    <p>Karla Graper</p>
    <p>Faassenplein 79, 3123NG Schiedam</p>
    <p>Telefoonnummer: 06-47179161</p>
    <p>Email: karlagraper@gmail.com</p>
</section>
  <a class="linkTo" href="login.php">Log in Admin</a>
  <footer>
      <p>Deze website is gecreëerd door Lilian Kempees. Quotes by <span style="z-index:50;">
      <img src="https://theysaidso.com/branding/theysaidso.png" height="20" width="20" alt="theysaidso.com"/>
      <a href="https://theysaidso.com" title="Powered by quotes from theysaidso.com" style="color: #9fcc25; margin-left: 4px; vertical-align: middle;">theysaidso.com</a></span></p></footer>
<script src="js/master.js" charset="utf-8"></script>

</body>

</html>