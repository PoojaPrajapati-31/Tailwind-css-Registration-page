<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">AristocratSite</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900 text-lg">Home</a>
            <a class="mr-5 hover:text-gray-900 text-lg">About</a>
            <a class="mr-5 hover:text-gray-900 text-lg">Team</a>
            <a class="mr-5 hover:text-gray-900 text-lg">Contact</a>
          </nav>
          <button class="inline-flex items-center bg-green-500 border-0 text-white py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Login
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </header>

      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out
              <br class="hidden lg:inline-block">readymade gluten
            </h1>
            <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
            <div class="flex justify-center">
              <button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Hire Me</button>
              <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Download CV</button>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="img/undraw_designer_girl_re_h54c.svg">
          </div>
        </div>
      </section>


      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-20">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Pitchfork Kickstarter Taxidermy</h1>
              <div class="h-1 w-20 bg-green-500 rounded"></div>
            </div>
            <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100  h-full p-6 rounded-lg">
                <img class=" rounded w-2/3 object-cover object-center mb-6" src="img/p1.svg" alt="content">
                <h3 class="tracking-widest text-green-500 text-xl font-medium title-font">SUBTITLE</h3>
                <h2 class="text-xl text-gray-900 font-medium title-font mb-4">Chichen Itza</h2>
                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100  h-full p-6 rounded-lg">
                <img class=" rounded h-50 w-full object-cover object-center mb-6" src="img/a1.svg" alt="content">
                <h3 class="tracking-widest text-green-500 text-xl font-medium title-font">SUBTITLE</h3>
                <h2 class="text-xl text-gray-900 font-medium title-font mb-4">Colosseum Roma</h2>
                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100  h-full p-6 rounded-lg">
                <img class="h-50 rounded w-full object-cover object-center mb-6" src="img/a6.svg" alt="content">
                <h3 class="tracking-widest text-green-500 text-xl font-medium title-font">SUBTITLE</h3>
                <h2 class="text-xl text-gray-900 font-medium title-font mb-4">Great Pyramid of Giza</h2>
                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100  h-full p-6 rounded-lg">
                <img class="h-50 rounded w-full object-cover object-center mb-6" src="img/p2.svg" alt="content">
                <h3 class="tracking-widest text-green-500 text-xl font-medium title-font">SUBTITLE</h3>
                <h2 class="text-xl text-gray-900 font-medium title-font mb-4">San Francisco</h2>
                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
              </div>
            </div>
          </div>
        </div>
      </section>



</body>
</html>