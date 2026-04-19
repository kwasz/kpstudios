<?php 
$page_title = "News — KPStudios";
require_once 'header.php'; 

// Получаем все новости из базы (до 10 штук)
$all_news = getAllNews(10);
?>

<div class="gradient">
    <div class="box hero" style="min-height:400px; padding-bottom:60px;">
        <div class="hero-info" style="max-width:700px; margin:0 auto; text-align:center; padding-top:40px;">
            <h2>Новости</h2>
            <h1>Что нового в KPStudios</h1>
        </div>
    </div>

    <div class="box" style="padding:80px 0 120px;">
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(340px, 1fr)); gap:30px;">

            <?php if (empty($all_news)): ?>
                <p style="text-align:center; grid-column:1/-1; padding:40px;">Пока нет новостей в базе данных.</p>
            <?php else: ?>
                <?php foreach($all_news as $news): ?>
                <div style="background:rgba(255,255,255,0.05); border-radius:12px; overflow:hidden;">
                    <img src="<?= htmlspecialchars($news['image_url']) ?>" alt="" style="width:100%; height:220px; object-fit:cover;">
                    <div style="padding:20px;">
                        <span style="color:#E87D0E; font-size:14px;">
                            <?= date('d F Y', strtotime($news['publish_date'])) ?>
                        </span>
                        <h3 style="margin:12px 0 10px;"><?= htmlspecialchars($news['title']) ?></h3>
                        <p><?= nl2br(htmlspecialchars($news['content'])) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>