@extends('layouts.app')
@section('title', 'MesterMC.hu - Magyarország legnagyobb Minecraft szerver csoportja!')

<div class="container-fluid hero">
  <div class="container text-start">
    <div class="row" style="height: 100vh; max-height: 800px;">
      <div class="col-lg-6 h-100 d-flex align-items-start justify-content-center flex-column">
        <h2 class="mt-5 pt-4">Helló újra!</h2>
        <p class="opacity-75">A csapat megújult, de a MesterMC a régi maradt! Töltsd le a megújult kliensünket, regisztrálj a megújult bányaközpontban és csatlakozz szervereinkre még ma! Fedezd fel a megújult, de régi hangulatú felületeket, új funkciókat és élményeket – minden adott, hogy azonnal belevágj a kalandba!</p>
        <div>
          <a href="#" class="btn btn-mc me-2 mb-2">
            <img src="{{ asset('assets/images/belepes.png') }}" alt="Bányaközpont" style="width: 190px;">
          </a>
          <a href="#download" class="btn btn-mc mb-2">
            <img src="{{ asset('assets/images/letoltes.png') }}" alt="Letöltés" style="width: 120px;">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="mouse">
    <div class="wheel"></div>
  </div>
</div>
<!--<div id="header-news" class="carousel slide carousel-fade news-header" data-bs-ride="carousel"><div class="carousel-indicators flex-wrap"><button type="button" data-bs-target="#header-news" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button><button type="button" data-bs-target="#header-news" data-bs-slide-to="1" class="" aria-label="Slide 2"></button><div class="w-100"></div><div class="scroll-indicator"><div class="mouse"><div class="wheel"></div></div></div></div><div class="carousel-inner"><div class="carousel-item active bg-cover-center"
            style="background-image: url('uploads/news/mestermc_cover_hamarosan.png');"><div class="carousel-caption  news-data"><h6>Legfrissebb híreink</h6><h4>Visszatér a MesterMC!</h4></div></div><div class="carousel-item bg-cover-center"
            style="background-image: url('uploads/news/discord_post.png');"><div class="carousel-caption  news-data"><h6>Legfrissebb híreink</h6><h4>Lépj be Discord szerverünkre!</h4></div></div></div></div>-->
<div class="header-gradient-separator-bg text-start pt-5">
  <div class="container">
    <div class="row d-flex align-items-center ">
      <div class="col-md-8 py-5 py-md-0">
        <img src="{{ asset('assets/images/kliens_letoltese.png') }}" alt="Visszatér a MesterMC!" class="mw-100 mb-3" id="download">
        <p>A szerverekre történő csatlakozáshoz szükséges, hogy letöltsétek a <b>MesterMC kliens</b>t. Az ehhez tartozó telepítőt az alábbi gombra kattintva érhetitek el — csak egy kattintás, és már indulhat is a játék! </p>
        <div class="message-box" style="max-width: 500px;">
          <p class="m-0 p-0">
            <img src="{{ asset('assets/images/message.png') }}" alt="Rendszerkövetelmények" style="width: 30px;"> Minimum rendszerkövetelmények:
          </p>
          <ul class="mb-0">
            <li>Windows 10/11 (ajánlott)</li>
            <li class="mb-0">Java 21 - ha nem rendelkezel még vele, akkor az Oracle hivatalos oldaláról <a href="https://www.oracle.com/java/technologies/downloads/#java21" target="_blank">itt</a> töltheted le. </li>
          </ul>
        </div>
        <div class="row mt-3">
          <div class="col">
            <a href="#" class="btn btn-mc">
              <img src="{{ asset('assets/images/letoltes.png') }}" alt="Letöltés" style="width: 120px;">
            </a>
          </div>
        </div>
      </div>
      <div class="col text-center">
        <img src="{{ asset('assets/images/creeper.png') }}" alt="Creeper" class="header-creeper py-5">
      </div>
    </div>
  </div>
