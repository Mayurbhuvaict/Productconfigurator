<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Log\Package;
use Shopware\Core\Framework\Migration\MigrationStep;

/**
 * @internal
 */
#[Package('core')]
class Migration1707977896NwgncyProductConfigurator extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1707977896;
    }

    public function update(Connection $connection): void
    {
        // implement update
        #Main parent table
        $connection->executeStatement("
             CREATE TABLE `prod_conf` (
            `id` BINARY(16) NOT NULL,
            `created_at` DATETIME(3) NOT NULL,
            `updated_at` DATETIME(3) NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

        #Mian parent table translation
        $connection->executeStatement("
            CREATE TABLE `prod_conf_translation` (
            `title` VARCHAR(255) NOT NULL,
            `subtitle` VARCHAR(255) NULL,
            `title_material` VARCHAR(255) NULL,
            `subtitle_material` VARCHAR(255) NULL,
            `title_coating` VARCHAR(255) NULL,
            `subtitle_coating` VARCHAR(255) NULL,
            `title_dimensions` VARCHAR(255) NULL,
            `subtitle_dimensions` VARCHAR(255) NULL,
            `title_closure` VARCHAR(255) NULL,
            `subtitle_closure` VARCHAR(255) NULL,
            `title_accessories` VARCHAR(255) NULL,
            `subtitle_accessories` VARCHAR(255) NULL,
            `title_notes` VARCHAR(255) NULL,
            `subtitle_notes` VARCHAR(255) NULL,
            `created_at` DATETIME(3) NOT NULL,
            `updated_at` DATETIME(3) NULL,
            `prod_conf_id` BINARY(16) NOT NULL,
            `language_id` BINARY(16) NOT NULL,
            PRIMARY KEY (`prod_conf_id`,`language_id`),
            KEY `fk.prod_conf_translation.prod_conf_id` (`prod_conf_id`),
            KEY `fk.prod_conf_translation.language_id` (`language_id`),
            CONSTRAINT `fk.prod_conf_translation.prod_conf_id` FOREIGN KEY (`prod_conf_id`) REFERENCES `prod_conf` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
            CONSTRAINT `fk.prod_conf_translation.language_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

        #Form table
        $connection->executeStatement("
                CREATE TABLE `prod_conf_form` (
                `id` BINARY(16) NOT NULL,
                `height` DOUBLE NULL,
                `width` DOUBLE NULL,
                `depth` DOUBLE NULL,
                `prod_conf_id` BINARY(16) NOT NULL,
                `form_media_id` BINARY(16) NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                PRIMARY KEY (`id`),
                KEY `fk.prod_conf_form.prod_conf_id` (`prod_conf_id`),
                CONSTRAINT `fk.prod_conf_form.prod_conf_id` FOREIGN KEY (`prod_conf_id`) REFERENCES `prod_conf` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

        #Form table translation
        $connection->executeStatement("
                CREATE TABLE `prod_conf_form_translation` (
                `name` VARCHAR(255) NULL,
                `description` VARCHAR(255) NULL,
                `tooltip` VARCHAR(255) NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                `prod_conf_form_id` BINARY(16) NOT NULL,
                `language_id` BINARY(16) NOT NULL,
                PRIMARY KEY (`prod_conf_form_id`,`language_id`),
                KEY `fk.prod_conf_form_translation.prod_conf_form_id` (`prod_conf_form_id`),
                KEY `fk.prod_conf_form_translation.language_id` (`language_id`),
                CONSTRAINT `fk.prod_conf_form_translation.prod_conf_form_id` FOREIGN KEY (`prod_conf_form_id`) REFERENCES `prod_conf_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
                CONSTRAINT `fk.prod_conf_form_translation.language_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

        #Material table
        $connection->executeStatement("
                CREATE TABLE `prod_conf_mat` (
                `id` BINARY(16) NOT NULL,
                `prod_conf_id` BINARY(16) NOT NULL,
                `material_media_id` BINARY(16) NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                PRIMARY KEY (`id`),
                KEY `fk.prod_conf_mat.prod_conf_id` (`prod_conf_id`),
                CONSTRAINT `fk.prod_conf_mat.prod_conf_id` FOREIGN KEY (`prod_conf_id`) REFERENCES `prod_conf` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

        #Material table translation
        $connection->executeStatement("
                CREATE TABLE `prod_conf_mat_translation` (
                    `title` VARCHAR(255) NULL,
                    `tooltip` VARCHAR(255) NULL,
                    `created_at` DATETIME(3) NOT NULL,
                    `updated_at` DATETIME(3) NULL,
                    `prod_conf_mat_id` BINARY(16) NOT NULL,
                    `language_id` BINARY(16) NOT NULL,
                    PRIMARY KEY (`prod_conf_mat_id`,`language_id`),
                    KEY `fk.prod_conf_mat_translation.prod_conf_mat_id` (`prod_conf_mat_id`),
                    KEY `fk.prod_conf_mat_translation.language_id` (`language_id`),
                    CONSTRAINT `fk.prod_conf_mat_translation.prod_conf_mat_id` FOREIGN KEY (`prod_conf_mat_id`) REFERENCES `prod_conf_mat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
                    CONSTRAINT `fk.prod_conf_mat_translation.language_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

        #Coating table
        $connection->executeStatement("
                CREATE TABLE `prod_conf_coat` (
                `id` BINARY(16) NOT NULL,
                `without_coating` TINYINT(1) NULL DEFAULT '0',
                `powder_coating` TINYINT(1) NULL DEFAULT '0',
                `wet_painting` TINYINT(1) NULL DEFAULT '0',
                `prod_conf_id` BINARY(16) NOT NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                PRIMARY KEY (`id`),
                KEY `fk.prod_conf_coat.prod_conf_id` (`prod_conf_id`),
                CONSTRAINT `fk.prod_conf_coat.prod_conf_id` FOREIGN KEY (`prod_conf_id`) REFERENCES `prod_conf` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

        #Dimension table
        $connection->executeStatement("
               CREATE TABLE `prod_conf_dime` (
                `id` BINARY(16) NOT NULL,
                `dimension_media_id` BINARY(16) NULL,
                `prod_conf_id` BINARY(16) NOT NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                PRIMARY KEY (`id`),
                KEY `fk.prod_conf_dime.prod_conf_id` (`prod_conf_id`),
                CONSTRAINT `fk.prod_conf_dime.prod_conf_id` FOREIGN KEY (`prod_conf_id`) REFERENCES `prod_conf` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

        ");

        #Dimension table translation
        $connection->executeStatement("
                CREATE TABLE `prod_conf_dime_translation` (
                `title` VARCHAR(255) NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                `prod_conf_dime_id` BINARY(16) NOT NULL,
                `language_id` BINARY(16) NOT NULL,
                PRIMARY KEY (`prod_conf_dime_id`,`language_id`),
                KEY `fk.prod_conf_dime_translation.prod_conf_dime_id` (`prod_conf_dime_id`),
                KEY `fk.prod_conf_dime_translation.language_id` (`language_id`),
                CONSTRAINT `fk.prod_conf_dime_translation.prod_conf_dime_id` FOREIGN KEY (`prod_conf_dime_id`) REFERENCES `prod_conf_dime` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
                CONSTRAINT `fk.prod_conf_dime_translation.language_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

        #Lock table
        $connection->executeStatement("
                CREATE TABLE `prod_conf_lock` (
                `id` BINARY(16) NOT NULL,
                `min_height` DOUBLE NULL,
                `min_width` DOUBLE NULL,
                `min_depth` DOUBLE NULL,
                `prod_conf_id` BINARY(16) NOT NULL,
                `lock_media_id` BINARY(16) NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                PRIMARY KEY (`id`),
                KEY `fk.prod_conf_lock.prod_conf_id` (`prod_conf_id`),
                CONSTRAINT `fk.prod_conf_lock.prod_conf_id` FOREIGN KEY (`prod_conf_id`) REFERENCES `prod_conf` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");



        #Lock table translation
        $connection->executeStatement("
              CREATE TABLE `prod_conf_lock_translation` (
                `title` VARCHAR(255) NOT NULL,
                `description` VARCHAR(255) NULL,
                `tooltip` VARCHAR(255) NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                `prod_conf_lock_id` BINARY(16) NOT NULL,
                `language_id` BINARY(16) NOT NULL,
                PRIMARY KEY (`prod_conf_lock_id`,`language_id`),
                KEY `fk.prod_conf_lock_translation.prod_conf_lock_id` (`prod_conf_lock_id`),
                KEY `fk.prod_conf_lock_translation.language_id` (`language_id`),
                CONSTRAINT `fk.prod_conf_lock_translation.prod_conf_lock_id` FOREIGN KEY (`prod_conf_lock_id`) REFERENCES `prod_conf_lock` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
                CONSTRAINT `fk.prod_conf_lock_translation.language_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

        ");

        #Accessories table
        $connection->executeStatement("
                CREATE TABLE `prod_conf_acce` (
                `id` BINARY(16) NOT NULL,
                `prod_conf_id` BINARY(16) NOT NULL,
                `accessories_media_id` BINARY(16) NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                PRIMARY KEY (`id`),
                KEY `fk.prod_conf_acce.prod_conf_id` (`prod_conf_id`),
                CONSTRAINT `fk.prod_conf_acce.prod_conf_id` FOREIGN KEY (`prod_conf_id`) REFERENCES `prod_conf` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

        ");

        #Accessories table translation
        $connection->executeStatement("
            CREATE TABLE `prod_conf_acce_translation` (
                `title` VARCHAR(255) NULL,
                `tooltip` VARCHAR(255) NULL,
                `created_at` DATETIME(3) NOT NULL,
                `updated_at` DATETIME(3) NULL,
                `prod_conf_acce_id` BINARY(16) NOT NULL,
                `language_id` BINARY(16) NOT NULL,
                PRIMARY KEY (`prod_conf_acce_id`,`language_id`),
                KEY `fk.prod_conf_acce_translation.prod_conf_acce_id` (`prod_conf_acce_id`),
                KEY `fk.prod_conf_acce_translation.language_id` (`language_id`),
                CONSTRAINT `fk.prod_conf_acce_translation.prod_conf_acce_id` FOREIGN KEY (`prod_conf_acce_id`) REFERENCES `prod_conf_acce` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
                CONSTRAINT `fk.prod_conf_acce_translation.language_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
