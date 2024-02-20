<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *, *::before, *::after{
  -moz-box-sizing: border-box;
       box-sizing: border-box;

  -webkit-transition: all 0.3s ease-in-out;
          transition: all 0.3s ease-in-out;
}
@import url('https://fonts.googleapis.com/css?family=Manrope:700|Manrope:400');

:root {
  --text: hsl(0, 0%, 99%);
  --textDim: hsl(0, 0%, 60%);
  --background: hsl(0, 0%, 7%);
  --primary: hsl(155, 100%, 65%);
  --primaryBg: hsla(155, 100%, 65%, 1%);
  --primaryHi: hsla(155, 100%, 75%, 25%);
  --primaryFg: hsl(155, 100%, 85%);
  --secondary: hsl(156, 51%, 14%);
  --secondaryFg: hsl(156, 51%, 75%);
  --secondaryBg: hsla(156, 51%, 14%, 5%);
  --secondaryHi: hsla(156, 51%, 30%, 50%);
  --accent: hsl(155, 100%, 94%);
  --accentBg: hsla(155, 100%, 94%, 1%);
  --accentHi: hsla(155, 100%, 100%, 25%);
}

.bodyy {
  font-family: 'Manrope';
  font-weight: 400;
  background-color: var(--background);
  color: var(--text);
  padding: 0 10%;
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 100vh;
  overflow: hidden;
}

nav {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 2rem;
  color: var(--textDim);
  width: 100%;
  box-sizing: border-box;
  z-index: 9999;
}

.menu:hover {
  color: var(--text);
  cursor: pointer;
}

.sitename {
  font-weight: bold;
}

.grid {
  position: absolute;
  height: 100%;
  weight: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  align-self: center;
  z-index: -1;
}

.grid-svg {
  height: 80%;
  width: 80%;
  position: relative;
  z-index: 1;
}

.blur {
  height: 12rem;
  width: 12rem;
  background-color: var(--primary);
  filter: blur(100px);
  border-radius: 100px;
  z-index: 0;
  position: absolute;
}

.title {
  font-size: 10rem;
  font-weight: 700;
  letter-spacing: -0.8rem;
  display: flex;
  flex-direction: column;
  position: absolute;
  justify-content: center;
  align-self: center;
  height: 100%;
  z-index: 1000;
}

.title > p {
  margin: 0;
  line-height: 10rem;
  width: auto;
}

.title > p:nth-child(1){
  align-self: flex-start;
}

.title > p:nth-child(2){
  color: var(--primary);
  align-self: flex-end;
}

.title > p:nth-child(3){
  align-self: flex-end;
}

.material-icons {
  display: none;
  fill: var(--text);
}



.button {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: absolute;
  text-decoration: none;
  color: inherit;
  cursor: pointer;
  height: 50px;
  width: 160px;
  z-index: 9999;
}

button {
  height: 50px;
  width: 160px;
  clip-path: path("M 0 25 C 0 -5, -5 0, 80 0 S 160 -5, 160 25, 165 50 80 50, 0 55, 0 25");
  border: none;
  border-radius: 13px;
  background-color: var(--primaryBg);
  box-shadow: 0px -3px 15px 0px var(--primaryHi) inset;
  color: var(--primaryFg);
  font-family: "Manrope";
  font-size: 1rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: absolute;
  transform: translateY(0px);
  transition: all 0.2s ease;
}

span {
  width: 100px;
  height: 60px;
  background-color: var(--primaryHi);
  border-radius: 100%;
  filter: blur(20px);
  position: absolute;
  bottom: -50%;
  transition: all 0.2s ease;
}

.button:hover > span {
  opacity: 60%;
}

.button:hover > button {
  transform: translateY(5px);
}

.button.first {
  top: 12%;
  right: 20%;
}

.button.sec {
  bottom: 13%;
  right: 11%;
}

.button.sec > button {
  background-color: var(--accentBg);
  box-shadow: 0px -3px 15px 0px var(--accentHi) inset;
  color: var(--accentFg);
}

.button.sec > span {
  background-color: var(--accentHi);
}

.button.third {
  bottom: 25%;
  left: 15%;
}

.button.third > button {
  background-color: var(--secondaryBg);
  box-shadow: 0px -3px 15px 0px var(--secondary) inset;
  color: var(--secondaryFg);
}

