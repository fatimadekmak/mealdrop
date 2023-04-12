<?php 
    //inserting data 
    $sql = "INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
    (1, 'admin', 'admin@gmail.com', '1', NULL, '\$2y\$10\$5s.83YCzwUTxP2HLidko.OCQPDpEA1cI3QfoZSOQWrTzFhofnrccS', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-03 13:58:34', '2023-04-03 13:58:34'),
    (2, 'fatima', 'fatima@gmail.com', '0', NULL, '\$2y\$10\$U1oMq9Wv8xPsCHQuau/Fr.8VoN7AVo00uDafvgXog3IhoF9lKJ.Mq', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-03 13:59:36', '2023-04-03 13:59:36'),
    (3, 'israa', 'israa@gmail.com', '0', NULL, '\$2y\$10\$osW7VNCNjiLpzWf.kwdbvOqqkYHeK.aoRRhaTZjZoIDrXXkGNOrKe', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-03 14:00:23', '2023-04-03 14:00:23'),
    (6, 'Lakkis', 'lakkis@gmail.com', '2', NULL, '\$2y\$10\$LybzOg3kWLBk.lUHkpkR/.d0z1UQHI9bczCmRx2HJpPSWx4ZDxkXm', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-03 14:21:54', '2023-04-03 14:21:54'),
    (7, 'KFC', 'kfc@gmail.com', '2', NULL, '\$2y\$10\$eM82FXrpKWAD5RpaLocHJ.bHKrFj..Acnavqi6jNbHy/SzshnELqm', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-03 14:22:14', '2023-04-03 14:22:14'),
    (8, 'Macdonalds', 'macdo@gmail.com', '2', NULL, '\$2y\$10\$Jcbter9diLHwQwUHRJ4J/ewfPHE5VGgBueD89m0UC3aenInSj.TMm', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-03 14:22:38', '2023-04-03 14:22:38'),
    (9, 'Al-Hindi', 'hindi@gmail.com', '2', NULL, '\$2y\$10\$NhJcwq6es2w5wN1GGlYkluh1ApO8L0rDsfiZW1VMQ3CYbwNAt.ej2', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-03 14:23:00', '2023-04-03 14:23:00'),
    (10, 'Toroto Delivery', 'toroto.del@gmail.com', '3', NULL, '\$2y\$10\$H5JV0QTEft6WmR.yLgdK.ermcPIW26dunhtO8n1jW8OrsXxYFoYrK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-03 15:08:53', '2023-04-03 15:08:53'),
    (11, 'Fasto Delivery', 'fasto.del@gmail.com', '3', NULL, '\$2y\$10\$E1yjUk.Z7eD34vPfIsYP4e/QmOtgirLQr0xf8WqbMjlZV2lYb/qPK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-03 15:09:11', '2023-04-03 15:09:11'),
    (12, 'QuadBro', 'quadbro@gmail.com', '3', NULL, '\$2y\$10\$pdkEFWWdbIC.0V2OuhyRGOiSf4u79SiKXvs8OqCdJwK7duehCeOp6', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-03 15:09:29', '2023-04-03 15:09:29'),
    (13, 'Mostafa Dekmak', 'mostafa@gmail.com', '0', NULL, '\$2y\$10\$i0AIm2LO3E8bAqlQnK/rFOcClMvvnkxCqkAmC3feo2icABIDdQ1PG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-06 19:53:43', '2023-04-06 19:53:43'),
    (14, 'Kaco Doner', 'kaco.doner@gmail.com', '2', NULL, '\$2y\$10\$DaJsigUm5lvCPehp48xxl.FFWGsjYMPrNBz9g.PjDtetyv7EAL8e.', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-12 11:46:59', '2023-04-12 11:46:59'),
    (15, 'Avocado', 'avocado@gmail.com', '2', NULL, '\$2y\$10\$kqHVcwSVSHC6A4VWOqcdf.pRxN.DRy7gmKmczlpvEDb3/mp61Jz6C', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-12 11:47:30', '2023-04-12 11:47:30');
    
--
-- Dumping data for table `cuisines`
--

INSERT INTO `cuisines` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Lebanese', 'Authentic lebanese dishes', '2023-04-03 14:01:48', '2023-04-03 14:01:48'),
(2, 'Fast Food', '', '2023-04-03 14:02:47', '2023-04-03 14:02:47'),
(3, 'Indian', 'Authentic indian dishes', '2023-04-03 14:04:13', '2023-04-03 14:04:13'),
(4, 'Mexican', 'Authentic mexican dishes', '2023-04-03 14:18:06', '2023-04-03 14:18:06'),
(5, 'Turkish', 'Authentic turkish dishes', '2023-04-03 14:18:57', '2023-04-03 14:18:57');

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `email`, `image`, `address`, `phone`, `cuisine`, `opening_time`, `created_at`, `updated_at`, `active`) VALUES
(1, 'Lakkis', 'lakkis@gmail.com', 'lakkis.png', 'Hamra, Beirut', '01-224455', 1, '13:00-1:00', '2023-04-03 14:01:48', '2023-04-03 14:01:48', 1),
(2, 'KFC', 'kfc@gmail.com', 'kfc.png', 'City Center - Beirut', '01-758485', 2, '11:00-00:00', '2023-04-03 14:02:47', '2023-04-03 14:02:47', 1),
(3, 'Macdonalds', 'macdo@gmail.com', 'macdo.png', 'Bliss, Hamra', '01-654654', 2, '11:00-00:00', '2023-04-03 14:03:24', '2023-04-03 14:03:24', 1),
(4, 'Al-Hindi', 'hindi@gmail.com', 'hindi.png', 'Ashrafieh, Beirut', '01-788774', 3, '13:00-00:00', '2023-04-03 14:04:13', '2023-04-11 12:21:44', 1),
(5, 'Al-Jawad', 'al.jawad@gmail.com', NULL, 'Saint Theres, Lebanon', '01-778877', 1, '10:00-00:00', '2023-04-03 14:05:07', '2023-04-03 14:05:07', 0),
(6, 'Al-Beek', 'beek@gmail.com', NULL, 'Beirut, Lebanon', '08-754778', 2, '11:00-22:00', '2023-04-03 14:17:06', '2023-04-03 14:17:06', 0),
(7, 'Avocado', 'avocado@gmail.com', 'avocado.png', 'Haret Hreik, Lebanon', '01-787878', 4, '12:00-22:00', '2023-04-03 14:18:06', '2023-04-12 11:52:17', 1),
(8, 'Kaco Doner', 'kaco.doner@gmail.com', 'kaco.png', 'Dahye, Lebanon', '01-898989', 5, '11:00-23:00', '2023-04-03 14:18:57', '2023-04-12 11:54:51', 1);

--
-- Dumping data for table `delivery_companies`
--

INSERT INTO `delivery_companies` (`id`, `name`, `email`, `phone`, `charges_per_mile`, `nb_drivers`, `working_hours`, `available`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Toroto Delivery', 'toroto.del@gmail.com', '01-774575', '\$0.8-\$1.2', 15, '8:00-00:00', 0, 1, '2023-04-03 14:06:09', '2023-04-12 12:15:36'),
(2, 'Fasto Delivery', 'fasto.del@gmail.com', '05-754587', '\$0.8-\$1.2', 10, '9:00-22:00', 1, 1, '2023-04-03 14:06:52', '2023-04-04 18:52:35'),
(3, 'QuadBro', 'quadbro@gmail.com', '08-754545', '\$0.8-\$1.4', 18, '8:00-1:00', 1, 1, '2023-04-03 14:07:48', '2023-04-05 15:04:11'),
(4, 'Tnen', 'tnen@gmail.com', '03-875785', '\$0.4-\$0.8', 8, '10:00-22:00', 0, 0, '2023-04-03 15:06:20', '2023-04-03 15:06:20'),
(5, 'Farma', 'farma@gmail.com', '03-454545', '\$0.7-\$1.0', 12, '8:00-00:00', 0, 0, '2023-04-03 15:07:21', '2023-04-03 15:07:21');

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`id`, `name`, `image`, `price`, `description`, `cuisine`, `rest_id`, `created_at`, `updated_at`) VALUES
(1, 'Mushroom Burger', NULL, 6, 'Beef Burger with fresh mushroom sauce.', 2, 1, '2023-04-03 16:44:04', '2023-04-03 16:44:04'),
(2, 'Grilled Beef', NULL, 9, 'Yummy grilled beef.', 1, 1, '2023-04-03 16:45:43', '2023-04-03 16:45:43'),
(3, 'Poulet à la Crème', NULL, 12, 'Grilled Chicken with mushroom and cream.', 2, 1, '2023-04-03 16:50:16', '2023-04-03 16:50:16'),
(4, 'Batata Harra', NULL, 5, 'The famous batata harra.', 1, 1, '2023-04-03 16:50:44', '2023-04-03 16:50:44'),
(5, 'Hummus', NULL, 1, 'Hummus b tahini', 1, 1, '2023-04-03 16:51:10', '2023-04-03 16:51:10'),
(7, 'Fried Chicken', NULL, 2, '2 pieces.', 2, 2, '2023-04-03 16:55:56', '2023-04-03 16:55:56'),
(9, 'Fried Chicken 5pcs', NULL, 3, '5 pieces.', 2, 2, '2023-04-03 16:56:27', '2023-04-03 16:56:27'),
(10, 'Fried Chicken 8pcs', NULL, 5, '8 pieces.', 2, 2, '2023-04-03 16:56:57', '2023-04-03 16:56:57'),
(11, 'Large Fries', NULL, 3, 'large box of fries.', 2, 2, '2023-04-03 16:57:48', '2023-04-03 16:57:48'),
(12, 'Small Fries', NULL, 1, 'small box of fries.', 2, 2, '2023-04-03 16:58:16', '2023-04-03 16:58:16'),
(13, 'Big Mac', NULL, 8, 'Beef patty, pickles,  big mac sauce and cheddar cheese.', 2, 3, '2023-04-03 17:06:44', '2023-04-03 17:06:44'),
(14, 'Cheese Burger', NULL, 5, 'Beef patty, pickles,  ketchup, mustard and cheddar cheese.', 2, 3, '2023-04-03 17:07:50', '2023-04-03 17:07:50'),
(15, 'Medium World Famous Fries', NULL, 3, 'medium sized box of fries.', 2, 3, '2023-04-03 17:09:01', '2023-04-03 17:09:01'),
(16, 'CHICKEN CURRY', NULL, 12, 'Light chicken cooked with fine herbs', 3, 4, '2023-04-03 17:11:00', '2023-04-03 17:11:00'),
(17, 'BUTTER CHICKEN', NULL, 12, 'Classic chicken tikka cooked in a tomato creamy sauce', 3, 4, '2023-04-03 17:11:16', '2023-04-03 17:11:16'),
(18, 'BUTTER SHRIMP', NULL, 16, 'Classic shrimp tikka cooked in a tomato creamy sauce', 3, 4, '2023-04-03 17:11:37', '2023-04-03 17:11:37'),
(19, 'TANDOORI CHICKEN (HALF PORTION)', NULL, 7, 'Classic chicken marinated overnight in spicy ginger garlic yoghurt, grilled in tandoor', 3, 4, '2023-04-03 17:11:56', '2023-04-03 17:11:56'),
(20, 'TANDOORI CHICKEN (FULL PORTION)', NULL, 12, 'Classic chicken marinated overnight in spicy ginger garlic yoghurt, grilled in tandoor', 3, 4, '2023-04-03 17:12:10', '2023-04-03 17:12:10'),
(21, 'Dynamite Chicken', NULL, 10, '5 pieces.', 3, 4, '2023-04-11 12:00:21', '2023-04-11 12:00:21'),
(22, 'Fajita Sandwich', NULL, 8, 'Yummy fajita.', 4, 7, '2023-04-12 11:53:22', '2023-04-12 11:53:22'),
(23, 'Taco 5pcs', NULL, 3, '5 pieces tacos of your choice.', 4, 7, '2023-04-12 11:53:53', '2023-04-12 11:53:53'),
(24, 'Chicken Turkish Shawarma', NULL, 6, 'with tomato, onion, and our secret sauce.', 5, 8, '2023-04-12 11:55:41', '2023-04-12 11:55:41'),
(25, 'Meat Turkish Shawarma', NULL, 7, 'with tomato, onion, and our secret sauce.', 5, 8, '2023-04-12 11:56:05', '2023-04-12 11:56:05'),
(26, 'Fajita Sandwich', NULL, 9, 'best fajita in town', 4, 1, '2023-04-12 12:08:40', '2023-04-12 12:08:40');

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `food_id`, `quantity`, `created_at`, `updated_at`) VALUES
(2, 3, 24, '2', '2023-04-12 12:14:21', '2023-04-12 12:14:21'),
(3, 3, 7, '1', '2023-04-12 12:14:31', '2023-04-12 12:14:31');

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `del_id`, `status`, `fname`, `lname`, `shipping_addr`, `phone`, `note`, `created_at`, `updated_at`) VALUES
(1, 2, 16, 1, 'out_for_delivery', 'Fatima', 'Dekmak', 'Airport Road', '01-224455', 'knock the door.', '2023-04-06 20:00:09', '2023-04-11 09:17:39'),
(2, 3, 8, 1, 'delivered', 'israa', 'Harb', 'Haret Hreik', '03-454545', NULL, '2023-04-06 20:12:56', '2023-04-12 12:15:45'),
(3, 13, 36, 3, 'pending', 'Mostafa', 'Dekmak', 'HARA', '01545454', NULL, '2023-04-12 12:17:48', '2023-04-12 12:17:51');

--
-- Dumping data for table `ordered_items`
--

INSERT INTO `ordered_items` (`id`, `order_id`, `food_item_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2023-04-06 20:00:09', '2023-04-06 20:00:09'),
(2, 1, 11, 2, '2023-04-06 20:00:11', '2023-04-06 20:00:11'),
(3, 1, 7, 2, '2023-04-06 20:00:11', '2023-04-06 20:00:11'),
(4, 2, 13, 1, '2023-04-06 20:12:56', '2023-04-06 20:12:56'),
(5, 3, 17, 3, '2023-04-12 12:17:48', '2023-04-12 12:17:48');

--
-- Dumping data for table `restaurant_orders`
--

INSERT INTO `restaurant_orders` (`id`, `rest_id`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-04-06 20:00:09', '2023-04-06 20:00:09'),
(2, 2, 1, '2023-04-06 20:00:11', '2023-04-06 20:00:11'),
(3, 3, 2, '2023-04-06 20:12:56', '2023-04-06 20:12:56'),
(4, 4, 3, '2023-04-12 12:17:48', '2023-04-12 12:17:48');

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('23c8551f-d5b2-4ddd-8b02-8b94c1220045', 'App\\Notifications\\NewOrderNotification', 'App\\Models\\User', 12, '{\"order_id\":3,\"user_name\":\"Mostafa Dekmak\"}', NULL, '2023-04-12 12:17:51', '2023-04-12 12:17:51'),
('2f7e5127-8673-4de4-b7f9-d5dd43fff0f6', 'App\\Notifications\\NewOrderNotification', 'App\\Models\\User', 9, '{\"order_id\":3,\"user_name\":\"Mostafa Dekmak\"}', NULL, '2023-04-12 12:17:51', '2023-04-12 12:17:51');

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `user_name`, `rest_id`, `review_text`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 'fatima', 1, 'I\'ve tried every dish of Lakkis and everything was on point. 10/10 recommended!', 'excellent', '2023-04-05 18:47:47', '2023-04-05 18:47:47'),
(2, 3, 'israa', 1, 'I ordered Batata Harra yesterday and it was average. My mom\'s is better. Not worth it!', 'average', '2023-04-05 18:55:40', '2023-04-05 18:55:40'),
(3, 13, 'Mostafa Dekmak', 2, 'The quality of food is bad.', 'terrible', '2023-04-12 12:10:33', '2023-04-12 12:10:33'),
(4, 13, 'Mostafa Dekmak', 7, 'Literally the best fajita sandwich I\'ve had in a while !!!!', 'excellent', '2023-04-12 12:11:08', '2023-04-12 12:11:08'),
(5, 2, 'fatima', 8, 'Best shawarma terkeye in town!!!', 'excellent', '2023-04-12 12:11:49', '2023-04-12 12:11:49'),
(6, 2, 'fatima', 4, 'I ordered Butter Chicken and it tastes good.', 'good', '2023-04-12 12:12:23', '2023-04-12 12:12:23'),
(7, 3, 'israa', 4, 'Chicken Curry.. Chef\'s Kiss!', 'excellent', '2023-04-12 12:13:01', '2023-04-12 12:13:01'),
(8, 3, 'israa', 2, 'Forever my favorite !!', 'excellent', '2023-04-12 12:13:32', '2023-04-12 12:13:32'),
(9, 3, 'israa', 3, 'Very Overrated!', 'poor', '2023-04-12 12:13:54', '2023-04-12 12:13:54');


--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_24_182817_create_sessions_table', 1),
(7, '2023_02_29_210406_create_cuisines_table', 1),
(8, '2023_03_03_124819_create_restaurants_table', 1),
(9, '2023_03_30_225358_create_delivery_companies_table', 1),
(10, '2023_03_31_203913_create_food_items_table', 1),
(11, '2023_04_01_234558_create_carts_table', 1),
(12, '2023_04_03_010514_create_orders_table', 1),
(13, '2023_04_03_011451_create_ordered_items_table', 1),
(14, '2023_04_03_011607_create_restaurant_orders_table', 1),
(15, '2023_04_05_133547_create_notifications_table', 1),
(16, '2023_04_06_002630_create_reviews_table', 1);

    ";


    if ($conn->multi_query($sql)) {
    // Loop through each result set (if any) and free memory
    while ($conn->next_result()) {
    if ($result = $conn->store_result()) {
    $result->free();
    }
    }
    } else {
    // Handle errors
    echo "Error: " . $conn->error;
    }

    echo "database mealdrop is successfully created!\n";
    echo "follow the next instructions in README file";
?>