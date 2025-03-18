<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chronofy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-Backgrounds01">

    <main class="flex w-full h-screen">
        <div class="bg-Backgrounds02 w-2/5 h-full p-15 flex flex-col gap-5">
            <div class="w-15 h-15">
                <img src="{{ Vite::asset('resources/images/Chronofy_Logo.png') }}" alt="Descrição da imagem"
                    class="w-full">
            </div>
            <form action="index.php" method="post" class="w-full h-full flex flex-col gap-5">
                <div class="w-5/10 h-20">
                    <h1 class="text-4xl text-Titulos">Bem Vindo</h1>
                    <p class="text-Subtitulos">*Prencha todos os campos abaixo:</p>
                </div>
                <div class="flex flex-col gap-10">
                    <div class=" flex gap-3">
                        <div class="w-full">
                            <h1 class="text-Titulos">Nome:</h1>
                            <div class="w-full h-12.5 flex p-2 items-center border-2 border-Subtitulos">
                                <div class="h-5 w-5 "><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-full text-Titulos">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                </div>
                                <input type="text" name="PrimeiroNome" id="" class="inputs"
                                    placeholder="Primeiro nome">
                            </div>
                        </div>
                        <div class="w-full">
                            <h1 class="text-Titulos">Sobrenome:</h1>
                            <div class="w-full h-12.5 flex p-2 items-center border-2 border-Subtitulos">
                                <div class="h-5 w-5 "><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-full text-Titulos">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                </div>
                                <input type="text" name="SobreNome" id="" class="inputs"
                                    placeholder="Último nome">
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <h1 class="text-Titulos">Email:</h1>
                        <div class="w-full h-12.5 flex p-2 items-center border-2 border-Subtitulos">
                            <div class="h-5 w-5"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-full text-Titulos">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                            </div>
                            <input type="email" name="Email" id="" class="inputs"
                                placeholder="Insira seu Email">
                        </div>
                    </div>
                    <div class="w-full">
                        <h1 class="text-Titulos">Senha:</h1>
                        <div class="w-full h-12.5 flex p-2 items-center border-2 border-Subtitulos">
                            <div class="h-5 w-5"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-full text-Titulos">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>
                            </div>
                            <input type="password" name="Senha" id="" class="inputs" placeholder="Senha">
                            <div class="h-5 w-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-full text-Titulos">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <h1 class="text-Titulos">Confirmar Senha:</h1>
                        <div class="w-full h-12.5 flex p-2 items-center border-2 border-Subtitulos">
                            <div class="h-5 w-5"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-full text-Titulos">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>
                            </div>
                            <input type="password" name="ConfirmSenha" id="" class="inputs"
                                placeholder="Confiramar Senha">
                            <div class="h-5 w-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-full text-Titulos">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <input type="submit" value="Enviar"
                        class="w-full h-12.5 bg-DetalhesVerde text-md font-bold duration-300 hover:cursor-pointer hover:bg-[#81cf6e]">
                </div>
                <div class=" flex justify-center items-center w-full h-3 gap-2">
                    <div class="w-15 h-0.5 bg-Subtitulos"></div>
                    <div class="text-Subtitulos">OU</div>
                    <div class="w-15 h-0.5 bg-Subtitulos"></div>
                </div>
                <div class="flex gap-3">
                    <a href=""
                        class="w-full h-12.5 p-4 bg-Subtitulos hover:bg-Titulos flex items-center duration-300">
                        <img src="{{ Vite::asset('resources/images/Google_Logo.png') }}" alt="Descrição da imagem"
                            class="w-10 h-10">
                        <p class="text-md text-Backgrounds02 font-medium pl-2">Cadastra-se com o Google</p>
                    </a>
                    <a href=""
                        class="w-full h-12.5 p-4 bg-Subtitulos hover:bg-Titulos flex items-center duration-300">
                        <img src="{{ Vite::asset('resources/images/Facebook_Logo.png') }}" alt="Descrição da imagem"
                            class="w-10 h-10">
                        <p class="text-md text-Backgrounds02 font-medium pl-2">Cadastra-se com o Facebook</p>
                    </a>
                </div>
                <div class="flex justify-center items-center w-full h-3">
                    <div class="w-5/10 h-full flex gap-2 justify-center items-center">
                        <p class="text-md text-Subtitulos">Já tem conta?</p>
                        <a href=""
                            class="text-md text-DetalhesVerde duration-300 underline hover:text-[#81cf6e]">Login</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="w-3/5 h-full p-15"></div>
    </main>
    <style>
        .inputs {
            width: 100%;
            height: 50px;
            padding: 8px;
            background-color: none;
            border: none;
            color: #eceef4;
        }

        .inputs:focus {
            outline: none;
        }

        .inputs::placeholder {
            color: #d8dee9;
        }
    </style>
</body>

</html>