.button.third > span {
  background-color: var(--secondaryHi);
}


.top-right {
  position: absolute;
  top: 0;
  right: 0;
  z-index: -1;
  opacity: 50%;
}

.bottom-left {
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: -1;
  opacity: 50%;
}




@media screen and (max-width: 1000px) {
  .title {
    font-size: 4rem;
    line-height:
  }

  .title > p {
    line-height: 5rem;
    letter-spacing: -0.3rem;
  }

  nav > :not(.sitename, .material-icons) {
    display: none;
  }

  nav {
    justify-content: space-between;
  }

  .material-icons {
    display: flex;
    align-items: center;
  }

}

html, body{
  margin: 0px;
  padding: 0px;
  font-family: 'Lato',sans-serif;
  font-size: 18px;
  font-weight: 300;
  height: 100%;
  color: #fff;
}

.container{
  width: 1024px;
  max-width: 100%;
  margin: auto;
  display: block;
  text-align: center;
}

.hero{
  width: 100%;
  height: 40%;
  background: #3498db;
  display: table;
}

h1{
  color: #2c3e50;
  text-align: center;
  margin: 0;
  padding: 0;
  display: table-cell;
  vertical-align: middle;
  text-align: center;
  color: #fff;
  font-weight: 300;
}

figure{
  width: 400px;
  height: 300px;
  overflow: hidden;
  position: relative;
  display: inline-block;
  vertical-align: top;
  border: 5px solid #fff;
  box-shadow: 0 0 5px #ddd;
  margin: 1em;
}

figcaption{
  position: absolute;
  left: 0; right: 0;
  top: 0; bottom: 0;
  text-align: center;
  font-weight: bold;
  width: 100%;
  height: 100%;
  display: table;
}

figcaption div{
  display: table-cell;
  vertical-align: middle;
  position: relative;
  top: 20px;
  opacity: 0;
  color: #2c3e50;
  text-transform: uppercase;
}

figcaption div:after{
  position: absolute;
  content: "";
  left: 0; right: 0;
  bottom: 40%;
  text-align: center;
  margin: auto;
  width: 0%;
  height: 2px;
  background: #2c3e50;
}

figure img{
  -webkit-transition: all 0.5s linear;
          transition: all 0.5s linear;
  -webkit-transform: scale3d(1, 1, 1);
          transform: scale3d(1, 1, 1);
}

figure:hover figcaption{
 background: rgba(255,255,255,0.3);
}

figcaption:hover div{
  opacity: 1;
  top: 0;
}

figcaption:hover div:after{
  width: 50%;
}

figure:hover img{
  -webkit-transform: scale3d(1.2, 1.2, 1);
          transform: scale3d(1.2, 1.2, 1);
}



/*font-face*/
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(http://themes.googleusercontent.com/static/fonts/lato/v6/boeCNmOCCh-EWFLSfVffDg.woff) format('woff');
}

@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(http://themes.googleusercontent.com/static/fonts/lato/v6/KT3KS9Aol4WfR6Vas8kNcg.woff) format('woff');
}
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(http://themes.googleusercontent.com/static/fonts/lato/v6/9k-RPmcnxYEPm8CNFsH2gg.woff) format('woff');
}

