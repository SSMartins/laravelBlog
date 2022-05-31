<x-guest-layout>

<div class=" w-screen h-screen" id="fullscreen">
        <div class="absolute inset-0">
            <img class=" object-cover w-full h-max" src="https://img.freepik.com/free-photo/working-with-laptop-computer-cactus-copyspace-table-background-top-view_34933-339.jpg?w=1060">

          </div>

        <div class="relative container mx-auto p-5 mt-20" id="relative">

        <h1 class="text-4xl px-20">
        Contact
        </h1>


       <!-- component -->

        <form class="w-full max-w-3xl mx-auto">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full  px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Nom
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Email
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Titre
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
            <p class="text-gray-600 text-xs italic mb-3">Quelques conseils - aussi longtemps que nécessaire</p>
            </div>
            <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Message
            </label>
            <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3">
            <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                Envoyer
            </button>
            </div>
            <div class="md:w-2/3"></div>
        </div>
        <p class="my-5"> Les informations saisies sur ce formulaire seront communiquées au propriétaire de ce blog via email. Vous pouvez exercer vos droits relatifs à vos données personnelles (accès, effacement, rectification, portabilité…) directement depuis ce formulaire contact. Le propriétaire du blog est informé qu’il dispose d’ un mois pour vous répondre. Pour en savoir plus sur la protection de vos données personnelles, cliquez ici.</p>
        </form>
    </div>

</x-guest-layout>

