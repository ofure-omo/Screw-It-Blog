-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2020 at 03:09 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `screw-it`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `blog_id` int(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `body` mediumtext NOT NULL,
  `body2` text,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(100) NOT NULL,
  `main_image` tinytext,
  `second_image` tinytext,
  `third_image` tinytext,
  `layout` tinyint(4) NOT NULL,
  `published` varchar(100) NOT NULL DEFAULT 'published',
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`blog_id`, `user_id`, `title`, `body`, `body2`, `date_posted`, `category`, `main_image`, `second_image`, `third_image`, `layout`, `published`, `slug`) VALUES
(279, 20, 'DIY Boho Pillow', 'I\'m a huge fan of mixing black and white geometrics with subtle blush tones in an otherwise light and airy white interior.\r\nThere\'s something that feels so fresh and feminine, yet grounded about the whole combination. \r\nI was making a Target run recently, and took a lap through their new home section [which btw is totally styled, curated and straight up awesome] and came across a fantastic black and white Kilim-inspired table runner.  Ken and I are not table-runner-people, but I liked it so much, I bought it anyway with this idea of making a long lumbar pillow for our bed. The black and white pattern was the perfect juxtaposition to our blush pillow cases and the fringe at each end of the table runner easily serve as the brush trim on the pillow ends. \r\nHere\'s the tutorial on how I made the pillow in case you want to make one for your own home. And P.S. the table runner is on SALE at Target right now, so why not?!', '1. Cut off the two ends of your table runner (leaving 3/4\" seam allowance) at a location where when the two raw sides come together they look good matching up together. These two pieces will be your pillow face. Set aside remaining table runner fabric until Step 4.\r\n\r\n2. Pin the wrong sides of the two pieces forming the pillow face together.\r\n\r\n3. Sew the two pieces together to create one long pillow face with fringe edges.\r\n\r\n4. Cut out the remaining table runner piece down to the length of your table runner including the fringe. In this case, the runner including the fringe is 33\" long. Thus, the back piece is also cut to 33\" long.', '2020-04-20 08:05:53', 'DECORATE', 'views/images/IMG_3049.jpg', 'views/images/IMG_30962.jpg', 'views/images/IMG_31451.jpg', 1, 'published', NULL),
(280, 20, 'DIY Lampshade', 'If you&#39;ve missed the memo on cane, it&#39;s time to catch up on the latest trend that has stolen our hearts. This incredibly versatile material can easily be cut, shaped, and attached to just about any hard surface to give it a modern, beachy, boho vibe in seconds. (Need proof? Check out this table, this cabinet, this console table, and this headboard. DIYs for all to try.)&#13;&#10;&#13;&#10;For this project, we wanted to create a shade for a standing lamp, using lampshade rings for the frame. You could also use a shade you already own as the base.', 'Step 1&#13;&#10;To begin, measure the diameter and height of your frame. Add 2 inches to both measurements, then cut a piece of cane webbing to size.&#13;&#10;&#13;&#10;Step 2&#13;&#10;Using weights or heavy books, lay out the webbing as flat as possible. Starting with one end of the frame, use your hot glue gun to adhere sections of the webbing to the frame around 2 to 3 inches at a time.&#13;&#10;&#13;&#10;Step 3&#13;&#10;Measure a length of raffia ribbon long enough to cover the diameter of the shade and add on a couple of inches. Unravel the ribbon and fold in half.&#13;&#10;&#13;&#10;Using the hot glue gun, add a little glue to the edge of the shade. Press the inside of the fold line against the edge of the shade so that one side covers the front and the other side covers the back/inside of the shade. If needed, add glue to secure the ribbon on both sides.&#13;&#10;&#13;&#10;Continue around the shade at both ends to create a neat edge. And, you&#39;re done!', '2020-02-03 11:22:46', 'RENOVATE', 'views/images/0f41d9cd79ae4162bd7eb3a2a65dfd27.jpg', 'views/images/64db8903386944a294b6bca957458b13.jpg', 'views/images/5124e3e37f0e48d3938f9092c8b3f1bb.jpg', 1, 'published', NULL),
(281, 20, 'DIY House Shelf', 'I&#39;m always looking for bathroom storage, my various lotions and potions seem to keep breeding and my cupboards are now at capacity! I decided to make some simple shelving to organise and display some of my favourite products. I think this easy house shaped shelving is cute and practical to boot.. who can argue with that? &#13;&#10;&#13;&#10;You&#39;ll need:&#13;&#10;&#13;&#10;wood&#13;&#10;saw or mitre saw&#13;&#10;tape measure&#13;&#10;hammer&#13;&#10;small nails&#13;&#10;wood glue&#13;&#10;paint', 'Start off by measuring out the lengths you want, mark with a pencil and saw. I cut five 30cm pieces for my shelf. &#13;&#10;&#13;&#10;Next we want to find the rough angle for the roof joint. take two of your wood lengths and point them together to make the roof shape (as shown above.) hold a piece of wood over where they meet and draw two lines down each side- this is the angle you cut for a flush fit.&#13;&#10;&#13;&#10;If you&#39;re not very experienced at cutting grab a handy helper. I find bribery with cakes the easiest way to snag an assistant.&#13;&#10;&#13;&#10;Once dry you can paint or stain the wood. my bathroom is top to bottom white so I kept the theme going and gave mine a lick of basic emulsion. follow with a quick layer of varnish if needed, leave to dry and your shelf is finished.. hurrah!', '2020-02-05 11:27:20', 'CREATE', 'views/images/DIY SHELF PROJECT.jpg', 'views/images/DIY-wood-house-shelf-decor-v1.jpg', 'views/images/diy-wood-house-shelf-v2.jpg', 1, 'published', NULL),
(282, 20, 'DIY Calendar', 'Itâ€™s a new year which for many of us means itâ€™s time for a new calendar! This DIY desktop daytimer (say that 5 times fast!) takes its styling from the flip-clock beauties of yesteryear, adding a retro touch to the modern workspace.  Itâ€™s a perpetual desk calendar too which means make it once, and youâ€™ll be able to keep tabs on the day year after year. Get the how-to below!', 'Paint the wooden cubes and rectangular blocks completely black with acrylic paint.&#13;&#10;&#13;&#10;Once the black paint is completely dry centre the 1â€³ white number stickers on each face of the cubes. Cube #1 will have numbers 1, 2, 3, 4, 5, 6. Cube #2 will have numbers: 0, 1, 2, 3, 7, 8.&#13;&#10;&#13;&#10;Once the cube numbers are on, add the month names using the 1/4â€³ vinyl letters to the skinny rectangles. There are 12 sides so one for each month!&#13;&#10;&#13;&#10;Last but not least, peel the backing off the bottom flap and fold up along the inside back. Place the blocks inside, set to the current month and day, and youâ€™re in business!', '2020-03-03 11:32:08', 'DECORATE', 'views/images/straight-shot-1-of-1-12.jpg', 'views/images/calendar2.jpg', 'views/images/DSC01443.jpg', 1, 'published', NULL),
(283, 20, 'DIY Decorative Plates', 'With lockdown in full swing, I thought I&#39;d take the time to get to work on a DIY plate wall project that Iâ€™ve had dancing around in my head for awhile involving thrift shop plates and blue paint. Inspired by Japanese ceramics, I used a combination of 3 â€œpaintingâ€ techniques (detailed below) to create a cohesive plate grouping that conjures the look of a curated vintage plate collection.&#13;&#10;&#13;&#10;Materials:&#13;&#10;&#13;&#10;10-12 white, round mix-and-match plates in various sizes. I picked up mine up at a local thrift store for a total of $7!&#13;&#10;Adhesive stencils + fine tip oil-based paint pen in blue&#13;&#10;Cardstock roughly 3â€³ x 10â€³ in size&#13;&#10;Adhesive silk screens + high gloss acrylic paint in indigo + foam block or pouncer&#13;&#10;10-12 gold plate hangers + nails for hanging', 'Use adhesive stencils and ceramic paint pens to create geometric designs on the plates. Simply apply the stencil to the desired location on the plate and press down firmly to adhere. Use the paint pen to fill in the stencilâ€™s design. Allow paint to set a few minutes before removing the stencil to avoid smudging.&#13;&#10;&#13;&#10;Linear patterns can be achieved with a strip of cardstock and a ceramic paint pen. Use the cardstock as a guide to create clean, straight lines radiating out from the center.&#13;&#10;&#13;&#10;Install on the Wall. After adorning the plates to your heartâ€™s desire, allow them to dry completely, and hang on the wall. Clip a plate hanger to each, and arrange them on the floor first to sort out the arrangement before transferring onto the wall. Space the plates roughly 2-3â€³ apart in an asymmetric cluster. The paint will air cure over 21 days becoming semi-permanent and wipeable. Plates are for decorative purposes only.', '2020-02-13 11:41:00', 'DECORATE', 'views/images/Geometric-Pattern-Technique.jpg', 'views/images/IMG_0839.jpg', 'views/images/plate-wall-diy-francois-et-moi2.png', 1, 'published', NULL),
(284, 20, 'DIY Shelves', 'If you are looking for more wall storage options for your bathroom, you are not alone! We are always on the hunt for simple, stylish, and affordable shelving. Today we are delighted to show you just how simple it is to make a hanging wall shelf. You could even make this a multiple shelf DIY as well. We love the look of natural cotton cording (macrame cord) and natural wood. It&#39;s timeless, while giving a look of Scandinavian design as well.&#13;&#10;&#13;&#10;Adding some fresh greenery, candles, and pretty beauty products to this hanging shelf will elevate the look of the bathroom ... and give you more storage options, too!&#13;&#10;&#13;&#10;You will only need some basic materials for this project, so let&#39;s get started.', 'Step 1&#13;&#10;Trim wood to appropriate size. The shelf featured here is 5.5 inches x 17 inches. Sand edges. Drill holes using appropriate size drill bit.&#13;&#10;&#13;&#10;Step 2&#13;&#10;Lightly sand drilled holes.&#13;&#10;&#13;&#10;Step 3&#13;&#10;Cut two pieces of cording, 3 to 4 feet. Thread one piece up through the holes on the left side, and then the other cord through the holes on the right, pulling the cording up from the bottom.&#13;&#10;&#13;&#10;Step 4&#13;&#10;Pull the left and right sides of the cording to meet evenly at the top. Loop the four pieces of cording through the metal ring.', '2020-02-22 11:44:18', 'CREATE', 'views/images/shelves_3.jpg', 'views/images/shelves_4.jpg', 'views/images/shelves_1.jpg', 1, 'published', NULL),
(286, 20, 'Circular Shelves', 'Round shelving is all over our Pinterest feeds, but you probably wouldn&#39;t consider it as a potential DIY project â€” because wood isn&#39;t the easiest to bend, right? However, we&#39;ve come up with the perfect solution for making a circular frame using wooden hoops that gives a nod to minimal Scandinavian design, without breaking the bank. If you&#39;re looking for a stylish shelving project that requires very little woodwork skill, this trendy DIY may be just the ticket.', 'Step 1&#13;&#10;Unscrew the embroidery hoop frame and remove the inner ring. (Repeat on the remaining embroidery hoops.)&#13;&#10;&#13;&#10;Step 2&#13;&#10;Run wood glue around the frame of one of the inner hoops.&#13;&#10;&#13;&#10;Step 3&#13;&#10;Take a second inner hoop and press firmly onto the glue to stick them together and create a double hoop.&#13;&#10;&#13;&#10;Step 4&#13;&#10;Use hand clamps to hold the rings together as the glue dries. Repeat Step 2 and Step 3 with the remaining hoops (so you&#39;ll have three double hoops in total.)', '2020-02-28 11:51:44', 'Choose a category', 'views/images/e32d4c8535ef4baea1618598971d609f.jpg', 'views/images/36202f5baac04f42833c2241de303364.jpg', 'views/images/5f6be6ef5337497eb5e8e3096aa69f30.jpg', 1, 'published', NULL),
(287, 20, 'Revamp your stairs', 'Here&#39;s a clever way to add color and pattern to your home: &#34;decorate&#34; your stairs. Yes, stairs. In a few simple and affordable steps, you can add a pop of personality with removable wallpaper.&#13;&#10;&#13;&#10;To get a faux tile look, removable wallpaper is a smart (and budget-friendly) solution. And while you can certainly buy patterned peel-and-stick stair risers that are precut, for this tutorial we found a way to make it less expensive and pretty darn easy. This DIY will set you back around Â£30 â€” that&#39;s it!! Let&#39;s get started ...', 'Step 1: Measure the stair risers.&#13;&#10;Measure and check each riser (they should be the same size, but you will want to double check). The risers in this tutorial were 39.5 inches by 4.85 inches.&#13;&#10;&#13;&#10;Step 2: Measure out dimensions onto the removable wallpaper.&#13;&#10;First we measured the front of wallpaper to check that the lines were straight on the front pattern.&#13;&#10;&#13;&#10;Step 3: Cut the wallpaper with an X-ACTO knife.&#13;&#10;When cutting the wallpaper, be sure to cut on top of a piece of cardboard, foam core, or a self-healing mat.&#13;&#10;&#13;&#10;Step 4: Peel and stick.&#13;&#10;Now it is time to adhere the peel-and-stick wallpaper pieces to the stair riser. Peel off the backing and line up the piece on corner of riser. The removable wallpaper is forgiving, so if you need to straighten the paper, it is all good!', '2020-02-26 12:48:28', 'RENOVATE', 'views/images/stairs_2.jpg', 'views/images/stairs_3.jpg', 'views/images/stairs_1.jpg', 1, 'published', NULL),
(288, 20, 'DIY Floating Media Cabinet', 'With us spending more time in the house (thanks lockdown!) We knew we needed to address the toy storage (or lack their of!) in our living room. Weâ€™re a one-hangout-space-household, so when we hang out as a family itâ€™s in this room. This room is also the first space you walk into from the front foyer, so this area needs places to hide all our crap, I meanâ€¦stuff when people come over. Needless to say, this old train cart, though ruggedly handsome, just wasnâ€™t cutting it. Iâ€™m a little embarrassed showing you what this used to look like, but here it is!', 'We centered the cabinet between the archway and the corner and wall-mounted it using the recommended wall brackets from Ikea.  Itâ€™s installed 6.25â€³ above the floor at a height of 31.5â€³ (33â€³ once the top is installed). To determine the height, I taped out the TV placement with washi tape, and looked at height specifications for other similar media consoles for sale around the web. Also, being that itâ€™s right next to the front door and coat closet, it also functions as the key drop + mail catch, this was another consideration for height placement.&#13;&#10;&#13;&#10;In terms of installing the cabinet, we just followed the enclosed instructions. Though itâ€™s a two person operation, it wasnâ€™t necessarily difficult. The only tricky part was getting the drawers to catch on the slide mechanisms.&#13;&#10;&#13;&#10;We left a 9â€³ leap between the cabinet and the bottom of the TV. Iâ€™d like to tell you I went with the recommended Industry Standard for the height of the TV, but honestly, this was the height that just felt right for TV watching, and looked proportionally â€œrightâ€ on the wall too.', '2020-04-17 11:55:02', 'RENOVATE', 'views/images/media-top-1-of-1-4.jpg', 'views/images/media-top-1-of-1-2.jpg', 'views/images/console-1-of-1-15.jpg', 1, 'published', NULL),
(289, 20, 'DIY Draw dividers', 'I love to keep organised, but sometimes it can be hard to find something that is both practical yet still looks good! After searching endlessly for draw dividers that fit without breaking the bank, I was almost giving up when I realised -  why not make my own!&#13;&#10;&#13;&#10;This is a quick and easy DIY hack to bring some order back into your life.&#13;&#10;&#13;&#10;Start by measuring the internal dimensions of the drawer you are organising (width, depth, and height). Be sure to get exact measurements here; you want the organisers to fit snug so they stand up straight and donâ€™t move as you open and close the drawer.&#13;&#10;&#13;&#10;The last step is to assemble and insert the drawer divider. Find the center of each rectangle and cut a slit half-way into the board. Then, insert one rectangle into the other and adjust your cuts (as necessary) so the two rectangles sit at the same height.', '', '2020-02-09 13:00:50', 'CREATE', 'views/images/1a2e11a166a54f80804a286b72be1af3.jpg', 'views/images/aebd5b42ff904b4293613f0e4b2cbe4d.jpg', 'views/images/d2b2007973a2404785ce8d38dc4ec774.jpg', 2, 'published', NULL),
(290, 20, 'DIY Sofa Table', 'After having moved into a newer, yet smaller space I was looking for ways to be smarter about the layout. It got me thinking, do you have to have two freestanding end tables with a table lamp on each flanking your sofa?&#13;&#10;&#13;&#10;No! Of course not - with this simple hack you can have your cake (or tea, or biscuits - I wont judge!) without cramming your room full of side tables. What&#39;s better, is you can decorate it how you like!&#13;&#10;&#13;&#10;Step 1. Use circular saw to cut your board into three pieces (Or if you donâ€™t have a saw, ask the hardware store to cut your board for you). The width and height of your sofaâ€™s arm will dictate the size of the cuts. Our sofa arms are 8â€³ wide and 24â€³ tall, so the board sizes I used were:&#13;&#10;&#13;&#10;Top: 9.5â€³ board with 45 degree angle cuts on each end&#13;&#10;Side: 8â€³ board with a 45 degree cut on one end only&#13;&#10;Side: 4â€³ board with a 45 degree cut on one end only&#13;&#10;&#13;&#10;Step 2. Sand all faces of the boards until smooth.&#13;&#10;&#13;&#10;Step 3. Use Gorilla Glue to attach the angled edge on the 8â€³ board to one of the angle edges on the 9.5â€³ board. Then attach the angled edge on the 4â€³ board to the other angled edge on the 9.5â€³ board. Allow glue to dry overnight.&#13;&#10;&#13;&#10;Note: Gorilla Glue expands as it dries, so make sure to wipe off any excess before you leave to dry.', '', '2020-01-17 13:12:10', 'CREATE', 'views/images/IMG_79031.jpg', 'views/images/IMG_8333.jpg', 'views/images/DRINK-PERCH-1-of-1.jpg', 2, 'published', NULL),
(292, 17, 'DIY Candles: The Ultimate Guide', 'Candles are something I like to keep around the house no matter the season for their scent, ambiance and air-purifying properties. My love for them runs so deep that I\'ve even learned how to make them! And over the years, I\'ve made ALOT of candles. I find the process satisfying and fun, so here are my 5 most popular candle DIY projects. Coincidentally, there\'s a project for every season!\r\n1. Essential Oil Holiday Candle with Printable Label\r\nThere\'s something about the clean, yet still festive scent of winter balsam trees that I\'ve been craving as the weather turns cold. I kept meaning to pick up a winter balsam essential oil candle (which of course I spaced), so finally I decided just to make one. A no-brainer of course!\r\nThe candle\'s scent is mostly pine needle with orange added for sweetness and Wyndmere\'s Forest Retreat Blend added to give depth and complexity. When picking out your essential oils, make sure to use pure essential oils and not essential oils in a carrier oil. They\'re a bit more expensive, but the scent is much more potent and just all around a better quality. \r\nI\'m using Wyndmere here, but Whole Foods also has a great organic blend too. I love the scent I ended up with, and have been burning it like crazy lately!\r\n\r\nI decided to go with soy wax with this one  because A. the wax is white which I wanted for this candle, and B. it\'s way easier to clean up in your kitchen than beeswax. Seriously. Way. Easier. If natural beeswax is your jam, check out the beeswax tea lights tutorial further down in this post.\r\n\r\nI made this one for us, but of course these candles would make great gifts too!\r\n\r\nMaterials:&#13<br/>Glass Tumbler. Mine is from a thrift shop.&#13<br/>3 Cups of soy wax flakes or double the volume of your candle vessel&#13<br/>Lead free wicks&#13<br/>Wood dowel&#13<br/>Pine Needle, Orange and Forest Retreat Essential Oils&#13<br/>Old sauce pan&#13<br/>Larger pan for double boiler&#13<br/>&#13<br/>1. Bring 2 inches of water in a saucepan to a simmer. Place soy wax flakes in a slightly smaller saucepan or glass bowl and place over the simmering water in the larger saucepan, creating a double boiler. Stir the flakes every few minutes until completely melted. Once melted, remove the wax from the heat, dip the wick’s metal clip in the wax and press to the bottom center of the glass candle vessel with a wood dowel. Once the wick is affixed, wrap the top portion of the wick around the wood dowel and rest the wood dowel on the opening of the vessel.\r\n2. By this time, the wax should have had a few minutes to cool down, and is ready to accept the essential oils. If essential oils are added too soon, they\'ll burn.\r\nAdd about 100 essential oil drops in total (to make them super potent and delicious!) and give the wax a stir. My breakdown between the 3 oils was as follows:\r\n65 Pine Needle Drops\r\n20-25 Orange Drops\r\n10-15 Forest Retreat Drops depending on your preference\r\n>Pour the scented wax into the vessel and allow to set for 24 hours in a relatively warm spot away from commotion to avoid cracking in the wax. Once the wax is set, trim to 1/4\" with scissors, and add the printable label.', '', '2020-04-20 08:55:19', 'CREATE', 'views/images/affix-wick.jpg', 'views/images/pour-candle.jpg', 'views/images/soy-candle-diy7.jpg', 2, 'published', NULL),
(295, 17, 'DIY Mud Cloth Inspired Easter Eggs', 'Happy Easter everyone!\r\n\r\nI\'ve fallen for African mud cloth. The patterns are mesmerizing, in their simplicity and shape. I was dreaming up some ideas for black and white Easter eggs this year and came up with DIY mud cloth inspired Easter eggs. Honestly, you don\'t need to be an artist, just a steady hand helps with this easy Easter project. I used good ole sharpies to get these patterns. These eggs will look so nice as Easter decor.\r\n\r\nSupplies: Chalkboard and White Decorative Eggs / Sharpie White Paint Pen or white acrylic paint and brush / Black Sharpie Marker \r\nInstructions:\r\n1. First, I spent a little time looking at images online of mud cloth. I searched mud cloth on Pinterest and Google Image Search for some inspiration. Then I practiced some patterns on paper before I dove in.\r\n2. Get drawing! I used white acrylic paint on my chalkboard eggs, but in retrospect, I would prefer to use a paint pen the next time. You get cleaner lines with a marker. For the white eggs, I used a standard black Sharpie marker and it worked like a charm.', '', '2020-04-12 08:16:18', 'DECORATE', 'views/images/diy-easter-eggs-3.jpg', 'views/images/diy-easter-eggs-4.jpg', 'views/images/diy-easter-eggs.jpg', 2, 'published', NULL),
(296, 17, 'DIY Firepit', 'Supplies: Chalkboard and White Decorative Eggs / Sharpie White Paint Pen or white acrylic paint and brush / Black Sharpie Marker /&#13<br/>&#13<br/>Instructions:&#13<br/>&#13<br/>1. First, I spent a little time looking at images online of mud cloth. I searched mud cloth on Pinterest and Google Image Search for some inspiration. Then I practiced some patterns on paper before I dove in.&#13<br/>&#13<br/>2. Get drawing! I used white acrylic paint on my chalkboard eggs, but in retrospect, I would prefer to use a paint pen the next time. You get cleaner lines with a marker. For the white eggs, I used a standard black Sharpie marker and it worked like a charm.', 'Supplies: Chalkboard and White Decorative Eggs / Sharpie White Paint Pen or white acrylic paint and brush / Black Sharpie Marker /&#13<br/>&#13<br/>Instructions:&#13<br/>&#13<br/>1. First, I spent a little time looking at images online of mud cloth. I searched mud cloth on Pinterest and Google Image Search for some inspiration. Then I practiced some patterns on paper before I dove in.&#13<br/>&#13<br/>2. Get drawing! I used white acrylic paint on my chalkboard eggs, but in retrospect, I would prefer to use a paint pen the next time. You get cleaner lines with a marker. For the white eggs, I used a standard black Sharpie marker and it worked like a charm.', '2019-12-19 16:50:10', 'CREATE', 'views/images/1.jpeg', 'views/images/3.jpg', 'views/images/Fire-pit-seating-area.jpg', 1, 'published', NULL),
(299, 17, 'DIY Modern Key Holder', 'As owners of a Duplex home, it\'s safe to say we have a healthy number of keys to manage. \r\nNot only are we looking after our own home and car keys but the duplex\'s exterior door key, our tenant\'s spare keys, etc. \r\nWithout a designated drop spot for them when you walk in the front door, our keys often end up in scattered, hard to find places throughout the home. And it makes for a frantic struggle when you need to dash out the door in a hurry.\r\n\r\nSo when Dremel challenged me to share a small space solution as part of their month-long August Maker Days (more on this in a bit!), it was a no-brainer which area to tackle.\r\n\r\nBecause our entry is a small space, I knew the key holder had to be wall mounted, and I found inspiration in this only-sold-in-Danish-stores key holder. Normally making a wall-mounted key holder with key chain slots would require 3 big-daddy tools: belt sander, mitre saw and router, but instead I\'m simplifying things and using a handheld rotary tool that satisfies all 3 tool needs in one. (It\'s kind of amazing!)\r\n\r\nIf you too need to organise your home\'s key situation, check out the modern key holder solution I made for my entry. No more frantic key searching for this gal!\r\n\r\nMaterials:\r\n1in x 2in Piece of wood cut to 5-1/2in \r\n2 Small keyhole hangers\r\nScrewdriver\r\n1.5 mm Round leather cording\r\n4 Gold jump rings or split rings\r\n4 Caged necklace pendants\r\nWire cutter\r\nNeedle Nose Pliers\r\nScissors\r\nPencil\r\nRuler\r\n\r\nNote: While you\'re gathering materials, make sure your Micro is on the charger (or already charged). The charge time is about 3:45 minutes.', '', '2020-01-01 09:13:37', 'RENOVATE', 'views/images/key-holder-1-of-1-11.jpg', 'views/images/key-holder-1-of-1-18.jpg', 'views/images/key-holder-1-of-1.jpg', 2, 'published', NULL),
(302, 20, 'DIY Lockdown Edition: Easy Crafts', '&#34;Hi guys and welcome to day 29 of lockdown (but who&#39;s counting) .Now I really am against stockpiling. But these recent events got me thinking, excess toilet roll or not it is such a shame to waste what I think is one of the best arts and crafts tools going!&#13<br/>Whether you have young kids who need occupying while they are off school or if you simply want a new idea for date night, why not create something out of well nothing.&#13<br/>Me and my kids went for an under the sea theme, but there are loads of ideas on Pinterest. You could even try model each other, though try not to take offence, not all of them look pretty.&#13<br/>&#13<br/>What you&#39;ll need:&#13<br/>Some empty toilet rolls (one for the character and some spare for decoration)&#13<br/>Paints&#13<br/>Scissors&#13<br/>Glue&#13<br/>Glitter&#13<br/>Your imagination!&#34;', '&#34;First off choose your design. &#13<br/>My daughter has just watched the Little Mermaid (thanks Disney+!) so it was an easy choice. I have seen the cast of Star Wars too so do not be afraid to get creative.&#13<br/>&#13<br/>Paint the toilet rolls and leave them to dry. This can take about an hour. &#13<br/>Try stick to light colours if you are wanting to add hair as it can become a bit of a mess otherwise!&#13<br/>&#13<br/>Once dry, add any decorations you want. &#13<br/>We kept it simple, using another empty roll for the tail and some nail jewels for the scales. However, you can use just about anything.&#13<br/>&#13<br/>Let me know how you get on, and please send over any designs! I will choose the best one and send some art and crafts supplies across in order to keep you occupied this lockdown!&#13<br/>Stay safe everyone!&#34;', '2020-04-21 16:16:04', 'CREATE', 'views/images/toilet_1.jpg', 'views/images/toilet_2.jpg', 'views/images/toilet_3.jpg', 1, 'published', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `blog_id` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`blog_id`, `tag`) VALUES
(292, '#crafts'),
(292, '#home'),
(295, '#crafts'),
(295, '#home'),
(295, '#painting'),
(295, '#upcycle'),
(295, '#wood'),
(296, '#buildit'),
(296, '#garden'),
(296, '#recycle'),
(296, '#wood'),
(299, '#crafts'),
(299, '#home'),
(299, '#recycle'),
(299, '#upcycle');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_comment_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `blog_id`, `user_id`, `comment`, `comment_date`, `parent_comment_id`) VALUES
(363, 296, 22, 'Wow my tigers would just love this! ', '2020-04-20 08:40:54', 0),
(365, 292, 23, 'Have always wanted to make these! Will make no 10 smell great', '2020-04-20 08:55:50', 0),
(366, 299, 23, 'Very handy as I always lose my keys!!', '2020-01-20 09:56:24', 0),
(367, 283, 24, 'Fab!! xo', '2020-04-20 09:00:04', 0),
(368, 282, 24, 'Oooh very swish xo', '2020-04-20 09:00:27', 0),
(369, 281, 24, 'My daughter will love it xo', '2020-04-20 09:01:00', 0),
(370, 295, 24, 'These are fabby will have to give them a go :-) xo', '2020-04-20 09:01:51', 0),
(371, 279, 25, 'Would look good in tiger print!!', '2020-04-20 09:06:55', 0),
(372, 284, 19, 'these are really stylish! Can&#39;t believe they&#39;re DIY!', '2020-04-20 11:45:56', 0),
(373, 295, 19, 'These look too good to throw away', '2020-04-20 11:57:49', 0),
(375, 295, 20, 'Great stuff Tese! Going to give this a try! ', '2020-04-21 11:34:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `fav_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fave_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag`) VALUES
('#bedroom'),
('#buildit'),
('#crafts'),
('#garden'),
('#home'),
('#kitchen'),
('#painting'),
('#recycle'),
('#upcycle'),
('#wood');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_fn` varchar(100) NOT NULL,
  `user_ln` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `user_type` enum('Member','Blogger','Moderator') NOT NULL DEFAULT 'Member',
  `security_1` varchar(255) DEFAULT 'Who is your favourite Ryan',
  `answer_1` varchar(255) NOT NULL,
  `signature` varchar(100) DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `bio` text,
  `twitter_url` varchar(200) DEFAULT NULL,
  `insta_url` varchar(100) DEFAULT NULL,
  `facebook_url` varchar(100) DEFAULT NULL,
  `date_joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Locked` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_fn`, `user_ln`, `email`, `dob`, `user_type`, `security_1`, `answer_1`, `signature`, `profile_pic`, `bio`, `twitter_url`, `insta_url`, `facebook_url`, `date_joined`, `Locked`) VALUES
