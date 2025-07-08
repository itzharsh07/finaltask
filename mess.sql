-- Table: users
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) UNIQUE,
  password VARCHAR(255)
);

-- Table: menu
CREATE TABLE IF NOT EXISTS menu (
  id INT AUTO_INCREMENT PRIMARY KEY,
  day VARCHAR(20) UNIQUE,
  breakfast VARCHAR(255),
  lunch VARCHAR(255),
  dinner VARCHAR(255)
);

-- Preloaded weekly menu data
INSERT INTO menu (day, breakfast, lunch, dinner) VALUES
('Monday', 'Poha & Tea', 'Rajma Chawal', 'Roti, Mix Veg'),
('Tuesday', 'Paratha & Curd', 'Chole Rice', 'Roti, Aloo Gobi'),
('Wednesday', 'Bread Butter & Banana', 'Dal Fry, Jeera Rice', 'Roti, Paneer Masala'),
('Thursday', 'Idli & Sambar', 'Aloo Tamatar, Rice', 'Roti, Lauki Sabzi'),
('Friday', 'Upma & Coconut Chutney', 'Kadhi Chawal', 'Roti, Bhindi Fry'),
('Saturday', 'Boiled Egg & Toast', 'Veg Biryani & Raita', 'Roti, Soya Chunks'),
('Sunday', 'Chole Bhature', 'Pulao, Raita, Papad', 'Poori, Aloo Dum');
