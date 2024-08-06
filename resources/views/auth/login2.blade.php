<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-red-950">
    <section class="flex w-full h-screen gap-4 flex-col justify-center items-center">
        @if(session()->has('success'))
            <div
                class="w-auto px-12 h-16 flex justify-center items-center bg-green-600 text-white font-bold text-xl rounded-xl shadow-lg">
                {{ session('success') }}
            </div>
        @endif
        @if(session()->has('loginError'))
            <div
                class="w-auto px-12 h-16 flex justify-center items-center bg-red-600 text-white font-bold text-xl rounded-xl shadow-lg">
                {{ session('loginError') }}
            </div>
        @endif
        <div class="w-[950px] max-sm:w-full relative overflow-hidden flex max-sm:bg-transparent bg-red-500 max-sm:rounded-none rounded-[60px] max-sm:h-full h-[600px]">
            <div
                class="z-10 flex py-4 max-sm:py-12 px-16 flex-col justify-start items-center max-sm:rounded-none rounded-[60px] h-full max-sm:w-full  w-[450px] bg-gray-50">
                <div class="flex flex-col w-full items-center gap-4">
                    <img width="80" src="{{asset('image/logo-telkom.png')}}" alt="">
                    <div
                        class="uppercase w-full flex justify-center items-center pb-8 border-b-2 text-3xl font-semibold  border-gray-900 text-gray-900 ">
                        Login</div>
                </div>
                <form class="w-full flex flex-col py-12 gap-12" action="/login" method="POST">
                    @csrf
                    <div class="flex h-16 justify-between items-end gap-4">
                        <div class="w-20 flex justify-center items-center h-16">
                            <svg viewBox="0 0 58 58" fill="none" class="w-16 h-16"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="58" height="58" fill="url(#pattern0_180_8995)" />
                                <defs>
                                    <pattern id="pattern0_180_8995" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_180_8995" transform="scale(0.0111111)" />
                                    </pattern>
                                    <image id="image0_180_8995" width="90" height="90"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEg0lEQVR4nO2cS4gdRRSGazTgYxHBF0ZcRFyLrsQIPhJUCO6Cg2DAYWbq/3uc8QrXyf4mgZBsfGUSJnEhUQSRrLIQiSEEjKsgCkGTSAwoKprnxMTrhIgZKW+PiNy+6emu6qquPh+c3fT0Od/UdHdVdx2lBEEQBEEQBEEQYoPkapLvkDxO8neSCxkxB2BHu92+RQUGyVtJ7iR5cUD+prbjAHYnSfJUlck9QPLggMSyYpcKDJNTgToOaK3vd5oYgMcAnCuQ3ALJbqfTuUEFgskFwB8FazlLcpWzkVxC8kJkov+R7WRkF7xc/BsAZlUcl47/1vSp1YS01mtKJHMBwPYQb4YmJ5Iz5oZdtD6rN8j06aLfieYBtCcnJ+9RkUJyBcnXTK3Ob/IATmSM1rZqCCSnM0Qfs3YSAJf7nSTmkfx/TK0Zoi8pW2Rdn1TDoGsPIrqHiK6IqEWTXAVgC8nDJH9MJxlm/eEzkuuqyCFq0ewtWh3J8Sy7zywOucwlVtFDALYB+GsJk6JvALyntV7farVuqrPouX4zPuUAAG8WnaWlcdSsy7jIzbkHs57c5wTblWVIvlBS8mJup8bHx2+3nZ9zD+magFmA6ZowC0S21y7avXP8YEN0GjM286vKwyJDaViH5DqLkk10W63Wche5uvTgHJLvWxZtVtae911XcJD8yrZoklt91xUcJH91IHqP77qCA+Vek2XFR77rCg4AX9oWDeB133UFB4BZBzfDl3zXFRxa68ctj+Y/JyYm7vZdV5CQPGBR9F7f9QQLgEMWR/Vh3/UECck7bV+jp6am7vBdVxNEXyN5m++6ggTAKYvX6M991xMs7C2TXrMgej5Jkkd81xM0JF+2IPpF33UED3sfh58vIfnsyMjIzb7rqAUkXy1xbX7Fd/51YgjAxwU/o63ngrwvRkdH7yL57RIknzDH+M67lmit7yP5fQ7JPyVJstJ3vrUGwMYcojf6zrP2QESL6KgguSnHzXCT7zxrTafTWUby6xyij5qf9Z1vnWeIHy7hOfqDEHd+BUu799nVCMnvCswMT5pjRXgGw8PDNwJ4GsC7AH4ru6iU/o49JJ81v1s1HZIPknwbwC9l5Q6Qftp8Baq1flg1UTCAT1zJHRD7kyR5SDVoY+RVD5IXw5x7WsUM8z0TVxWbVYwkSfKMpddUNq/fa1VMdHq9May9eLUYJ0PqIVIaks8FILU+o7roXx99NtmEEkU2+zj7LzAzrVTWxTRmljL7IvmFb6ED4khVHvKIeqtPgm/kPR4OJyQW4ueqPBTa9mBmXHmPB3AlAKFZMV+Vhzwn6Jukahh07UFE9xDRFSGiK0JEV4SIjkj0paa3YxsbG7s3622O8waDpsOhaggANlTRYHB31sN+2k5yhYq7ZeZ01qTLanPbtJFU0ZnXXM07ol8vnghts+UuFVlbY/MO0npSpil12gm8aFLdyBp1n3H2qbBp9ldCdjci0We01o86TdCMbLOFocEd0fdX+tE7gCfTRI9ltT2OoSM6gMtpA8NZ6zc+QRAEQRAEQRAEFQB/AzEcEPabCMayAAAAAElFTkSuQmCC" />
                                </defs>
                            </svg>

                        </div>
                        <input type="text"
                            class="text-md h-full flex justify-start w-full border-b-2 text-gray-700 border-gray-700 focus:outline-none bg-transparent h"
                            name="username" placeholder="USERNAME">
                    </div>
                    <div class="flex h-16 justify-between items-end gap-4">
                        <div class="w-20 h-16 flex justify-center items-center">
                            <svg class="h-16 w-16" viewBox="0 0 35 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.25001 18.05V13.15C5.25001 6.38451 10.7345 0.9 17.5 0.9C24.2655 0.9 29.75 6.38451 29.75 13.15V18.05C32.4562 18.05 34.65 20.2438 34.65 22.95V35.2C34.65 37.9062 32.4562 40.1 29.75 40.1H5.25001C2.54381 40.1 0.350006 37.9062 0.350006 35.2V22.95C0.350006 20.2438 2.54381 18.05 5.25001 18.05ZM24.85 13.15V18.05H10.15V13.15C10.15 9.09071 13.4407 5.8 17.5 5.8C21.5593 5.8 24.85 9.09071 24.85 13.15Z"
                                    fill="#666666" />
                            </svg>


                        </div>
                        <input type="password"
                            class="text-md h-full flex justify-start w-full border-b-2 text-gray-700 border-gray-700 focus:outline-none bg-transparent h"
                            name="password" placeholder="PASSWORD">
                    </div>
                    <button class="py-3 w-full bg-red-950 text-white text-xl font-semibold rounded-xl">
                        Login
                    </button>
                </form>
            </div>
            <div class="z-5 max-sm:w-0 max-sm:hidden w-[60%] h-full bg-cover bg-no-repeat absolute translate-x-0 translate-y-0 right-0 bg-center scale-[100%] "
                style="background-image: url({{asset('image/nguawor.jpg')}});">
            </div>
        </div>
    </section>
</body>

</html>