(17, 'sweetee', '$2y$10$PJUsRzFUJ.cEBgupNkZJBO/bp7SdEe.p0qEG5CrBNmawZWPrWCbii', 'Tese', 'Ogbeifun', 'tese.og@screwit.com', '1997-09-04', 'Blogger', 'Who is your favourite Ryan', '$2y$10$qZorYewVFNa6uzj5zlAUBOgxfiRbWh4ctKcyX91kwUz5k9nT78z92', NULL, 'Views/images/profile_pics/Tese.png', 'Also known as Sweetee, began blogging around the time the pandemic (COVID-19) began as a way to pass time as I was put on furlough by my workplace. I enjoy finding new ways to decorate your home with existing items and spending as little money as possible!', 'twitter.com', 'instagram.com', 'facebook.com', '2020-04-11 16:38:24', 'N'),
(19, 'member', '$2y$10$gEhGkZ0DWt7tr7SiGrH/SeKmcbmnQ9iiIMZJJrmPMYrESZLjbb8zm', 'Maggie', 'Member', 'email1@gmail.com', '1991-03-22', 'Member', 'Who is your favourite Ryan', '$2y$10$GUjbh5Zbve3Sni29ZXEPBe0B5DYBic9o7fDBjcsBaLDrV5EuFZHna', NULL, 'views/images/profile_pics/322.jpg', NULL, '@MaggieMakes', NULL, NULL, '2020-01-17 10:15:50', 'N'),
(20, 'Steph', '$2y$10$Ze8y.9j/0pCYUvRbUgJPB.rXdphwY3nyHV.4DHzEWGVPNALDvloNm', 'Stephanie', 'Foster', 'Steph@screwit.com', '1988-01-11', 'Blogger', 'Who is your favourite Ryan', '$2y$10$L7hi7yD4savVdG9S8pS9tejyi7QKhxwCGrZT6u2aDYoQQEaiziITS', NULL, 'Views/images/profile_pics/steph_Cropped.jpg', 'Always on the lookout for stylish pieces and making it easy and affordable to do at home! My house is filled with items that often started out as something else - I love giving things a new lease of life.', 'twitter.com/stephf', NULL, NULL, '2020-01-17 10:16:23', 'N'),
(21, 'mod', '$2y$10$cOFyJf.IZWm7CqOCxTf6e.d7pSB9l6gLv5VrsYBhroHWqGekTTiqa', 'Minnie', 'Mod', 'email3@gmail.com', '1904-01-11', 'Moderator', 'Who is your favourite Ryan', '$2y$10$DArBSStuedb5j8XIf1N7c.7LSyQuXQTBWKDJzCin3c.c8H974J13q', NULL, 'views/images/profile_pics/mod.jpg', NULL, NULL, NULL, NULL, '2020-01-17 10:16:45', 'N'),
(22, 'bigcatrescue', '$2y$10$RVcccp9pItbDG.wEWOYBtuqc1TNmGYuPxBV7YPwWvW6ykHpfbBMzq', 'Carol', 'Baskin', 'bigcats@gmail.com', '1966-08-01', 'Member', 'Who is your favourite Ryan', '$2y$10$vZIzk8ad8x/frJGjlyxd/.tCANczU7zgPdAHQU88nNSXJ777MASi.', NULL, 'views/images/profile_pics/carol.png', NULL, NULL, NULL, NULL, '2020-04-20 08:26:13', 'N'),
(23, 'BigBozza', '$2y$10$ucM9dTWykiwA8/spd53dueDktcEu7b31aMw7y6weYbDvOfxA9yIO.', 'Boris', 'Johnson', 'number10@downingstreet.com', '1960-06-06', 'Member', 'Who is your favourite Ryan', '$2y$10$IpBpuibC5.BQLvW/UUDTz.kYexUCEkFtX5tLCFAegnXPBhNyp5Xmu', NULL, 'views/images/profile_pics/boris.jpg', NULL, NULL, NULL, NULL, '2020-04-20 08:52:22', 'N'),
(24, 'Jiggy_Jane', '$2y$10$rHIq0cEceSaPtis/SRSxGu0rrZulxu1dcWCgGB6QtsQ/vq94pOdKC', 'Jane', 'Durling', 'jiggyjane@gmail.com', '1972-08-08', 'Member', 'Who is your favourite Ryan', '$2y$10$ry2mM9q9Q.BCaUCHxMj4ZOupepaUnZU50XRcr7V/DZhwzCrn7ry.6', NULL, 'views/images/profile_pics/jiggyjane.jpg', NULL, NULL, NULL, NULL, '2020-04-20 08:59:03', 'N'),
(25, 'JoeExotic', '$2y$10$CDgcNK.g17kUtK8.wjcVSeYwCnTUctVdMQlpkkC9m58OulBZuW282', 'Joe', 'Exotic', 'f---carolbaskin@countyjail.com', '1958-01-01', 'Member', 'Who is your favourite Ryan', '$2y$10$UX7I5ZZ7Af8FsGo9y8bVEePxnQV2YcDxLFP41tJcybVANBpZZ0st2', NULL, 'views/images/profile_pics/joeexotic.png', NULL, NULL, NULL, NULL, '2020-04-20 09:04:17', 'N'),
(26, 'LockdownLarry', '$2y$10$8pgb7WBfkzOCrcTbgGPEiOFxFlxS.PlvtwbPjlIs13hidoZtXlSFm', 'Larry', 'Lion', 'larrylion@gmail.com', '1972-03-03', 'Member', 'Who is your favourite Ryan', '$2y$10$6DUZtvM7GVy/hAYxuZRGfu4VCSL0d186GB18w7Mt9jM2jOW9wNsue', NULL, 'views/images/profile_pics/DIY-man1_3084685b.jpg', NULL, NULL, NULL, NULL, '2020-04-20 12:00:38', 'N'),
(27, 'Alex', '$2y$10$yyGSXTpQOItm9lB4nP6ZZuH2skis2Ag6u.PGbbmkkkpbv6YFO3ffO', 'Alex', 'Brannon', 'alex@screwit.com', '2001-01-01', 'Blogger', 'Who is your favourite Ryan', '$2y$10$anlB9NTBlCJBDfdkE.3p6uKBKXwJ01Va7C1DVaj7mt6CDyb1NI2su', NULL, 'views/images/profile_pics/Cat2.jpg', 'Loves coding and doing DIY during self-isolation, has left the house about 5 times in last 4 weeks... to go to Asda', NULL, NULL, NULL, '2020-04-20 18:06:39', 'Y'),
(28, 'Amrita', '$2y$10$IQKmUx9c83UA48aJ8kZb2eMjdVsgCw5DubTbS/I1gwe45Q/ovvQ2S', 'Amrita', 'Bains', 'amrita@screwit.com', '2001-01-01', 'Blogger', 'Who is your favourite Ryan', '$2y$10$C/eDxvdGXDtgdXibA1vgx.qOFgXyQQiHp7maNqwnmD2lA8Ek9/Uqe', NULL, 'views/images/profile_pics/Cat8.jpg', 'Screw it! This is the purrrrfect time for some fur-middable DIY projects. I&#39;ve got a Feline this coding will come in handy, purrhaps. DIY Blog; cat got the cream.', NULL, NULL, NULL, '2020-04-20 18:07:36', 'N'),
(29, 'Linzi', '$2y$10$6NrJ.c8lrG5vqTb5LfFb2O7qIXC5ccgkO16Gi2xt072/GdovaVfSS', 'Linzi', 'Carlin', 'linzi@screwit.com', '2001-01-01', 'Blogger', 'Who is your favourite Ryan', '$2y$10$WRLa0IsXiBdIwz//l.S.8usIrCQD4Hrxz9IwLxpdhuIgUm7M9FA1C', NULL, 'views/images/profile_pics/cat6.jpg', 'Li-lo\'s the name, DIY\'s the game! Passionate about crafting, cats, and crafting with cats Yes, <a href=https://www.amazon.co.uk/Crafting-Cat-Hair-Cute-Handicrafts/dp/1594745250>that\'s a thing.</a>', NULL, NULL, NULL, '2020-04-20 18:08:21', 'N'),
(31, 'Joey', '$2y$10$HnpoLxq3LwGCNmRzfO6NbuUt7hLH3lM5qOu80Zucl91VND8ip8m0O', 'Joe', 'Bloggs', 'joe@gmail.com', '2001-01-01', 'Member', 'Who is your favourite Ryan', '$2y$10$iPZWq2kRHAIcIr5M8LwzZOassG5sliGjDM1GxDA0trTKHtpC3E.4K', NULL, 'views/images/profile_pics/Cat2.jpg', NULL, NULL, NULL, NULL, '2020-04-21 16:17:26', 'N'),
(32, 'joey', '$2y$10$.Ay/3M1uss0IFYz.KmzNBu07wtFX.5Z.p5fup7W1lYAKQ.VQBYoNO', 'joe', 'bloggs', 'joey@email.com', '2001-01-01', 'Member', 'Who is your favourite Ryan', '$2y$10$PXcG8mh22fi94Gyq1yYhzeE4B95/cC.zM9U9Pbmi80tbY1xKxv1n6', NULL, 'views/images/profile_pics/Cat01.jpeg', NULL, NULL, NULL, NULL, '2020-04-21 16:30:53', 'N'),
(33, 'joe', '$2y$10$WHF3ugFpvJ7ESIZFF3NEU.Rs4ue3GkDZUFRbHzukR66kOtUrDYxU6', 'joey', 'bloggs', 'joe@gmai.com', '2001-01-01', 'Member', 'Who is your favourite Ryan', '$2y$10$RCMbohulwi/FTLR4Dw9YCOQTTIaEOYCtPROj7r5lDBIkNV58dp/x6', NULL, 'views/images/profile_pics/Cat1.png', NULL, NULL, NULL, NULL, '2020-04-21 16:32:23', 'N'),
(34, 'joeblogg', '$2y$10$75smAPYjMfun7TQaQpNBn.NbkcNZmiQBVMgknOcvdI9WGzbwkNpb2', 'joe', 'bloggs', 'joe@email.com', '2001-01-01', 'Member', 'Who is your favourite Ryan', '$2y$10$ZEIhUIDzhpN8OCOq3UeHcuUqt9ZEqS.4Ewj/TBiKU8SGkH5ZAK0AW', NULL, 'views/images/profile_pics/Tese.png', NULL, NULL, NULL, NULL, '2020-04-21 16:49:23', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`blog_id`,`tag`),
  ADD KEY `tag` (`tag`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`) USING BTREE,
  ADD KEY `comments_ibfk_1` (`blog_id`),
  ADD KEY `comments_ibfk_2` (`user_id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `favourites_ibfk_2` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD CONSTRAINT `blog_tags_ibfk_1` FOREIGN KEY (`tag`) REFERENCES `tags` (`tag`),
  ADD CONSTRAINT `blog_tags_ibfk_2` FOREIGN KEY (`blog_id`) REFERENCES `blog_posts` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog_posts` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog_posts` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
