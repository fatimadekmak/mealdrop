<?php

//tables creation
$sql = "CREATE TABLE `users` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `name` varchar(255) NOT NULL,
            `email` varchar(255) NOT NULL,
            `user_type` varchar(255) NOT NULL DEFAULT '0',
            `email_verified_at` timestamp NULL DEFAULT NULL,
            `password` varchar(255) NOT NULL,
            `two_factor_secret` text DEFAULT NULL,
            `two_factor_recovery_codes` text DEFAULT NULL,
            `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
            `remember_token` varchar(100) DEFAULT NULL,
            `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
            `profile_photo_path` varchar(2048) DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `password_reset_tokens`
            --

            CREATE TABLE `password_reset_tokens` (
            `email` varchar(255) NOT NULL,
            `token` varchar(255) NOT NULL,
            `created_at` timestamp NULL DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `failed_jobs`
            --

            CREATE TABLE `failed_jobs` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `uuid` varchar(255) NOT NULL,
            `connection` text NOT NULL,
            `queue` text NOT NULL,
            `payload` longtext NOT NULL,
            `exception` longtext NOT NULL,
            `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `personal_access_tokens`
            --

            CREATE TABLE `personal_access_tokens` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `tokenable_type` varchar(255) NOT NULL,
            `tokenable_id` bigint(20) UNSIGNED NOT NULL,
            `name` varchar(255) NOT NULL,
            `token` varchar(64) NOT NULL,
            `abilities` text DEFAULT NULL,
            `last_used_at` timestamp NULL DEFAULT NULL,
            `expires_at` timestamp NULL DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `sessions`
            --

            CREATE TABLE `sessions` (
            `id` varchar(255) NOT NULL,
            `user_id` bigint(20) UNSIGNED DEFAULT NULL,
            `ip_address` varchar(45) DEFAULT NULL,
            `user_agent` text DEFAULT NULL,
            `payload` longtext NOT NULL,
            `last_activity` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `cuisines`
            --

            CREATE TABLE `cuisines` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `name` varchar(255) NOT NULL,
            `description` varchar(255) NOT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `restaurants`
            --

            CREATE TABLE `restaurants` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `name` varchar(255) NOT NULL,
            `email` varchar(255) NOT NULL,
            `image` varchar(255) DEFAULT NULL,
            `address` varchar(255) NOT NULL,
            `phone` varchar(255) NOT NULL,
            `cuisine` bigint(20) UNSIGNED NOT NULL,
            `opening_time` varchar(255) NOT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL,
            `active` int(11) NOT NULL DEFAULT 0
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `delivery_companies`
            --

            CREATE TABLE `delivery_companies` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `name` varchar(255) NOT NULL,
            `email` varchar(255) NOT NULL,
            `phone` varchar(255) NOT NULL,
            `charges_per_mile` varchar(255) NOT NULL,
            `nb_drivers` int(11) NOT NULL,
            `working_hours` varchar(255) NOT NULL,
            `available` int(11) NOT NULL DEFAULT 0,
            `active` int(11) NOT NULL DEFAULT 0,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `food_items`
            --

            CREATE TABLE `food_items` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `name` varchar(255) NOT NULL,
            `image` varchar(255) DEFAULT NULL,
            `price` double NOT NULL,
            `description` varchar(255) NOT NULL,
            `cuisine` bigint(20) UNSIGNED NOT NULL,
            `rest_id` bigint(20) UNSIGNED NOT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `carts`
            --

            CREATE TABLE `carts` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `user_id` bigint(20) UNSIGNED NOT NULL,
            `food_id` bigint(20) UNSIGNED NOT NULL,
            `quantity` varchar(255) NOT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `orders`
            --

            CREATE TABLE `orders` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `user_id` bigint(20) UNSIGNED NOT NULL,
            `total_price` double DEFAULT NULL,
            `del_id` bigint(20) UNSIGNED DEFAULT NULL,
            `status` varchar(255) NOT NULL DEFAULT 'pending',
            `fname` varchar(255) NOT NULL,
            `lname` varchar(255) NOT NULL,
            `shipping_addr` varchar(255) NOT NULL,
            `phone` varchar(255) NOT NULL,
            `note` varchar(255) DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `ordered_items`
            --

            CREATE TABLE `ordered_items` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `order_id` bigint(20) UNSIGNED NOT NULL,
            `food_item_id` bigint(20) UNSIGNED NOT NULL,
            `quantity` int(11) NOT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `restaurant_orders`
            --

            CREATE TABLE `restaurant_orders` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `rest_id` bigint(20) UNSIGNED NOT NULL,
            `order_id` bigint(20) UNSIGNED NOT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `notifications`
            --

            CREATE TABLE `notifications` (
            `id` char(36) NOT NULL,
            `type` varchar(255) NOT NULL,
            `notifiable_type` varchar(255) NOT NULL,
            `notifiable_id` bigint(20) UNSIGNED NOT NULL,
            `data` text NOT NULL,
            `read_at` timestamp NULL DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `reviews`
            --

            CREATE TABLE `reviews` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `user_id` bigint(20) UNSIGNED NOT NULL,
            `user_name` varchar(255) NOT NULL,
            `rest_id` bigint(20) UNSIGNED NOT NULL,
            `review_text` varchar(255) NOT NULL,
            `rating` varchar(255) NOT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

            --
            -- Table structure for table `migrations`
            --

            CREATE TABLE `migrations` (
            `id` int(10) UNSIGNED NOT NULL,
            `migration` varchar(255) NOT NULL,
            `batch` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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

//indexes for tables
$sql = "ALTER TABLE `carts`
        ADD PRIMARY KEY (`id`),
        ADD KEY `carts_user_id_foreign` (`user_id`),
        ADD KEY `carts_food_id_foreign` (`food_id`);

        --
        -- Indexes for table `cuisines`
        --
        ALTER TABLE `cuisines`
        ADD PRIMARY KEY (`id`),
        ADD UNIQUE KEY `cuisines_name_unique` (`name`);

        --
        -- Indexes for table `delivery_companies`
        --
        ALTER TABLE `delivery_companies`
        ADD PRIMARY KEY (`id`);

        --
        -- Indexes for table `failed_jobs`
        --
        ALTER TABLE `failed_jobs`
        ADD PRIMARY KEY (`id`),
        ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

        --
        -- Indexes for table `food_items`
        --
        ALTER TABLE `food_items`
        ADD PRIMARY KEY (`id`),
        ADD KEY `food_items_rest_id_foreign` (`rest_id`),
        ADD KEY `food_items_cuisine_foreign` (`cuisine`);

        --
        -- Indexes for table `migrations`
        --
        ALTER TABLE `migrations`
        ADD PRIMARY KEY (`id`);

        --
        -- Indexes for table `notifications`
        --
        ALTER TABLE `notifications`
        ADD PRIMARY KEY (`id`),
        ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

        --
        -- Indexes for table `ordered_items`
        --
        ALTER TABLE `ordered_items`
        ADD PRIMARY KEY (`id`),
        ADD KEY `ordered_items_order_id_foreign` (`order_id`),
        ADD KEY `ordered_items_food_item_id_foreign` (`food_item_id`);

        --
        -- Indexes for table `orders`
        --
        ALTER TABLE `orders`
        ADD PRIMARY KEY (`id`),
        ADD KEY `orders_user_id_foreign` (`user_id`),
        ADD KEY `orders_del_id_foreign` (`del_id`);

        --
        -- Indexes for table `password_reset_tokens`
        --
        ALTER TABLE `password_reset_tokens`
        ADD PRIMARY KEY (`email`);

        --
        -- Indexes for table `personal_access_tokens`
        --
        ALTER TABLE `personal_access_tokens`
        ADD PRIMARY KEY (`id`),
        ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
        ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

        --
        -- Indexes for table `restaurants`
        --
        ALTER TABLE `restaurants`
        ADD PRIMARY KEY (`id`),
        ADD KEY `restaurants_cuisine_foreign` (`cuisine`);

        --
        -- Indexes for table `restaurant_orders`
        --
        ALTER TABLE `restaurant_orders`
        ADD PRIMARY KEY (`id`),
        ADD KEY `restaurant_orders_rest_id_foreign` (`rest_id`),
        ADD KEY `restaurant_orders_order_id_foreign` (`order_id`);

        --
        -- Indexes for table `reviews`
        --
        ALTER TABLE `reviews`
        ADD PRIMARY KEY (`id`),
        ADD KEY `reviews_user_id_foreign` (`user_id`),
        ADD KEY `reviews_rest_id_foreign` (`rest_id`);

        --
        -- Indexes for table `sessions`
        --
        ALTER TABLE `sessions`
        ADD PRIMARY KEY (`id`),
        ADD KEY `sessions_user_id_index` (`user_id`),
        ADD KEY `sessions_last_activity_index` (`last_activity`);

        --
        -- Indexes for table `users`
        --
        ALTER TABLE `users`
        ADD PRIMARY KEY (`id`),
        ADD UNIQUE KEY `users_email_unique` (`email`);
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

//autoincrements for tables
$sql = "ALTER TABLE `carts`
        MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT for table `cuisines`
        --
        ALTER TABLE `cuisines`
        MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT for table `delivery_companies`
        --
        ALTER TABLE `delivery_companies`
        MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT for table `failed_jobs`
        --
        ALTER TABLE `failed_jobs`
        MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT for table `food_items`
        --
        ALTER TABLE `food_items`
        MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT for table `migrations`
        --
        ALTER TABLE `migrations`
        MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT for table `ordered_items`
        --
        ALTER TABLE `ordered_items`
        MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT for table `orders`
        --
        ALTER TABLE `orders`
        MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT for table `personal_access_tokens`
        --
        ALTER TABLE `personal_access_tokens`
        MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT for table `restaurants`
        --
        ALTER TABLE `restaurants`
        MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT for table `restaurant_orders`
        --
        ALTER TABLE `restaurant_orders`
        MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT for table `reviews`
        --
        ALTER TABLE `reviews`
        MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT for table `users`
        --
        ALTER TABLE `users`
        MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
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

//constraints for tables
$sql = "ALTER TABLE `carts`
        ADD CONSTRAINT `carts_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `food_items` (`id`) ON DELETE CASCADE,
        ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

        --
        -- Constraints for table `food_items`
        --
        ALTER TABLE `food_items`
        ADD CONSTRAINT `food_items_cuisine_foreign` FOREIGN KEY (`cuisine`) REFERENCES `cuisines` (`id`) ON DELETE CASCADE,
        ADD CONSTRAINT `food_items_rest_id_foreign` FOREIGN KEY (`rest_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE;

        --
        -- Constraints for table `ordered_items`
        --
        ALTER TABLE `ordered_items`
        ADD CONSTRAINT `ordered_items_food_item_id_foreign` FOREIGN KEY (`food_item_id`) REFERENCES `food_items` (`id`) ON DELETE CASCADE,
        ADD CONSTRAINT `ordered_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

        --
        -- Constraints for table `orders`
        --
        ALTER TABLE `orders`
        ADD CONSTRAINT `orders_del_id_foreign` FOREIGN KEY (`del_id`) REFERENCES `delivery_companies` (`id`) ON DELETE CASCADE,
        ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

        --
        -- Constraints for table `restaurants`
        --
        ALTER TABLE `restaurants`
        ADD CONSTRAINT `restaurants_cuisine_foreign` FOREIGN KEY (`cuisine`) REFERENCES `cuisines` (`id`) ON DELETE CASCADE;

        --
        -- Constraints for table `restaurant_orders`
        --
        ALTER TABLE `restaurant_orders`
        ADD CONSTRAINT `restaurant_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
        ADD CONSTRAINT `restaurant_orders_rest_id_foreign` FOREIGN KEY (`rest_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE;

        --
        -- Constraints for table `reviews`
        --
        ALTER TABLE `reviews`
        ADD CONSTRAINT `reviews_rest_id_foreign` FOREIGN KEY (`rest_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE,
        ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
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


include('insert_data.php');
?>