</div>
</header>
<div class="container" id="gyik">
  <div class="row">
    <div class="col text-center d-flex align-items-center flex-column">
      <img src="{{ asset('assets/images/gyik.png') }}" alt="Gyakran Ismételt Kérdések" class="w-100" style="max-width: 700px;" id="gyik">
      <p class="opacity-50 w-75">Itt megtalálod a leggyakoribb kérdéseket és válaszokat a szerverrel kapcsolatban. Lenne még más kérdésed is? Kérdezed meg Discord szerverünkön!</p>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col"></div>
    <div class="col-md-8">
      <div class="accordion accordion-flush" id="gyikCards">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#gyik-1" aria-expanded="false" aria-controls="gyik-1"> Mi a discord szerver elérhetősége?
                <img src="{{ asset('assets/images/gyikarrow.png') }}" alt="Részletek">
            </button>
          </h2>
          <div id="gyik-1" class="accordion-collapse collapse" data-bs-parent="#gyikCards">
            <div class="accordion-body"> A discord szerverre itt csatlakozhattok: <a href="https://discord.gg/mestermc" target="_blank">Discord</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#gyik-2" aria-expanded="false" aria-controls="gyik-2"> Megmaradnak a fiókok és a cuccok?
                <img src="{{ asset('assets/images/gyikarrow.png') }}" alt="Részletek">
            </button>
          </h2>
          <div id="gyik-2" class="accordion-collapse collapse" data-bs-parent="#gyikCards">
            <div class="accordion-body">
              <b>Felhasználói fiókok:</b>
              <br> Minden olyan fiók ami június 19. 23:59-ig vissza lett igényelve megmarad! ✅ (A feltöltött skinek technikai okokból nem maradnak meg, azokat majd újra fel kell töltenetek) <br>
              <br>
              <b>Rangok és Bányászérme:</b>
              <br> Sajnos, nem tudunk rangot és bányászérmét biztosítani úgy, hogy nem nálunk lett vásárolva. ❌ Nem lenne fair az új játékosokkal szemben. Azok akinek volt már korábban rangja vásárláskor kedvezményt fognak kapni! - Ez a kedvezmény a vásárlás során automatikusan jóváírásra fog kerülni!
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#gyik-5" aria-expanded="false" aria-controls="gyik-5"> Miért nem működik a régi kliens? <img src="{{ asset('assets/images/gyikarrow.png') }}" alt="Részletek">
            </button>
          </h2>
          <div id="gyik-5" class="accordion-collapse collapse" data-bs-parent="#gyikCards">
            <div class="accordion-body"> A régi kliens már nem működik és nem is fog! Az új, hivatalos kliens <a href="#download">itt</a> tölthetitek le! Szervereink csak ezen az új kliensen keresztül lesznek elérhetőek! <br>
              <br>
              <b>⚠️ Olyan programokért amit nem a mestermc.hu weboldalról töltöttetek le a MesterMC csapata nem vállal felelősséget!</b>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#gyik-6" aria-expanded="false" aria-controls="gyik-6"> Milyen verzión futnak a szerverek? <img src="{{ asset('assets/images/gyikarrow.png') }}" alt="Részletek">
            </button>
          </h2>
          <div id="gyik-6" class="accordion-collapse collapse" data-bs-parent="#gyikCards">
            <div class="accordion-body"> A kliens és a szerverek 1.21.5 verzión futnak. PVP szerverek 1.8 pvp rendszerrel. A kliens optimalizálásának köszönhetően a játék a régebbi gépekkel is "jól" fut. (Persze nem maximum renderrel és látótávval.) </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#gyik-3" aria-expanded="false" aria-controls="gyik-3"> Lehet csatlakozni a csapatba? <img src="{{ asset('assets/images/gyikarrow.png') }}" alt="Részletek">
            </button>
          </h2>
          <div id="gyik-3" class="accordion-collapse collapse" data-bs-parent="#gyikCards">
            <div class="accordion-body"> A jelenleg nyitott pozíciókról részletesebb információkat az alábbi linkre kattintva érhettek el! <a href="https://mestermc.hu/tgf">https://mestermc.hu/tgf</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col"></div>
  </div>
  <div class="row mt-3 text-center pt-5 pb-5" id="bányaközpont">
    <div class="col pt-5 d-flex align-items-center flex-column">
      <img src="{{ asset('assets/images/banyakozpont.png') }}" alt="Bányaközpont" class="w-100" style="max-width: 700px;">
      <p class="w-lg-75 px-4 px-lg-0 opacity-75">Hozz létre egy új fiókot, vagy jelentkezz be meglévő felhasználóddal a <b>Bányaközpont</b> felületén, ahol számos izgalmas lehetőség vár rád! Itt könnyedén testre szabhatod a karaktered megjelenését, és értékes nyereményeket gyűjthetsz be. <b>Bányászérméért</b> akár különleges rangokat is vásárolhatsz, amelyekkel még több élmény és extra funkció válik elérhetővé a játék során. </p>
      <a href="#" class="btn btn-mc">
        <img src="{{ asset('assets/images/belepes.png') }}" alt="Bányaközpont belépés" style="width: 200px;">
      </a>
    </div>
  </div>
</div>
