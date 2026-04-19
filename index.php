<?php 
$page_title = "KPStudios — 3D Game Development";
require_once 'header.php'; 

$games = getAllGames(50);
?>

<div class="box hero">
    <div class="hero-info">
        <h2>KPStudios 3D Game Development</h2>
        <h1>Innovative games we create for our clients</h1>
        <p>Мы создаём иммерсивные 3D-миры для ПК, консолей, мобильных устройств и VR/AR. От идеи до релиза — полный цикл разработки с использованием Unreal Engine и Unity.</p>
        <button onclick="window.location.href='portfolio.php'">Посмотреть портфолио</button>
    </div>
    <img src="GamyController.png" alt="Game Controller">
</div>

<div class="box trend">
    <h3>Currently Trending Games</h3>
    <div class="games">
        <?php foreach($games as $game): ?>
        <div class="block">
            <img src="<?php echo htmlspecialchars($game['image_url']); ?>" alt="">
            <h4><?php echo htmlspecialchars($game['title']); ?></h4>
            <span><img src="Fire.png" alt=""> <?php echo number_format($game['followers']); ?> Followers</span>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="TextCenter">
    <h1>Создаём будущее гейминга: передовые 3D-технологии и захватывающий сюжет</h1>
</div>

<div class="box presentaish">
    <h3>Наш последний хит</h3>
    <p>Shadow Realms — эпическая RPG с открытым миром, созданная на Unreal Engine 5. Более 2 миллионов игроков уже погрузились в этот тёмный фэнтезийный мир.</p>
    <img src="Banner_1.jpg" alt="">
</div>

<!-- === Секция "Что мы предлагаем" === -->
<div class="newGradient">
    <div class="box">
        <h3>Что мы предлагаем</h3>
        <p>Полный цикл разработки игр: от концепции и 3D-моделинга до публикации и поддержки. Работали с крупными издателями и инди-студиями.</p>

        <div class="info">
            <div class="block">
                <img src="Development_1.png" alt="">
                <p>Mobile Game Development</p>
                <img src="arrow.png" alt="">
            </div>
            <div class="block">
                <img src="Development_2.png" alt="">
                <p>PC Game Development</p>
                <img src="arrow.png" alt="">
            </div>
            <div class="block">
                <img src="Development_3.png" alt="">
                <p>PS4 / PS5 Game Development</p>
                <img src="arrow.png" alt="">
            </div>
            <div class="block">
                <img src="Development_4.png" alt="">
                <p>AR/VR Solutions</p>
                <img src="arrow.png" alt="">
            </div>
            <div class="block">
                <img src="Development_5.png" alt="">
                <p>AR/VR Design</p>
                <img src="arrow.png" alt="">
            </div>
            <div class="block">
                <img src="Development_6.png" alt="">
                <p>3D Modeling & Animation</p>
                <img src="arrow.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="loop" style="display: flex;">
        <h2>Stay in the loop</h2>
        <div class="registr" style="margin-left: 160px;">
            <h6>Подписывайся на новости KPStudios</h6>
            <p>Получай свежие анонсы игр, вакансии и эксклюзивный контент. Мы не спамим!</p>
            <form id="subscribe-form">
                <input type="email" placeholder="Ваш email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>

<?php require_once 'footer.php'; ?>