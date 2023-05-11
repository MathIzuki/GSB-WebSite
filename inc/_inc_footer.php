<!-- Footer repris d'ici : https://codepen.io/uchardon/pen/jeaGpW -->

<footer>
  <svg viewBox="0 0 120 28">
    <defs>
      <filter id="goo">
        <feGaussianBlur in="SourceGraphic" stdDeviation="1" result="blur" />
        <feColorMatrix in="blur" mode="matrix" values="
           1 0 0 0 0  
           0 1 0 0 0  
           0 0 1 0 0  
           0 0 0 13 -9" result="goo" />
        <xfeBlend in="SourceGraphic" in2="goo" />
      </filter>
      <path id="wave" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
    </defs>

    <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2"></use>
    <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0"></use>


    <g class="gooeff" filter="url(#goo)">
      <circle class="drop drop1" cx="20" cy="2" r="8.8" />
      <circle class="drop drop2" cx="25" cy="2.5" r="7.5" />
      <circle class="drop drop3" cx="16" cy="2.8" r="9.2" />
      <circle class="drop drop4" cx="18" cy="2" r="8.8" />
      <circle class="drop drop5" cx="22" cy="2.5" r="7.5" />
      <circle class="drop drop6" cx="26" cy="2.8" r="9.2" />
      <circle class="drop drop1" cx="5" cy="4.4" r="8.8" />
      <circle class="drop drop2" cx="5" cy="4.1" r="7.5" />
      <circle class="drop drop3" cx="8" cy="3.8" r="9.2" />
      <circle class="drop drop4" cx="3" cy="4.4" r="8.8" />
      <circle class="drop drop5" cx="7" cy="4.1" r="7.5" />
      <circle class="drop drop6" cx="10" cy="4.3" r="9.2" />
      <circle class="drop drop1" cx="1.2" cy="5.4" r="8.8" />
      <circle class="drop drop2" cx="5.2" cy="5.1" r="7.5" />
      <circle class="drop drop3" cx="10.2" cy="5.3" r="9.2" />
      <circle class="drop drop4" cx="3.2" cy="5.4" r="8.8" />
      <circle class="drop drop5" cx="14.2" cy="5.1" r="7.5" />
      <circle class="drop drop6" cx="17.2" cy="4.8" r="9.2" />
      <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />

  </svg>

  <div>GSB - by &copy;<a href="www.gsb.fr">Amin, Mathis, Assia</a></div>
</footer>
<style>
  @import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");

  a {
    color: #fff;
    text-decoration: none;
  }

  footer {
    z-index: -900;
    width: 100vw;
    position: fixed;
    bottom: -150px;
  }

  footer div {
    background-color: var(--col-deepblue);
    margin: -5px 0px 0px 0px;
    padding: 0px;
    color: #fff;
    text-align: center;
  }

  svg {
    width: 100%;
    overflow: visible;
  }

  .wave {
    animation: wave 3s linear;
    animation-iteration-count: infinite;
    fill: #4478e3;
  }

  .drop {
    fill: #4273b2;
    animation: drop 3.2s linear infinite normal;
    stroke: var(--col-deepblue);
    stroke-width: 0.5;
    transform: translateY(25px);
    transform-box: fill-box;
    transform-origin: 50% 100%;
  }

  .drop2 {
    animation-delay: 3s;
    animation-duration: 3s;
  }

  .drop3 {
    animation-delay: -2s;
    animation-duration: 3.4s;
  }

  .drop4 {
    animation-delay: 1.7s;
  }

  .drop5 {
    animation-delay: 2.7s;
    animation-duration: 3.1s;
  }

  .drop6 {
    animation-delay: -2.1s;
    animation-duration: 3.2s;
  }

  .gooeff {
    filter: url(#goo);
  }

  #wave2 {
    animation-duration: 5s;
    animation-direction: reverse;
    opacity: .6
  }

  #wave3 {
    animation-duration: 7s;
    opacity: .3;
  }

  @keyframes drop {
    0% {
      transform: translateY(25px);
    }

    30% {
      transform: translateY(-10px) scale(.1);
    }

    30.001% {
      transform: translateY(25px) scale(1);
    }

    70% {
      transform: translateY(25px);
    }

    100% {
      transform: translateY(-10px) scale(.1);
    }
  }

  @keyframes wave {
    to {
      transform: translateX(-100%);
    }
  }
</style>