@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(http://themes.googleusercontent.com/static/fonts/lato/v6/wkfQbvfT_02e2IWO3yYueQ.woff) format('woff');
}
.users {
  table-layout: fixed;
  width: 100%;
  white-space: nowrap;
}
/* Column widths are based on these cells */
.row-ID {
  width: 10%;
}
.row-name {
  width: 40%;
}
.row-job {
  width: 30%;
}
.row-email {
  width: 20%;
}
.users td {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.users th {
  background: darkblue;
  color: white;
}
.users td,
.users th {
  text-align: left;
  padding: 5px 10px;
}
.users tr:nth-child(even) {
  background: lightblue;
}

    </style>
</head>
<div class="bodyy" >
    <nav>
        <p class="sitename">CoolSite</p>
        <p class="menu">Services</p>
        <p class="menu">Pricing</p>
        <p class="menu">Features</p>
        <p class="menu">About us</p>
        <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 9H5c-.55 0-1 .45-1 1s.45 1 1 1h14c.55 0 1-.45 1-1s-.45-1-1-1zM5 15h14c.55 0 1-.45 1-1s-.45-1-1-1H5c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg>
      </nav>

      <div class="grid">
        <svg class="grid-svg" xmlns="http://www.w3.org/2000/svg" width="982" height="786" viewBox="0 0 982 786" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M490 401V537H348.5V401H490ZM490 785.5V676H348.5V785.5H347.5V676H206V785.5H205V676H63.5V785.5H62.5V676H0V675H62.5V538H0V537H62.5V401H0V400H62.5V258H0V257H62.5V116H0V115H62.5V0H63.5V115L205 115V0H206V115L347.5 115V0H348.5V115H490V0H491V115L627.5 115V0H628.5V115H765V0H766V115L902.5 115V0H903.5V115H982V116H903.5V257H982V258H903.5V400H982V401H903.5V537H982V538H903.5V675H982V676H903.5V785.5H902.5V676H766V785.5H765V676H628.5V785.5H627.5V676H491V785.5H490ZM902.5 675V538H766V675H902.5ZM902.5 537V401H766V537H902.5ZM902.5 400V258H766V400H902.5ZM902.5 257V116L766 116V257H902.5ZM627.5 675H491V538H627.5V675ZM765 675H628.5V538H765V675ZM348.5 675H490V538H348.5V675ZM347.5 538V675H206V538H347.5ZM205 538V675H63.5V538H205ZM765 537V401H628.5V537H765ZM765 400V258H628.5V400H765ZM765 257V116H628.5V257H765ZM347.5 401V537H206V401H347.5ZM205 401V537H63.5V401H205ZM627.5 401V537H491V401H627.5ZM627.5 116L491 116V257H627.5V116ZM627.5 258H491V400H627.5V258ZM63.5 257V116L205 116V257H63.5ZM63.5 400V258H205V400H63.5ZM206 116V257H347.5V116L206 116ZM348.5 116V257H490V116H348.5ZM206 400V258H347.5V400H206ZM348.5 258V400H490V258H348.5Z" fill="url(#paint0_radial_1_8)" />
          <defs>
            <radialGradient id="paint0_radial_1_8" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(491 392.75) rotate(90) scale(513.25 679.989)">
              <stop stop-color="white" stop-opacity="0.2" />
              <stop offset="1" stop-color="#000" stop-opacity="0" />
            </radialGradient>
          </defs>
        </svg>
        <div class="blur"></div>
      </div>

      <div class="title">
        <p>Powerful</p>
        <p>UI Design</p>
        <p>Tool</p>
      </div>

      <a href="https://dribbble.com/shots/23181733-Blurry-Glassmorphic-Modern-Landing-page" target="_blank" class="button first"><button>View Source</button><span></span></a>

      <a href="https://youtu.be/1pW_sk-2y40" target="_blank" class="button sec"><button>Watch Video</button><span></span></a>

      <a href="https://x.com/juxtopposed" target="_blank" class="button third"><button>Connect</button><span></span></a>

      <svg class="top-right" width="219" height="147" viewBox="0 0 219 147" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect opacity="0.18" x="10.4252" y="75.8326" width="7.50168" height="7.50168" transform="rotate(110.283 10.4252 75.8326)" fill="#686868" stroke="white" stroke-width="1.22683" />
        <rect opacity="0.18" x="180.869" y="138.825" width="7.50168" height="7.50168" transform="rotate(110.283 180.869 138.825)" fill="#686868" stroke="white" stroke-width="1.22683" />
        <rect x="69.4713" y="-91.84" width="180.485" height="180.485" transform="rotate(20.2832 69.4713 -91.84)" stroke="white" stroke-opacity="0.1" stroke-width="1.22683" />
      </svg>

      <svg class="bottom-left" width="232" height="191" viewBox="0 0 232 191" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="50.5685" cy="172.432" r="112.068" stroke="white" stroke-opacity="0.09" />
        <g opacity="0.1">
          <path d="M26.4932 5.20547L228.856 172.432" stroke="#D9D9D9" />
          <rect x="22.4384" y="0.5" width="6.15753" height="6.15753" fill="#686868" stroke="white" />
          <rect x="224.801" y="169.027" width="6.15753" height="6.15753" fill="#686868" stroke="white" />
          <circle cx="121.819" cy="83.613" r="1.7774" fill="#323232" stroke="white" />
        </g>
      </svg>

    </div>

 <div class="hero">
  <h1>Image Scale <strong>on Hover</strong> </h1>
  </div>

<div class="container">

  <figure>
    <img src="https://d13yacurqjgara.cloudfront.net/users/220419/screenshots/1714518/shot-codigo.jpg" alt="Thumb" width="400" height="300" />
    <figcaption><div>Thumbnail Caption</div></figcation>
  </figure>

  <figure>
    <img src="https://d13yacurqjgara.cloudfront.net/users/220419/screenshots/1678299/shot-7.jpg" alt="Thumb" width="400" height="300" />
    <figcaption><div>Thumbnail Caption</div></figcation>
  </figure>


  <figure>
    <img src="https://d13yacurqjgara.cloudfront.net/users/220419/screenshots/1664639/shot.png" alt="Thumb" width="400" height="300" />
    <figcaption><div>Thumbnail Caption</div></figcation>
  </figure>


  <figure>
    <img src="https://d13yacurqjgara.cloudfront.net/users/220419/screenshots/1644214/debut-shot.jpg" alt="Thumb" width="400" height="300" />
    <figcaption><div>Thumbnail Caption</div></figcation>
  </figure>


</div>
<table class="users">
    <thead>
      <tr>
        <th class="row-1 row-ID">ID</th>
        <th class="row-2 row-name">Name</th>
        <th class="row-3 row-job">Job</th>
        <th class="row-4 row-email">Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>0001</td>
        <td>Johnny Five</td>
        <td>Robotin'</td>
        <td>need@input.com</td>
      </tr>
      <tr>
        <td>0002</td>
        <td>Super Superlonglastnamesmith</td>
        <td>Doin' stuff</td>
        <td>doing@stuff.com</td>
      </tr>
      <tr>
        <td>0003</td>
        <td>Roger Wilco</td>
        <td>Truckdrivin'</td>
        <td>roger@wilco.com</td>
      </tr>
      <tr>
        <td>0004</td>
        <td>Mad Hatter</td>
        <td>Hat Makin'</td>
        <td>loves@mercury.com</td>
      </tr>
    </tbody>
  </table>


<nav>
    <ul>
      <li><a class="brick dashboard" href="#"><span class='icon ion-home'></span>Dashboard</a></li>
      <li><a class="brick pages" href="#"><span class='icon ion-document'></span>Pages</a></li>
      <li><a class="brick navigation" href="#"><span class='icon ion-android-share-alt'></span>Navigation</a></li>
      <li><a class="brick users" href="#"><span class='icon ion-person'></span>Users</a></li>
      <li><a class="brick settings" href="#"><span class='icon ion-gear-a'></span>Website Settings</a></li>
    </ul>
  </nav>

  <div id="content" class="pages">

    <header>
      <div class="brick identify">
        <span class="icon ion-document"></span>
      </div>

      <div class="brick title">
        <h2>Home Page</h2>
      </div>

      <div class="brick close">
        <span class="text">Close</span>
        <span class="icon ion-close"></span>
      </div>


      <div class="brick save">
        <span class="text">Save</span>
        <span class="icon ion-checkmark"></span>
      </div>

    </header>



    <div class="brick closed">
      <hgroup>
        <h2>Main Headline</h2>
        <a href="#" class="icon ion-close js-close close"></a>
        <form>
          <input type="text" />
        </form>
      </hgroup>
    </div>

    <div class="brick closed">
      <hgroup>
        <h2>About Me</h2>
        <a href="#" class="icon ion-close js-close close"></a>
        <form>
          <textarea></textarea>
        </form>
      </hgroup>
    </div>

    <div class="brick closed">
      <hgroup>
        <h2>Gallery</h2>
        <a href="#" class="icon ion-close js-close close"></a>
        <form>
          <textarea></textarea>
        </form>
      </hgroup>
    </div>

    <div class="brick closed">
      <hgroup>
        <h2>Page Settings</h2>
        <a href="#" class="icon ion-close js-close close"></a>
        <form>
          <textarea></textarea>
        </form>
      </hgroup>
    </div>


  </div>

  <footer>

  </footer>



</body>
</html>
