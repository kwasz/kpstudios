<?php 
$page_title = "Contact — KPStudios";
require_once 'header.php'; 

// Сообщение об успехе
$success = isset($_GET['success']) ? true : false;
?>

<div class="gradient">
    <div class="box hero" style="min-height:400px; padding-bottom:60px;">
        <div class="hero-info" style="max-width:700px; margin:0 auto; text-align:center; padding-top:40px;">
            <h2>Связаться с нами</h2>
            <h1>Давайте создадим вместе что-то крутое</h1>
            <p>Готовы обсудить ваш проект? Напишите нам — ответим в течение 24 часов.</p>
        </div>
    </div>
</div>

<div class="newGradient">
    <div class="box">
        <?php if ($success): ?>
            <div style="max-width:700px; margin:30px auto; padding:20px; background:#28a745; color:white; border-radius:12px; text-align:center;">
                ✅ Сообщение успешно отправлено! Мы свяжемся с вами в ближайшее время.
            </div>
        <?php endif; ?>

        <form action="contact_handler.php" method="POST" id="contact-form" 
              style="max-width:700px; margin:0 auto; background:rgba(0,0,0,0.4); padding:50px; border-radius:20px;">
            
            <input type="text" name="name" placeholder="Ваше имя" required 
                   style="width:100%; padding:16px; margin-bottom:20px; border-radius:50px; border:none; font-size:16px;">
            
            <input type="email" name="email" placeholder="Email" required 
                   style="width:100%; padding:16px; margin-bottom:20px; border-radius:50px; border:none; font-size:16px;">
            
            <textarea name="message" placeholder="Расскажите о вашем проекте..." rows="6" required 
                      style="width:100%; padding:16px; margin-bottom:20px; border-radius:20px; border:none; font-size:16px; resize:vertical;"></textarea>
            
            <button type="submit" 
                    style="width:100%; padding:16px; background:#DC7000; color:white; border:none; border-radius:50px; font-size:18px; font-weight:600;">
                Отправить сообщение
            </button>
        </form>
    </div>
</div>

<div class="loop">
    <div class="box" style="text-align:center; font-size: 24px;">
        <p>📍 Россия, Новосибирск, ул. Немировича-Данченко, 136</p>
        <p style="margin:15px 0;">✉️ hello@kpstudios.com</p>
        <p>📞 +7 (495) 123-45-67</p>
    </div>
</div>

<?php require_once 'footer.php'; ?>