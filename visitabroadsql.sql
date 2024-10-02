-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2024 at 04:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitabroad`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(155) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(155) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `date`, `image`, `content`) VALUES
(2, 'Exploring the Enigmatic Narayan Hiti Palace', '2024-07-18', 'blog-15720.jfif', '<p>Nestled in the heart of Kathmandu, Nepal, Narayan Hiti Palace stands as a testament to the nation\'s rich cultural heritage and royal legacy. Once the royal residence of Nepal\'s monarchy, this grand palace, also known as Narayanhiti Durbar, has witnessed centuries of history and political transformation.</p><p>Built in the 19th century by King Mahendra, Narayan Hiti Palace boasts a blend of traditional Nepalese architecture and modern influences. The name \"Narayanhiti\" derives from the nearby Narayana temple and \"hiti,\" which means water spout in Newari, highlighting the significance of water in the palace\'s design. The palace grounds encompass 30 hectares, featuring lush gardens, exquisite courtyards, and intricate woodwork that reflect the craftsmanship of the era.</p><p>After the abolition of the monarchy in 2008, Narayan Hiti Palace was converted into a public museum, offering a glimpse into the opulent lifestyle of Nepal\'s royals. Visitors can explore the Throne Room, Banquet Hall, and private quarters, adorned with priceless artifacts, regal portraits, and traditional furnishings.</p><p>A visit to Narayan Hiti Palace is not just a journey through Nepal\'s royal past but also an immersion into its cultural and historical essence. It stands as a symbol of resilience and transformation, captivating the hearts of history enthusiasts and travelers alike.</p>'),
(3, 'Discovering the Pristine Beauty of Tilicho Lake', '2024-07-18', 'blog-8900.jfif', '<p>Nestled high in the majestic Annapurna range of the Himalayas, Tilicho Lake is one of Nepal’s most stunning natural wonders. At an altitude of 4,919 meters (16,138 feet), it is among the highest lakes in the world, attracting adventurers and nature lovers from around the globe.</p><p>Tilicho Lake is renowned for its breathtaking beauty. The turquoise waters reflect the surrounding snow-capped peaks, creating a surreal and serene landscape. The journey to Tilicho is an adventure in itself, often undertaken as a side trip from the Annapurna Circuit trek. The challenging trail passes through diverse terrains, including lush forests, arid landscapes, and steep mountain paths, offering trekkers an unforgettable experience.</p><p>Despite its remote location, Tilicho Lake holds significant religious and cultural importance. It is considered sacred by both Hindus and Buddhists, who believe it to be a holy site. Pilgrims often undertake the arduous journey to perform religious rituals and offer prayers at the lake.</p><p>The best time to visit Tilicho Lake is during the spring (April-May) and autumn (September-November) seasons when the weather is clear, and the trails are accessible. However, trekkers must be well-prepared for the high altitude and unpredictable weather conditions.</p><p>A visit to Tilicho Lake is a journey into the heart of the Himalayas, offering a rare blend of natural splendor, cultural significance, and adventure. It’s a place where the pristine beauty of nature and the spiritual serenity of the mountains come together, leaving an indelible mark on all who make the trek.</p>'),
(4, 'The Timeless Beauty of the Taj Mahal', '2024-07-18', 'blog-53979.jfif', '<p>The Taj Mahal, a symbol of love and architectural marvel, stands majestically on the banks of the Yamuna River in Agra, India. Commissioned by Mughal Emperor Shah Jahan in memory of his beloved wife Mumtaz Mahal, this stunning white marble mausoleum is an epitome of elegance and grandeur.</p><p>Completed in 1653, the Taj Mahal is a harmonious blend of Islamic, Persian, Ottoman Turkish, and Indian architectural styles. The central dome, flanked by four slender minarets, rises gracefully to a height of 73 meters (240 feet), creating a breathtaking silhouette against the sky. Intricate marble inlays with semi-precious stones, delicate carvings, and stunning calligraphy adorn the monument, showcasing the extraordinary craftsmanship of the artisans.</p><p>The lush Charbagh gardens, symbolizing paradise, lead visitors to the main structure, enhancing the serene and ethereal atmosphere. The reflecting pool, with its perfectly symmetrical design, mirrors the beauty of the Taj Mahal, adding to its enchanting allure.</p><p>Beyond its architectural splendor, the Taj Mahal is a testament to eternal love and devotion. Shah Jahan’s profound affection for Mumtaz Mahal is immortalized in this monument, making it one of the most poignant love stories ever told.</p><p>Recognized as a UNESCO World Heritage Site, the Taj Mahal attracts millions of visitors from around the world, captivated by its timeless beauty and historical significance. It stands not only as an architectural masterpiece but also as a symbol of India’s rich cultural heritage and the enduring power of love.</p>'),
(5, 'Paro Taktsang: Bhutan’s Cliffside Monastery', '2024-07-18', 'blog-95802.jfif', '<p>Perched precariously on a cliffside 900 meters above the Paro Valley in Bhutan, Paro Taktsang, also known as the Tiger’s Nest Monastery, is a remarkable spiritual and architectural marvel. This iconic site, enveloped in myth and mystery, is one of Bhutan’s most revered pilgrimage destinations and a symbol of the country\'s rich Buddhist heritage.</p><p>Paro Taktsang’s origins date back to the 8th century when Guru Rinpoche, also known as Padmasambhava, is said to have flown to this site on the back of a tigress to subdue a local demon. After meditating in a cave for three years, three months, three weeks, and three days, he consecrated the site, and it later became a place for monastic retreat. The monastery complex was built in 1692 around the cave where Guru Rinpoche meditated, creating an aura of spiritual sanctity.</p><p>Reaching Paro Taktsang is an adventure in itself. The trek, which takes about two to three hours, winds through pine forests adorned with prayer flags, offering spectacular views of the Paro Valley. The path, though steep and challenging, rewards trekkers with breathtaking vistas and a sense of profound tranquility upon arrival.</p><p>The monastery’s architecture is a testament to Bhutanese craftsmanship, with its white-washed walls, golden roofs, and intricate woodwork blending seamlessly into the rugged landscape. Inside, sacred shrines and murals depict the life and teachings of Guru Rinpoche, providing a glimpse into Bhutan’s deep spiritual traditions.</p><p>Paro Taktsang is not only a site of religious significance but also a cultural emblem that captures the essence of Bhutanese identity. Its remote location, spiritual aura, and stunning beauty make it a must-visit destination for travelers seeking both adventure and enlightenment.</p>'),
(6, 'Rumtek Dharma Chakra Centre: A Spiritual Haven in Sikkim', '2024-07-18', 'blog-98265.jfif', '<p>Nestled in the serene hills of Sikkim, India, the Rumtek Dharma Chakra Centre stands as a beacon of Tibetan Buddhist culture and spirituality. This magnificent monastery, located about 24 kilometers from the capital city of Gangtok, is the seat of the Karma Kagyu lineage, one of the oldest and most revered schools of Tibetan Buddhism.</p><p>Originally built in the 16th century, the monastery was reconstructed in the 1960s under the guidance of the 16th Karmapa, Rangjung Rigpe Dorje, after he fled Tibet during the Chinese invasion. The new Rumtek Monastery, mirroring the design of the original Tsurphu Monastery in Tibet, is a splendid architectural masterpiece. Its vibrant colors, intricate murals, and ornate carvings reflect the rich heritage of Tibetan art and spirituality.</p><p>The Dharma Chakra Centre serves as both a monastery and a spiritual center for Buddhist learning. It houses a golden stupa containing relics of the 16th Karmapa, sacred scriptures, and invaluable religious artifacts. The monastery’s main shrine, adorned with a towering Buddha statue and exquisite thangkas, offers a serene environment for meditation and prayer.</p><p>Each year, Rumtek Monastery hosts various religious ceremonies and festivals, attracting pilgrims and tourists from around the world. The most notable of these is the annual Kagyu Monlam Chenmo, a grand prayer festival that brings together monks and devotees in a collective expression of faith and devotion.</p><p>Visiting Rumtek Dharma Chakra Centre is a journey into the heart of Tibetan Buddhism. Its tranquil setting, spiritual ambiance, and rich cultural heritage provide an enriching experience for all who seek peace, wisdom, and enlightenment in the lap of the Himalayas.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(7, 'Adventure'),
(8, 'Culture'),
(9, 'Wildlife'),
(10, 'Spiritual'),
(11, 'Leisure'),
(12, 'Eco'),
(13, 'Festivals'),
(14, 'Trekking'),
(15, 'Mountaineering'),
(16, 'Wellness'),
(17, 'Beach'),
(18, 'Culinary'),
(19, 'History'),
(20, 'Cruises'),
(21, 'Shopping');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`) VALUES
(24, 'Nepal'),
(25, 'India '),
(26, 'Thailand '),
(27, 'Bhutan'),
(28, 'Sri Lanka'),
(29, 'Maldives'),
(30, 'Dubai'),
(31, 'China'),
(32, 'South Korea'),
(33, 'Tibet'),
(34, 'Japan'),
(35, 'Vietnam'),
(36, 'Kenya'),
(37, 'Turkey'),
(38, 'Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `inquires`
--

CREATE TABLE `inquires` (
  `id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `phone` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `destination` varchar(155) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(155) NOT NULL DEFAULT 'processing',
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquires`
--

INSERT INTO `inquires` (`id`, `name`, `phone`, `email`, `destination`, `message`, `status`, `created_on`) VALUES
(8, 'anu pamwwww', '34343433434', 'gobind98077@gmail.com', 'nepal', 'fsfweryuytrewh,hgfe cv                              ffff', 'completed', '2024-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `itineraries`
--

CREATE TABLE `itineraries` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `itineraries`
--

INSERT INTO `itineraries` (`id`, `package_id`, `day`, `question`, `answer`) VALUES
(7, 1, 1, 'What will we do on Day 1?', 'On Day 1, we will visit...'),
(9, 2, 1, 'What is the itinerary for Day 1?', 'The itinerary for Day 1 includes...'),
(10, 28, 3, 'qaewrqwerqwerq', 'wqeqwerqwerqwe'),
(20, 27, 1, '1werqwerqwer', 'qwerqwerqwe'),
(21, 27, 2, '2qewrqwerqewr', 'qewrqwerqwer'),
(22, 27, 3, '3qwerqwerqe', 'qwerqwer'),
(29, 38, 1, 'Day 1: Arrival and Introduction to Bardiya National Park', '\r\n3-Day Itinerary for Bardiya National Park\r\nDay 1: Arrival and Introduction to Bardiya National Park\r\nMorning:\r\n\r\nArrival in Bardiya National Park: Arrive at your accommodation in Bardiya. Check-in and freshen up.\r\nWelcome Briefing: Attend a welcome briefing where you will receive an overview of the park, safety guidelines, and the schedule for your stay.\r\nAfternoon:\r\n\r\nLunch at the Lodge: Enjoy a traditional Nepali lunch at your lodge.\r\nTharu Village Tour: Visit a nearby Tharu village to learn about the culture and lifestyle of the Tharu people. Experience their traditional dances and customs.\r\nElephant Breeding Center: Visit the Elephant Breeding Center to learn about the conservation efforts and see elephants up close.\r\nEvening:\r\n\r\nDinner at the Lodge: Enjoy a delicious dinner featuring local cuisine.\r\nSlide Show Presentation: Attend an informative slide show presentation about Bardiya National Park\'s flora, fauna, and conservation efforts.'),
(30, 38, 2, 'Day 2: Jungle Safari and Wildlife Exploration', 'Lunch:\r\n\r\nPicnic Lunch in the Park: Enjoy a packed picnic lunch within the park, surrounded by nature.\r\nAfternoon:\r\n\r\nJungle Walk: Take a guided jungle walk to explore the park\'s diverse ecosystems. Your guide will provide insights into the local flora and fauna.\r\nTiger Tracking: Participate in a tiger tracking activity with experienced guides.\r\nEvening:\r\n\r\nReturn to the Lodge: Head back to your lodge to relax and freshen up.\r\nTraditional Tharu Dinner: Experience a traditional Tharu dinner with authentic local dishes.\r\nCampfire and Cultural Program: Enjoy a campfire and cultural program featuring Tharu dance and music.'),
(31, 38, 3, 'Day 3: River Safari and Departure', 'Wake-Up Call and Breakfast: Begin your day with an early breakfast.\r\nRafting on the Karnali River: Go on a river safari on the Karnali River. Spot aquatic life, including dolphins, and enjoy the scenic beauty of the riverbanks.'),
(32, 39, 1, 'eaqew', 'qewqe'),
(33, 36, 1, 'Day 1: Arrival in Pokhara', 'Morning:\r\nArrive in Pokhara via a scenic flight or private van.\r\nCheck-in at the lakeside hotel.\r\nWelcome drink and brief orientation.\r\nAfternoon:\r\nLunch at the hotel restaurant.\r\nLeisurely boat ride on Phewa Lake.\r\nEvening:\r\nExplore the lakeside area and local markets.\r\nDinner at the hotel.'),
(34, 36, 2, 'Day 2: Peace Pagoda and Local Exploration', 'Morning:\r\nBreakfast at the hotel.\r\nGuided or self-guided hike to the World Peace Pagoda for panoramic views of Pokhara and the Annapurna range.\r\nAfternoon:\r\nLunch at a local restaurant with a view.\r\nVisit Devi\'s Fall and Gupteshwor Cave.\r\nEvening:\r\nReturn to the hotel for a relaxing evening.\r\nDinner at the hotel, possibly alfresco by the lake.');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `title` varchar(155) NOT NULL,
  `country` varchar(155) NOT NULL,
  `category` varchar(155) NOT NULL,
  `description` longtext NOT NULL,
  `price_range` varchar(155) NOT NULL,
  `duration` varchar(155) NOT NULL,
  `group_size` varchar(155) NOT NULL,
  `accomodation` varchar(155) NOT NULL,
  `meal` varchar(155) NOT NULL,
  `best_season` varchar(155) NOT NULL,
  `guide` varchar(155) NOT NULL,
  `transportation` varchar(155) NOT NULL,
  `image` varchar(155) NOT NULL,
  `feature` varchar(155) NOT NULL,
  `map` text NOT NULL,
  `gallery_images` text NOT NULL,
  `add_details` longtext NOT NULL,
  `inclusion_exclusion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `country`, `category`, `description`, `price_range`, `duration`, `group_size`, `accomodation`, `meal`, `best_season`, `guide`, `transportation`, `image`, `feature`, `map`, `gallery_images`, `add_details`, `inclusion_exclusion`) VALUES
(27, 'Himalayan Adventure Trek', 'Nepal', 'Adventure', 'Embark on a thrilling trek through the majestic Himalayas, including the Annapurna Circuit and Poon Hill. Experience breathtaking mountain vistas, local Sherpa culture, and serene landscapes. Perfect for those seeking adventure and spiritual solace.', '80,000', '10 Days', '10', 'Lodge/Tent', 'Breakfast, Lunch, Dinner', 'Spring, Autumn', 'Yes', 'Private Van/Flight', 'packages-98271.jpeg', 'yes', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-41137.jfif,gallery-5209.jpg,gallery-98577.jpg,gallery-10403.webp', '<ul><li><h3>Trekking Experience and Itinerary</h3></li><li>Embark on a thrilling 10-day Himalayan Adventure Trek, where each day brings new challenges and breathtaking vistas. The trek includes the renowned Annapurna Circuit and the scenic Poon Hill, offering panoramic views of some of the world’s highest peaks. Guided by experienced professionals, the trek is designed for a group size of up to 10 people, ensuring personalized attention and a shared sense of adventure. The itinerary is carefully planned to balance rigorous trekking with ample rest, allowing trekkers to acclimate and enjoy the journey. Daily treks will lead you through diverse terrains, from lush forests and terraced fields to high mountain passes, each presenting unique opportunities for exploration and discovery.</li><li><h3>Accommodation and Meals</h3></li><li>Accommodation throughout the trek is a blend of comfort and authenticity, with nights spent in cozy lodges and sturdy tents. These lodgings are strategically located to offer stunning views and a genuine taste of local hospitality. After a day of trekking, unwind in these welcoming spaces, where you can recharge for the adventures ahead. All meals—breakfast, lunch, and dinner—are included, featuring a variety of local and international dishes to keep you nourished and energized. Special dietary requirements can be accommodated upon request, ensuring that everyone can enjoy the culinary aspect of the trek without concern.</li><li><h3>Best Seasons and Transportation</h3></li><li>The best times to embark on the Himalayan Adventure Trek are during the spring and autumn seasons. In spring, the trails are adorned with blooming rhododendrons and other vibrant flora, while autumn offers clear skies and crisp, refreshing air, providing optimal conditions for trekking and photography. Transportation is meticulously arranged to enhance your travel experience. A private van ensures comfortable and flexible ground travel, while scenic flights offer stunning aerial views of the Himalayan landscape, setting the tone for the adventure to come. Starting at NPR 80,000, this trek is an investment in a once-in-a-lifetime experience that combines natural beauty, cultural immersion, and personal achievement.</li></ul>', '<h3>Inclusions</h3><ul><li><strong>Accommodation</strong>: Lodging in comfortable lodges and tents throughout the trek.</li><li><strong>Meals</strong>: All meals (breakfast, lunch, and dinner) included during the trek, with options for special dietary requirements.</li><li><strong>Guided Service</strong>: Experienced and professional trekking guides and support staff.</li><li><strong>Transportation</strong>: Private van for ground transportation and scenic flights.</li><li><strong>Permits and Fees</strong>: All necessary trekking permits and national park fees.</li><li><strong>First Aid</strong>: Basic first aid kit and access to medical assistance if needed.</li><li><strong>Equipment</strong>: Essential trekking equipment like tents, sleeping bags, and mats (if required).</li><li><strong>Cultural Experiences</strong>: Opportunities to engage with local Sherpa culture and visit significant landmarks.</li></ul><h3>Exclusions</h3><ul><li><strong>International Flights</strong>: Airfare to and from Nepal.</li><li><strong>Personal Expenses</strong>: Personal trekking gear, such as clothing, footwear, and accessories.</li><li><strong>Travel Insurance</strong>: Comprehensive travel insurance, including coverage for trekking activities.</li><li><strong>Visa Fees</strong>: Nepal entry visa fees.</li><li><strong>Additional Meals</strong>: Meals and drinks not specified in the itinerary.</li><li><strong>Tips and Gratuities</strong>: Tips for guides, porters, and other support staff.</li><li><strong>Optional Activities</strong>: Any additional activities or excursions not mentioned in the itinerary.</li><li><strong>Personal Expenses</strong>: Items of personal nature like souvenirs, laundry, and phone calls.</li></ul>'),
(28, 'Thai Beach Escape', 'Thailand', 'Beach', 'Relax on Thailand’s stunning beaches with luxurious stays in Phuket. Enjoy crystal-clear waters, pristine sands, and exceptional dining. Ideal for those seeking a tropical retreat.', '60,000', '8 Days', '8', 'Beachfront Resort', 'Breakfast, Lunch, Dinner', 'Winter', 'Optional', 'Flight/Private Transfer', 'packages-736.jpg', 'yes', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-30661.webp,gallery-79282.webp', '<ul><li><h3>Tropical Paradise Awaits: Thai Beach Escape</h3></li><li>Escape to the pristine beaches of Thailand with our 8-day Thai Beach Escape. This journey is designed for those looking to unwind in a tropical paradise, with the flexibility of guided services being optional. Whether you’re traveling solo, with friends, or family, the Thai Beach Escape offers a perfect blend of relaxation, adventure, and cultural immersion.</li><li><h3>Luxurious Accommodation</h3></li><li>Your stay will be at a luxurious beachfront resort in Phuket, renowned for its breathtaking ocean views and world-class amenities. The resort offers a serene environment where you can relax and rejuvenate. Each room is elegantly furnished, providing comfort and convenience with modern facilities. Enjoy direct access to the beach, allowing you to soak up the sun, take leisurely strolls on the sandy shores, and dip into the crystal-clear waters anytime you desire. The resort also features a variety of recreational activities, including water sports, yoga sessions, and spa treatments, ensuring you have plenty of options to make the most of your stay.</li><li><h3>Culinary Delights</h3></li><li>Indulge in exceptional dining experiences throughout your trip, with all meals—breakfast, lunch, and dinner—included. Start your day with a sumptuous breakfast buffet featuring both local and international cuisines. For lunch and dinner, savor the flavors of Thailand with a variety of dishes prepared by expert chefs, using fresh, locally sourced ingredients. From seafood feasts to traditional Thai curries and international favorites, every meal is a culinary delight. Special dietary requirements can be accommodated, ensuring that every guest enjoys a satisfying gastronomic experience.</li><li><h3>Best Season to Visit</h3></li><li>The best time to embark on the Thai Beach Escape is during the winter season, when the weather is pleasantly warm and dry. This period offers ideal conditions for beach activities and outdoor exploration. The clear skies and gentle sea breezes create a perfect backdrop for sunbathing, swimming, snorkeling, and other water-based activities. Additionally, winter in Thailand coincides with various local festivals and events, providing an opportunity to experience the vibrant culture and traditions of the region.</li><li><h3>Seamless Transportation</h3></li><li>Your journey begins with a comfortable flight to Phuket, where private transfers will take you directly to your beachfront resort. The transportation arrangements are designed to provide a seamless and stress-free travel experience. Upon arrival, you will be greeted by our friendly staff who will assist you with your luggage and ensure a smooth check-in process. Throughout your stay, optional guided services are available to help you explore the island, discover hidden gems, and enjoy unique local experiences. Whether you choose to relax at the resort or venture out for excursions, your transportation needs will be well taken care of.</li><li><h3>Activities and Excursions</h3></li><li>While the primary focus of the Thai Beach Escape is relaxation, a variety of optional activities and excursions are available to enhance your experience. Explore the vibrant marine life with snorkeling or diving trips, take a boat tour to the nearby Phi Phi Islands, or embark on a cultural tour of Phuket’s historic sites and temples. For adventure seekers, activities such as parasailing, jet-skiing, and zip-lining are also available. In the evenings, unwind with a sunset cruise or enjoy live entertainment at the resort. Every day offers a new opportunity to create lasting memories in this tropical paradise.</li><li><h3>Affordable Luxury</h3></li><li>Starting at NPR 60,000, the Thai Beach Escape is an affordable luxury getaway that promises a memorable and rejuvenating experience. Whether you’re looking to escape the winter chill, celebrate a special occasion, or simply take a break from the routine, this trip offers the perfect opportunity to unwind and recharge in one of the world’s most beautiful beach destinations.</li><li>Immerse yourself in the beauty and tranquility of Thailand’s beaches with the Thai Beach Escape. Book now and prepare for a week of relaxation, adventure, and unforgettable experiences.</li></ul>', ''),
(29, 'Historical India Tour', 'India', 'Culture', 'Explore India’s rich history and culture with visits to Delhi, Agra, Jaipur, and Rajasthan. Experience iconic landmarks like the Taj Mahal and ancient forts. This tour blends historical exploration with cultural immersion.', '90,000', '11 Days', '12', '3-Star Hotels', 'Breakfast, Lunch, Dinner', 'Winter', 'Yes', 'Private Van/Train/Flight', 'packages-73922.jpg', 'yes', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-44547.webp,gallery-60632.jpg', '<ul><li><h3>Accommodation and Meals</h3></li><li>Throughout the tour, you’ll stay in comfortable 3-star hotels, each offering a blend of modern amenities and traditional Indian hospitality. These accommodations are carefully selected for their quality and convenient locations. Enjoy daily breakfast, lunch, and dinner, featuring a variety of Indian and international cuisines. Special dietary requirements can be catered to, ensuring a delightful culinary experience for all.</li><li><h3>Best Season and Transportation</h3></li><li>The best time to undertake this tour is during the winter season, when the weather is cool and pleasant, making it ideal for sightseeing and outdoor activities. The tour’s transportation includes private vans for local travel, ensuring comfort and convenience. Additionally, you’ll experience train travel, offering a unique perspective on the Indian landscape, and flights for longer distances to maximize your time exploring.</li><li><h3>Cultural Immersion and Local Experiences</h3></li><li>The Historical India Tour is designed to offer not only historical insights but also deep cultural immersion. Engage with local communities, participate in traditional crafts workshops, and enjoy cultural performances that showcase India’s diverse heritage. Visit local markets, savor street food, and interact with artisans to gain a deeper understanding of the region’s culture and traditions.</li><li><h3>Affordable Adventure</h3></li><li>Starting at NPR 90,000, this tour provides excellent value for a comprehensive exploration of India’s historical and cultural treasures. Whether you’re a first-time visitor or a seasoned traveler, the Historical India Tour offers a well-rounded experience that highlights the best of India’s past and present.</li><li><h3>Book Your Journey</h3></li><li>Embark on a journey through time with the Historical India Tour. Discover iconic landmarks, experience vibrant cultures, and create memories that will last a lifetime. Book now and prepare to be captivated by the wonders of India.</li></ul>', ''),
(30, 'Maldives Luxury Stay', 'Maldives', 'Beach', 'Indulge in luxury with private overwater villas in the Maldives. Enjoy world-class amenities, pristine beaches, and vibrant marine life. Perfect for a romantic getaway or a tranquil retreat.', '120,000', '7 Days', ' 2', 'Overwater Villa', 'Breakfast, Lunch, Dinner', 'Winter', 'Optional', 'Seaplane/Speedboat', 'packages-8321.avif', 'yes', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-93076.jpg,gallery-35761.jpg,gallery-74096.avif', '<ul><li><h3>A Paradise Retreat: Maldives Luxury Stay</h3></li><li>Immerse yourself in unparalleled luxury and tranquility with our 7-day Maldives Luxury Stay. This exclusive experience is designed for those seeking the ultimate escape from the ordinary, offering a perfect blend of opulence, relaxation, and natural beauty. With a group size limited to just 2 people, it’s the ideal choice for couples seeking a romantic getaway or anyone desiring a serene, private retreat.</li><li><h3>Luxurious Overwater Villas</h3></li><li>Your stay will be in an exquisite overwater villa, a hallmark of Maldivian luxury. These villas are thoughtfully designed to offer the utmost privacy and comfort, featuring spacious living areas, king-sized beds, and floor-to-ceiling windows that frame the stunning ocean views. Step out onto your private deck to bask in the sun, take a dip in the crystal-clear waters directly accessible from your villa, or unwind in your private plunge pool. The villas are equipped with modern amenities, including air conditioning, high-speed internet, a minibar, and a flat-screen TV, ensuring a comfortable and convenient stay.</li><li><h3>World-Class Amenities</h3></li><li>The resort offers a plethora of world-class amenities to enhance your stay. Enjoy access to an infinity pool, a state-of-the-art fitness center, and various recreational facilities. The on-site spa provides a range of treatments, from traditional massages to rejuvenating facials, using premium products to ensure a soothing and revitalizing experience. Whether you prefer a vigorous workout, a leisurely swim, or a pampering spa session, the resort caters to all your needs.</li><li><h3>Gourmet Dining Experiences</h3></li><li>Indulge in gourmet dining experiences that celebrate both local and international cuisines. With all meals included—breakfast, lunch, and dinner—you can savor a variety of dishes prepared by skilled chefs. The resort features multiple dining venues, each offering a unique ambiance and culinary style. Enjoy fresh seafood, flavorful Maldivian specialties, and international favorites, all made with the finest ingredients. For a truly memorable experience, opt for a private dining setup on the beach or your villa deck, perfect for romantic dinners under the stars.</li><li><h3>Vibrant Marine Life</h3></li><li>The Maldives is renowned for its vibrant marine life, and your stay offers numerous opportunities to explore the underwater world. Snorkeling and diving excursions are available, allowing you to discover colorful coral reefs, exotic fish, and other marine creatures. The resort’s dive center provides all necessary equipment and guidance, catering to both beginners and experienced divers. For those who prefer to stay above water, glass-bottom boat tours offer a unique perspective of the underwater wonders.</li><li><h3>Pristine Beaches and Water Activities</h3></li><li>The resort’s pristine beaches provide the perfect backdrop for relaxation and water activities. Lounge on the soft white sands, take a refreshing swim in the turquoise lagoon, or engage in water sports such as kayaking, paddleboarding, and windsurfing. The calm, clear waters and gentle waves make these activities enjoyable and accessible for all skill levels.</li></ul>', ''),
(31, 'Sri Lankan Heritage Tour', 'Sri Lanka', 'Culture', ' Discover Sri Lanka’s cultural treasures with visits to ancient cities, lush landscapes, and historic landmarks. Experience the island’s vibrant culture, including temples, palaces, and colonial architecture.', '75,000', '9 Days', '10', '3-Star Hotels', 'Breakfast, Lunch, Dinner', 'Winter', 'Yes', 'Private Van/Train', 'packages-85443.jpg', 'yes', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-9420.jpg,gallery-63062.jpg', '<ul><li><strong>Day 1:</strong> Arrival in Colombo.</li><li><strong>Day 2:</strong> Drive to Sigiriya.</li><li><strong>Day 3:</strong> Explore Sigiriya and Dambulla.</li><li><strong>Day 4:</strong> Drive to Kandy.</li><li><strong>Day 5:</strong> Kandy sightseeing.</li><li><strong>Day 6:</strong> Drive to Nuwara Eliya.</li><li><strong>Day 7:</strong> Drive to Galle.</li><li><strong>Day 8:</strong> Leisure day in Galle.</li><li><strong>Day 9:</strong> Return to Colombo. Departure.</li></ul>', ''),
(32, 'Everest Base Camp Trek', 'Nepal', 'Trekking', 'Experience the ultimate adventure with the Everest Base Camp Trek. Hike through rugged terrain, cross high-altitude passes, and enjoy stunning views of Mount Everest. This trek offers an unparalleled blend of adventure and natural beauty.', '120,000', '15 Days', '10', 'Tea Houses', 'Breakfast, Lunch, Dinner', 'Spring, Autumn', 'Yes', 'Private Van/Flight', 'packages-22562.jpg', 'yes', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-59927.jpg,gallery-59882.webp,gallery-73507.jpeg', '<ul><li><strong>Day 1:</strong> Arrival in Kathmandu.</li><li><strong>Day 2:</strong> Fly to Lukla. Trek to Phakding.</li><li><strong>Day 3:</strong> Trek to Namche Bazaar.</li><li><strong>Day 4:</strong> Acclimatization day in Namche.</li><li><strong>Day 5:</strong> Trek to Tengboche.</li><li><strong>Day 6:</strong> Trek to Dingboche.</li><li><strong>Day 7:</strong> Acclimatization day in Dingboche.</li><li><strong>Day 8:</strong> Trek to Lobuche.</li><li><strong>Day 9:</strong> Trek to Everest Base Camp.</li><li><strong>Day 10:</strong> Return to Lobuche.</li><li><strong>Day 11:</strong> Trek to Pheriche.</li><li><strong>Day 12:</strong> Trek to Namche Bazaar.</li><li><strong>Day 13:</strong> Trek to Lukla.</li><li><strong>Day 14:</strong> Fly back to Kathmandu.</li><li><strong>Day 15:</strong> Departure.</li></ul>', ''),
(33, 'Kathmandu Valley Cultural Tour', 'Nepal', 'History', 'Explore the rich cultural heritage of the Kathmandu Valley, including historic temples, palaces, and traditional crafts. Visit UNESCO World Heritage Sites in Kathmandu, Patan, and Bhaktapur.', '40,000', '6 Days', '12', '3-Star Hotels', 'Breakfast, Lunch, Dinner', 'Spring, Autumn', 'Yes', 'Private Van', 'packages-67789.jpeg', 'no', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-17760.jpg,gallery-29712.jpg', '<ul><li><strong>Day 1:</strong> Arrival in Kathmandu.</li><li><strong>Day 2:</strong> Visit Kathmandu Durbar Square and Swayambhunath Stupa.</li><li><strong>Day 3:</strong> Explore Patan Durbar Square and the Golden Temple.</li><li><strong>Day 4:</strong> Visit Bhaktapur Durbar Square and Nagarkot.</li><li><strong>Day 5:</strong> Day trip to Dakshinkali Temple and Patan Museum.</li><li><strong>Day 6:</strong> Departure.</li></ul>', ''),
(34, 'Chitwan Wildlife Safari', 'Nepal', 'Wildlife', ' Discover the rich biodiversity of Chitwan National Park. Enjoy jungle safaris, canoe rides, and bird watching while searching for Bengal tigers, one-horned rhinos, and diverse wildlife.', '50,000', '4 Days', '8', 'Jungle Lodge', 'Breakfast, Lunch, Dinner', 'Winter, Spring', 'Yes', 'Private Van', 'packages-72032.jpg', 'yes', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-18001.jpg,gallery-39531.jpg', '<ul><li><strong>Day 1:</strong> Arrival in Chitwan. Transfer to lodge.</li><li><strong>Day 2:</strong> Jungle safari in Chitwan National Park.</li><li><strong>Day 3:</strong> Canoe ride and bird watching. Visit Elephant Breeding Center.</li><li><strong>Day 4:</strong> Departure.</li></ul>', ''),
(35, 'Lumbini Heritage Tour', 'Nepal', 'Culture', 'Visit the birthplace of Siddhartha Gautama, the Buddha, in Lumbini. Explore ancient ruins, sacred gardens, and important monasteries in this UNESCO World Heritage Site.', '30,000', '3 Days', '10', '3-Star Hotels', 'Breakfast, Lunch, Dinner', 'Winter', 'Yes', 'Private Van/Flight', 'packages-75710.jpg', 'no', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-62069.jpg,gallery-14201.jfif', '<ul><li><strong>Day 1:</strong> Arrival in Lumbini.</li><li><strong>Day 2:</strong> Visit Lumbini’s sacred garden, Maya Devi Temple, and monasteries.</li><li><strong>Day 3:</strong> Departure.</li></ul>', ''),
(36, 'Pokhara Lakeside Retreat', 'Nepal', 'Adventure', 'Enjoy a relaxing stay by Phewa Lake in Pokhara. Take boat rides, visit the Peace Pagoda, and unwind in the serene environment with beautiful lake and mountain views.', '45,000', '5 Days', '6', 'Lakeside Hotel', 'Breakfast, Lunch, Dinner', 'Spring, Autumn', 'Optional', 'Private Van/Flight', 'packages-40986.jpg', 'no', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-74884.jpg,gallery-23782.jfif', '<ul><li><h3>Tranquil Escape: Pokhara Lakeside Retreat</h3></li><li>Experience the serene beauty of Pokhara with our 5-day Lakeside Retreat. Nestled by the picturesque Phewa Lake, this retreat offers an idyllic escape from the hustle and bustle of daily life. Ideal for small groups of up to six people, the Pokhara Lakeside Retreat is perfect for families, friends, or couples looking to relax and rejuvenate in a stunning natural setting.</li><li><h3>Lakeside Hotel Accommodation</h3></li><li>Your stay will be at a charming lakeside hotel that combines comfort with breathtaking views. The hotel rooms are designed to maximize your enjoyment of the surrounding landscape, featuring large windows and private balconies overlooking Phewa Lake and the majestic Annapurna mountain range. Each room is well-appointed with modern amenities, including air conditioning, high-speed internet, and flat-screen TVs, ensuring a comfortable and convenient stay. The hotel’s tranquil garden and lakeside seating areas provide perfect spots to unwind and soak in the serene atmosphere.</li><li><h3>Culinary Delights</h3></li><li>All meals—breakfast, lunch, and dinner—are included in your stay, offering a delightful culinary journey. Begin your day with a hearty breakfast buffet, featuring a mix of local and international dishes. Lunch and dinner are served in the hotel’s restaurant, which specializes in Nepalese cuisine along with a variety of international options. Fresh, locally sourced ingredients are used to create flavorful and nutritious meals. For a unique dining experience, enjoy an alfresco meal by the lake, where you can savor delicious food while taking in the panoramic views.</li><li><h3>Activities and Experiences</h3></li></ul>', '<p><strong>Inclusions:</strong></p><ul><li><strong>Accommodation:</strong> 4 nights at a lakeside hotel with stunning views of Phewa Lake and the Annapurna range.</li><li><strong>Meals:</strong> All meals included (breakfast, lunch, and dinner).</li><li><strong>Transportation:</strong> Private van or scenic flight to and from Pokhara.</li><li><strong>Activities:</strong><ul><li>Boat ride on Phewa Lake.</li><li>Visit to the World Peace Pagoda, Devi\'s Fall, and Gupteshwor Cave.</li></ul></li><li><strong>Amenities:</strong> Modern hotel amenities including air conditioning, high-speed internet, and flat-screen TVs.</li><li><strong>Guided Service:</strong> Optional guided services for hikes and local exploration.</li></ul><p><strong>Exclusions:</strong></p><ul><li><strong>International Flights:</strong> Airfare to and from Nepal.</li><li><strong>Personal Expenses:</strong> Personal items, souvenirs, and other non-included personal costs.</li><li><strong>Travel Insurance:</strong> Comprehensive travel insurance.</li><li><strong>Visa Fees:</strong> Nepal entry visa fees.</li><li><strong>Additional Meals:</strong> Any meals and drinks not specified in the itinerary.</li><li><strong>Tips and Gratuities:</strong> Tips for guides, hotel staff, and other service providers.</li><li><strong>Optional Activities:</strong> Any additional activities or excursions not mentioned in the itinerary.</li></ul>'),
(37, 'Upper Mustang Expedition', 'Nepal', 'Adventure', 'Discover the remote and mystical Upper Mustang, a hidden gem with ancient Tibetan culture and stunning landscapes. Explore ancient monasteries, barren landscapes, and unique traditions in this restricted area.', '150,000', '14 Days', '6', 'Guesthouse', 'Breakfast, Lunch, Dinner', 'Spring, Autumn', 'Yes', ' Private Van/Flight', 'packages-99429.webp', 'no', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-96174.jpg,gallery-83058.jpg', '<ul><li><strong>Day 1:</strong> Arrival in Kathmandu.</li><li><strong>Day 2:</strong> Fly to Pokhara.</li><li><strong>Day 3:</strong> Fly to Jomsom. Trek to Kagbeni.</li><li><strong>Day 4:</strong> Trek to Chele.</li><li><strong>Day 5:</strong> Trek to Syangboche.</li><li><strong>Day 6:</strong> Trek to Geling.</li><li><strong>Day 7:</strong> Trek to Charang.</li><li><strong>Day 8:</strong> Trek to Lo Manthang.</li><li><strong>Day 9:</strong> Explore Lo Manthang.</li><li><strong>Day 10:</strong> Return trek to Geling.</li><li><strong>Day 11:</strong> Trek to Jomsom.</li><li><strong>Day 12:</strong> Fly to Pokhara.</li><li><strong>Day 13:</strong> Fly back to Kathmandu.</li><li><strong>Day 14:</strong> Departure.</li></ul>', ''),
(38, 'Bardia National Park Safari', 'Nepal', 'Wildlife', 'Explore Bardia National Park’s diverse wildlife on this exciting safari. Spot rare species such as the Bengal tiger, one-horned rhino, and various bird species in their natural habitat.', '60,000', '5 Days', '8', 'Jungle Lodge', 'Breakfast, Lunch, Dinner', 'Winter, Spring', 'Yes', 'Private Van/Flight', 'packages-92095.jpg', 'no', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-90338.jpg,gallery-27157.jpg', '<ul><li><strong>Day 1:</strong> Arrival in Bardia. Transfer to lodge.</li><li><strong>Day 2:</strong> Jungle safari.</li><li><strong>Day 3:</strong> Canoe ride and bird watching.</li><li><strong>Day 4:</strong> Visit Tharu Village.</li><li><strong>Day 5:</strong> Departure.</li></ul>', ''),
(39, 'Trek to Langtang Valley', 'Nepal', 'Adventure', ' Explore the beautiful Langtang Valley, known for its stunning landscapes and Tibetan culture. Trek through lush forests, charming villages, and rugged terrain, and visit the Langtang Glacier.', '70,000', '10 Days', '8', 'Tea Houses', 'Breakfast, Lunch, Dinner', 'Spring, Autumn', 'Yes', 'Private Van/Flight', 'packages-91855.jpg', 'no', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-50324.jfif,gallery-97983.jpeg', '<ul><li><strong>Day 1:</strong> Arrival in Kathmandu.</li><li><strong>Day 2:</strong> Drive to Syabrubesi.</li><li><strong>Day 3:</strong> Trek to Lama Hotel.</li><li><strong>Day 4:</strong> Trek to Langtang Village.</li><li><strong>Day 5:</strong> Trek to Kyanjin Gompa.</li><li><strong>Day 6:</strong> Explore Kyanjin Gompa.</li><li><strong>Day 7:</strong> Return trek to Lama Hotel.</li><li><strong>Day 8:</strong> Drive back to Kathmandu.</li><li><strong>Day 9:</strong> Leisure day in Kathmandu.</li><li><strong>Day 10:</strong> Departure.</li></ul>', ''),
(40, 'Gosaikunda Lake Trek', 'Nepal', 'Adventure', 'Trek to the sacred Gosaikunda Lake, a revered pilgrimage site for Hindus and Buddhists. Enjoy stunning mountain views and the serene beauty of the high-altitude lake.', '55,000', '8 Days', '8', 'Tea Houses', 'Breakfast, Lunch, Dinner', 'Spring, Autumn', 'Yes', 'Private Van/Flight', 'packages-20993.jpeg', 'no', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.585726163742!2d85.35409947497476!3d27.699196225851782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a266b342bc5%3A0x73bbfa829a89af1b!2sTribhuvan%20International%20Airport!5e0!3m2!1sen!2snp!4v1721799183145!5m2!1sen!2snp', 'gallery-81984.jpg,gallery-39250.webp', '<ul><li><strong>Day 1:</strong> Arrival in Kathmandu.</li><li><strong>Day 2:</strong> Drive to Dhunche.</li><li><strong>Day 3:</strong> Trek to Cholangpati.</li><li><strong>Day 4:</strong> Trek to Gosaikunda Lake.</li><li><strong>Day 5:</strong> Explore Gosaikunda Lake.</li><li><strong>Day 6:</strong> Return trek to Cholangpati.</li><li><strong>Day 7:</strong> Trek to Dhunche.</li><li><strong>Day 8:</strong> Drive back to Kathmandu. Departure.</li></ul>', '');

-- --------------------------------------------------------

--
-- Table structure for table `packages_inquiries`
--

CREATE TABLE `packages_inquiries` (
  `id` int(115) NOT NULL,
  `packages` varchar(155) NOT NULL,
  `name` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `phone` varchar(155) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(155) NOT NULL DEFAULT 'processing',
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `destination` varchar(155) NOT NULL,
  `client_img` varchar(155) NOT NULL,
  `client_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `destination`, `client_img`, `client_message`) VALUES
(7, 'Sarah Johnson', ' Everest Base Camp', 'testimonial-20714.jfif', '\"Visit Abroad Travels made our trek to Everest Base Camp unforgettable. The guides were knowledgeable and the services exceptional. We felt safe and well-cared for throughout the journey.\"'),
(8, 'Michael Lee', 'Chitwan National Park', 'testimonial-33747.jfif', '\"Our wildlife safari in Chitwan National Park was a thrilling adventure. The team ensured we saw everything we hoped for and more. Highly recommend their services!\"'),
(9, 'Emma Davis', ' Kathmandu Valley', 'testimonial-80505.jfif', '\"Exploring the cultural heritage of Kathmandu Valley with Visit Abroad Travels was an enriching experience. Their attention to detail and personalized approach made our trip truly special.\"'),
(10, 'John Smith', ' Annapurna Circuit', 'testimonial-84064.jfif', '\"Annapurna Circuit trek with Visit Abroad Travels was incredible. The scenery was breathtaking, and the support from the team made it a smooth and enjoyable experience.\"');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL,
  `user_type` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(3, 'birathnagar', 'admin@gmail.com', 'admin123', 'admin'),
(4, 'ktm', 'ktm@gmail.com', 'ktm123', ''),
(10, 'Gobind Das', 'gobind@test.com', 'gobind', 'Choose the role'),
(11, 'santosh', 'santosh@gmail.com', '123', 'editor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquires`
--
ALTER TABLE `inquires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itineraries`
--
ALTER TABLE `itineraries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages_inquiries`
--
ALTER TABLE `packages_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `inquires`
--
ALTER TABLE `inquires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `itineraries`
--
ALTER TABLE `itineraries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `packages_inquiries`
--
ALTER TABLE `packages_inquiries`
  MODIFY `id` int(115) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `itineraries`
--
ALTER TABLE `itineraries`
  ADD CONSTRAINT `itineraries_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
