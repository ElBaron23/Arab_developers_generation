
-- إنشاء قاعدة بيانات جديدة باسم mydatabase
CREATE DATABASE arabic_generation;

-- استخدام قاعدة البيانات التي تم إنشاؤها حديثًا
USE arabic_generation;

-- إنشاء جدول باسم users لتخزين بيانات المستخدمين
CREATE TABLE users (
    -- عمود لتخزين المعرف الفريد لكل مستخدم ويزيد تلقائيًا
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    -- عمود لتخزين اسم المستخدم، لا يقبل القيم الفارغة
    firstname VARCHAR(50) NOT NULL,
    -- عمود لتخزين اسم المستخدم، لا يقبل القيم الفارغة
    lastname VARCHAR(50) NOT NULL,
    -- عمود لتخزين رقم الهاتف  لا يقبل القيم الفارغة
    phone INT(50) NOT NULL,
    -- عمود لتخزين  جنس المستخدم  لا يقبل القيم الفارغة
    gender INT(50) NOT NULL,
    -- عمود لتخزين   تاريخ ميلاد المستخدم  لا يقبل القيم الفارغة
    birth DATE NOT NULL,
    -- عمود لتخزين البريد الإلكتروني، لا يقبل القيم الفارغة
    email VARCHAR(100) NOT NULL,
    -- عمود لتخزين كلمة السر  لا يقبل القيم الفارغة
    password VARCHAR(100) NOT NULL,
    -- عمود لتخزين تاريخ ووقت إنشاء السجل، يُعَيَّن تلقائيًا عند إنشاء السجل
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



-- إنشاء جدول باسم posts لتخزين بيانات المنشورات
CREATE TABLE posts (
    -- عمود لتخزين المعرف الفريد لكل منشور ويزيد تلقائيًا
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    -- عمود لتخزين معرف المستخدم الذي أنشأ المنشور، لا يقبل القيم الفارغة
    user_id INT NOT NULL,
    -- عمود لتخزين عنوان المنشور، لا يقبل القيم الفارغة
    title VARCHAR(255) NOT NULL,
    -- عمود لتخزين نص المنشور، لا يقبل القيم الفارغة
    body TEXT NOT NULL,
    -- عمود لتخزين تاريخ ووقت إنشاء السجل، يُعَيَّن تلقائيًا عند إنشاء السجل
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    -- تعريف مفتاح خارجي يربط معرف المستخدم من جدول posts بجدول users
    FOREIGN KEY (post_id) REFERENCES users(user_id)
);

--
-- Structure de la table `admin`
--
--انشاء جدول الادمن
CREATE TABLE `admin` (
--عمود لتخزين معرف الادمين
  `admin_id` int(11) NOT NULL,
  --عمود لتخزيد يوزنيم الادمن
  `user` varchar(25) NOT NULL,
  --عمود لتخزين كلمة المرور الادمين
  `password` varchar(50) NOT NULL,
  --عمود تسجيل هاتف الادمين
  `phone` varchar(50) NOT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `password`) VALUES
(1, 'touzouz', '10203040');

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'imad', 'touzouz', 'imad@gmail.com', ''),
(2, 'imad', 'touzouz', 'imad2@gmail.com', '12341234'),
(3, 'imad', 'touzouz', 'generationarabic@gmail.com', '12341234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;