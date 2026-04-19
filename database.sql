
-- Таблица игр
CREATE TABLE games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    image_url VARCHAR(500),
    platform VARCHAR(100),
    release_year YEAR,
    followers INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Таблица новостей
CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    image_url VARCHAR(500),
    publish_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Таблица подписчиков
CREATE TABLE subscribers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Таблица сообщений из контактов
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(255),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Заполняем тестовыми данными
INSERT INTO games (title, description, image_url, platform, release_year, followers) VALUES
('Shadow Realms', 'Эпическая тёмная RPG с открытым миром', 'https://picsum.photos/id/1015/600/340', 'PC / PS5', 2024, 12450),
('Neon Odyssey', 'Киберпанковый экшен', 'https://picsum.photos/id/133/600/340', 'Mobile / PC', 2023, 9820),
('Dragon\'s Legacy', 'Фэнтезийный экшен с драконами', 'https://picsum.photos/id/201/600/340', 'PC / Xbox', 2024, 15670),
('Quantum Clash', 'Многопользовательский VR-боевик', 'https://picsum.photos/id/180/600/340', 'VR (Meta Quest)', 2025, 8340),
('Astral Frontiers', 'Космическая стратегия', 'https://picsum.photos/id/251/600/340', 'PC', 2025, 6700),
('Echoes of Eternity', 'Приключенческая головоломка', 'https://picsum.photos/id/870/600/340', 'Mobile / PC', 2024, 5400),
('Nightfall Protocol', 'Тактический стелс-экшен', 'https://picsum.photos/id/1016/600/340', 'PC / PS5', 2025, 9200),
('Velocity Kings', 'Высокоскоростные гонки', 'https://picsum.photos/id/133/600/340', 'Mobile', 2024, 11500);

INSERT INTO news (title, content, image_url, publish_date) VALUES
('Shadow Realms выходит на PS5 и Xbox', 'Мы рады объявить о выходе нашего флагманского проекта на консолях уже этим летом.', 'https://picsum.photos/id/30/600/340', '2026-04-07'),
('KPStudios выиграла грант Epic MegaGrants', 'Благодаря этому мы ускорим разработку следующей VR-игры.', 'https://picsum.photos/id/160/600/340', '2026-04-02'),
('Открыта вакансия Senior 3D Animator', 'Ищем талантливого специалиста в нашу motion-capture студию.', 'https://picsum.photos/id/201/600/340', '2026-03-28');