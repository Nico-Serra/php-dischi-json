<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">
    <title>Dischi Json</title>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>

    <div id="app">
        <header>
            <img src="./assets/img/spotify.png" alt="" width="50px">
        </header>
        <div class="container">

            <div class="row">
                <div class="col-4" v-for="(disc,index) in discs">
                    <div class="card" @click="selectDisc(disc)">
                        <img class="card-img-top" :src="disc.poster" alt="Title" />
                        <div class="card-body text-center">
                            <h4 class="card-title">{{disc.title}}</h4>
                            <p class="card-text">{{disc.author}}</p>
                            <p class="card-text year">{{disc.year}}</p>
                            <p class="card-text">{{disc.genre}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="modale" v-if="discSelect != null">
            <div class="card"><img :src="discSelect.poster" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{discSelect.title}}</h4>
                    <p class="card-text">{{discSelect.author}}</p>
                    <p class="card-text year">{{discSelect.year}}</p>
                    <p class="card-text">{{discSelect.genre}}</p>
                </div>
                <span class="close" @click="closeModal()">❌</span>
            </div>
        </div>

    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src="./assets/js/app.js"></script>
</body>

</html>