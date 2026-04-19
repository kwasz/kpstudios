<?php 
$page_title = "Portfolio — KPStudios";
require_once 'header.php'; 

// Получаем ВСЕ игры из базы данных
$all_games = getAllGames(50);   // 50 — достаточно большое число, чтобы показать все
?>

<div class="gradient">
    <div class="box hero" style="min-height: 420px; padding-top: 80px; padding-bottom: 60px;">
        <div class="hero-info" style="max-width:700px; margin:0 auto; text-align:center;">
            <h2>Наши проекты</h2>
            <h1>Игры, которые мы создали</h1>
            <p>Каждый проект — это уникальный мир с собственной душой. Вот лучшие работы KPStudios за последние годы.</p>
        </div>
    </div>

    <div class="box projects" style="padding-top: 0; padding-bottom: 100px;">
        <div style="display: grid; 
                    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); 
                    gap: 35px;">

            <?php if (empty($all_games)): ?>
                <p style="grid-column: 1 / -1; text-align: center; padding: 60px; font-size: 18px;">
                    Пока нет проектов в базе данных.
                </p>
            <?php else: ?>
                <?php foreach($all_games as $game): ?>
                <div style="background: rgba(255,255,255,0.05); border-radius: 16px; overflow: hidden; transition: all 0.4s;">
                    <img src="<?= htmlspecialchars($game['image_url']) ?>" 
                         alt="<?= htmlspecialchars($game['title']) ?>" 
                         style="width:100%; height:220px; object-fit: cover;">
                    
                    <div style="padding: 20px;">
                        <h3 style="margin: 0 0 8px;"><?= htmlspecialchars($game['title']) ?></h3>
                        <p style="color:#E87D0E; font-size: 14px; margin-bottom: 12px;">
                            <?= htmlspecialchars($game['platform']) ?> • <?= $game['release_year'] ?>
                        </p>
                        <p style="font-size: 15px; line-height: 1.5;">
                            <?= htmlspecialchars($game['description']) ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>

        <div style="text-align: center; margin-top: 70px;">
            <p style="font-size: 18px; opacity: 0.8;">
                Всего проектов в портфолио: <strong><?= count($all_games) ?></strong>
            </p>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>