<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Star Battle</title>
</head>

<body>
    <!-- Game -->
    <div id="app">
        <div id="logo">
            <img src="./img/logo-01.png" alt="logo">
        </div>
        <div id="container" class="absolute">
            <div id="start" class="column">
                <p class="message pre">
                    1. Use W, A, S, D to control the ship, press Space to launch.
                    2. The initial value of fuel is 15, which decreases by 1 point every second. When the fuel value is 0, the game ends.
                    3. Touch the dropped fuel bottle to add 15 points to a maximum of 30 points.
                    4. Hit the enemy ship to increase 5 points. Planets need to be hit twice, adding 10 points. Deduct 10 points for hitting an ally.
                    5. Hit the enemy loses 15 points of fuel, hit the friendly deduct 10 points.
                    6. The game allows negative scores.
                    7. Press P to pause the game and M to mute.
                    Start your Star Warsnigga!
                </p>
                <button id="start-btn" class="btn">
                    <p>start the game</p>
                    <p>Loading...</p>
                </button>
            </div>
            <div id="play" class="absolute">
                <canvas id="canvas" class="absolute"></canvas>
                <div class="content absolute">
                    <div class="header">
                        <ul class="info">
                            <li>
                                <img src="./img/time3.png" alt="time">
                                <span id="time">00</span>
                            </li>
                            <li>
                                <img src="./img/fuel2.png" alt="fuel">
                                <span id="fuel">00</span>
                            </li>
                            <li>
                                <img src="./img/score.png" alt="score">
                                <span id="score">00</span>
                            </li>
                            <li>
                                <img src="./img/playerBullet.png" alt="score">
                                <span id="shoot">00</span>
                            </li>

                        </ul>
                        <ul class="option">
                            <li id="game-font-size-add">
                                <img class="pause" src="./img/a+.png" alt="time">
                            </li>
                            <li id="game-font-size-reduce">
                                <img class="pause" src="./img/a-.png" alt="time">
                            </li>
                            <li id="game-mute-btn">
                                <img class="pause" src="./img/mute.png" alt="time">
                                <img class="pause" src="./img/speaker.png" alt="time">
                            </li>
                            <li id="game-pause-btn">
                                <img class="pause" src="./img/play.png" alt="time">
                                <img class="pause" src="./img/pause.png" alt="time">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="over" class="column absolute">
                <div class="game-data">
                    <p class="message">
                        <span>
                            <img src="./img/time3.png" alt="time">
                        </span>
                        <span>
                            --
                        </span>
                        <span class="time">00</span>
                    </p>
                    <p class="message">
                        <span>
                            <img src="./img/score.png" alt="score">
                        </span>
                        <span>
                            --
                        </span>
                        <span class="score">00</span>
                    </p>
                    <p class="message">
                        <span>
                            <img src="./img/playerBullet.png" alt="score">
                        </span>
                        <span>
                            --
                        </span>
                        <span class="shoot">00</span>
                    </p>
                </div>
                <input type="text" id="name" placeholder="请输入您的名字" />
                <button id="submit-btn" class="btn" disabled>
                    继续游戏
                </button>
            </div>
            <div id="rank" class="column absolute">
                <table class="scroll">
                    <thead>
                        <tr>
                            <th>名次</th>
                            <th>名字</th>
                            <th>分数</th>
                            <th>秒数</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <button id="restart-btn" class="btn">
                    返回开始
                </button>
            </div>
        </div>
    </div>
    <footer>
        <span>Crafted with by
            <a href="http://4ark.me"> @4Ark</a>/<a href="https://github.com/gd4Ark/star-battle">GitHub</a>
        </span>
    </footer>
    <script src="js/config/config.js"></script>
    <script src="js/utils/utils.js"></script>
    <script src="js/utils/res.js"></script>
    <script src="js/class/scene.js"></script>
    <script src="js/class/cooldown.js"></script>
    <script src="js/class/element.js"></script>
    <script src="js/class/animation.js"></script>
    <script src="js/class/plane.js"></script>
    <script src="js/class/bullet.js"></script>
    <script src="js/class/player.js"></script>
    <script src="js/class/enemy.js"></script>
    <script src="js/class/meteorite.js"></script>
    <script src="js/class/friend.js"></script>
    <script src="js/class/star.js"></script>
    <script src="js/class/fuel.js"></script>
    <script src="js/scenes/start.js"></script>
    <script src="js/scenes/play.js"></script>
    <script src="js/scenes/over.js"></script>
    <script src="js/scenes/rank.js"></script>
    <script src="js/game.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
