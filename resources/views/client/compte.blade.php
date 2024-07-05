@extends('client.master')

    @section('title')
        Compte
    @endsection

    @section('body')
        bg-black
    @endsection

    @section('content')

        <section class="mb-24">

            <div class="flex justify-around items-center mt-10">
                <i class="fa-solid fa-arrow-left text-white border-white border-2 rounded-full p-1"></i>
                <p class="text-2xl font-bold text-white "><span class="border">COMPTE</span></p>
                <i class="fa-solid fa-user-gear text-white"></i>
            </div>

            <div class="flex justify-around items-center mt-10 text-white ml-3">
                <i class="fa-solid fa-volume-off text-xl"></i>
                <marquee behavior="" direction="left">Une solide energie se conçoit avec des barrages actifs</marquee>
            </div>

            <div class="mt-10 text-white">

                <div class="flex justify-between items-center bg-stone-600  border-b-2 border-black">

                    <div class="p-3 text-center">
                        <p>Gustave</p> 
                    </div>

                    <div class="p-3 text-center">
                        <p>693494147</p> 
                    </div>

                    <div class="p-3 text-center">
                        <p><span>ID: </span>12345678</p> 
                    </div>

                </div>

                <div class="flex justify-around items-center bg-stone-600 border-b-2 border-black">

                    <div class="py-2 text-center">
                        <p>10000 <span>($)</span></p> 
                        <p>Solde</p>
                    </div>

                    <div class="py-2 text-center">
                        <p>10</p>
                        <p>équipe</p>
                    </div>

                </div>

                <div class="flex justify-around items-center bg-stone-600 border-b-2 border-black">

                    <a href="">
                        <div class="p-3 text-center">
                            <p class="uppercase text-sm">inviter</p> 
                        </div>
                    </a>

                    <a href="">
                        <div class="p-3 text-center">
                            <p class="uppercase text-sm">recharger</p> 
                        </div>
                    </a>

                    <a href="">
                        <div class="p-3 text-center">
                            <p class="uppercase text-sm">retirer</p> 
                        </div>
                    </a>

                </div>

            </div>



            <div class="mt-10 text-white">

                <a href="">
                    <div class=" bg-stone-600 border-b-2 border-black">

                        <div class="flex justify-between items-center p-1 text-center">
                            <i class="fa-solid fa-list  text-blue-500 text-2xl ml-2"></i>
                            <div class="text-start w-11/12 ml-3">
                                <p class="text-md font-bold">Mes recharges </p>
                                <p class="text-xs">Ici vous pouvez consulter le statut de vos <br>recharges </p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-neutral-400 text-end mr-2"></i>                    
                        </div>
                        
                    </div>
                </a>

                <a href="">
                    <div class=" bg-stone-600 border-b-2 border-black">

                        <div class="flex justify-between items-center p-1 text-center">
                            <i class="fa-solid fa-list  text-blue-500 text-2xl ml-2"></i>
                            <div class="text-start w-11/12 ml-3">
                                <p class="text-md font-bold">Mes retraits </p>
                                <p class="text-xs">Ici vous pouvez consulter le statut de vos <br> recharges </p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-neutral-400 text-end mr-2"></i>                     
                        </div>
                        
                    </div>
                </a>

                <a href="">
                    <div class=" bg-stone-600 border-b-2 border-black">

                        <div class="flex justify-between items-center p-1 text-center">
                            <i class="fa-regular fa-user  text-blue-500 text-2xl ml-2"></i>
                            <div class="text-start w-11/12 ml-3">
                                <p class="text-md font-bold">Service client </p>
                                <p class="text-xs">Veuillez contacter le service client en cas de <br> problème !</p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-neutral-400 text-end mr-2"></i>                     
                        </div>
                        
                    </div>
                </a>

                <a href="">
                    <div class=" bg-stone-600 border-b-2 border-black">

                        <div class="flex justify-between items-center p-1 text-center">
                            <i class="fa-solid fa-power-off  text-blue-500 text-2xl ml-2"></i>
                            <div class="text-start w-11/12 ml-3">
                                <p class="text-md font-bold">Déconnexion </p>
                                <p class="text-xs">Se déconnecter afin de préserver la sécurité <br>de votre compte</p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-neutral-400 text-end mr-2"></i>                     
                        </div>
                        
                    </div>
                </a>

                <a href="">
                    <div class=" bg-stone-600 border-b-2 border-black">

                        <div class="flex justify-between items-center p-1 text-center">
                            <i class="fa-solid fa-download  text-blue-500 text-2xl ml-2"></i>
                            <div class="text-start w-11/12 ml-3">
                                <p class="text-md font-bold">Télécharger l'application </p>
                                <p class="text-xs">Télécharger l'application pour profiter d'une <br> meilleure experience</p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-neutral-400 text-end mr-2"></i>                     
                        </div>
                        
                    </div>
                </a>

                <a href="/">
                    <div class=" bg-stone-600 border-b-2  border-black">

                        <div class="flex justify-between items-center p-1 text-center">
                            <i class="fa-brands fa-readme  text-blue-500 text-2xl ml-2"></i>
                            <div class="text-start w-11/12 ml-3">
                                <p class="text-md font-bold">A propos </p>
                                <p class="text-xs">Ici vous pouvez tout savoir sur la plateforme <br>hydrorent</p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-neutral-400 text-end mr-2"></i>                     
                        </div>
                        
                    </div>
                </a>

            </div>


        </section>

    @endsection