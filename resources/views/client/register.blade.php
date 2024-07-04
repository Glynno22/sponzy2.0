@extends('client.master')

    @section('title')
        Register
    @endsection
    @section('content')
    <script>

        let type = "password";

    </script>
    <div class="m-5">

        <div class="flex justify-center my-4 ">
            <p class="font-bold text-4xl">
                Créer un compte
            </p>
        </div>

       

        <div class="flex justify-center my-4 border-black border-1 w-25  p-3 rounded-full ">
                <i class="fa-solid fa-user-plus text-blue-500"></i>
        </div>

        <div class="form flex justify-center">
            <form action="#" method="POST" class="md:w-6/12" >
                <div class="flex justify-center ">
                    <input type="text" name="" placeholder="Nom" class="hover:fielsed placeholder:text-md outline-none border-b-2 border-black p-2 text-lg font-medium w-full">
                </div>
                <div class="flex justify-center mt-3 ">
                    <input type="text" name="" placeholder="Téléphone" class="placeholder:text-md outline-none border-b-2 border-black p-2 text-lg font-medium w-full">
                </div>
                <div class="flex justify-center mt-3 ">
                    <input type="password" name="" placeholder="Mot de passe" class="placeholder:text-md outline-none border-b-2 border-black p-2 text-lg font-medium w-full">
                    <i class="fa-solid fa-eye mt-3 border-b-2 border-black"></i>
                </div>
                <p class="text-gray-300 text-sm font-bold mt-2">Minimun 6 caratères</p>
                <div class="flex justify-center mt-2 ">
                    <input type="text" name="" placeholder="Confirmer mot de passe" class="placeholder:text-md outline-none border-b-2 border-black p-2 text-lg font-medium  w-full">
                    <i class="fa-solid fa-eye mt-3 border-b-2 border-black"></i>
                </div>
                <div class="flex justify-center mt-2 ">
                    <input type="number" name="number" placeholder="Code parainage" class="placeholder:text-md outline-none border-b-2 border-black p-2 text-lg font-medium  w-full">
                </div>
                <div class="flex justify-center mt-5 ">
                    <button class="bg-black text-white p-2 text-xl font-bold  rounded-full w-full">Créer un compte</button>
                </div>
                <div class="flex justify-between mt-3">
                    <p class="text-gray-500 text-sm font-bold">Avez vous un compte ?</p>
                    <a class="text-blue-500 text-sm font-bold" href="">Connectez-vous</a>
                </div>
            </form>
        </div>

        
        
    </div>

    @endsection