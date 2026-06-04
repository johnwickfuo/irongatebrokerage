-- =====================================================================
-- Irongate Brokerage - Database update
-- Date: 2026-06-04
--
-- This script adds:
--   1) Per-user "deposit bank account" columns (set by admin on the
--      user detail page) used for the Bank Transfer deposit option.
--   2) Multicurrency support at signup.
--
-- NOTE: The `currency` and `s_currency` columns already exist on the
--       `users` table, so multicurrency requires no schema change here.
--       They are included (commented) below for reference only.
--
-- Run this against your database (e.g. in phpMyAdmin) to apply the
-- changes. All statements are safe to re-run individually.
-- =====================================================================

-- ---------------------------------------------------------------------
-- 1) Per-user deposit bank account (Bank Transfer deposits)
--    All fields are optional / nullable.
-- ---------------------------------------------------------------------
ALTER TABLE `users`
    ADD COLUMN `deposit_bank_name`      VARCHAR(191) NULL DEFAULT NULL AFTER `swift_code`,
    ADD COLUMN `deposit_account_name`   VARCHAR(191) NULL DEFAULT NULL AFTER `deposit_bank_name`,
    ADD COLUMN `deposit_account_number` VARCHAR(191) NULL DEFAULT NULL AFTER `deposit_account_name`,
    ADD COLUMN `deposit_swift_code`     VARCHAR(191) NULL DEFAULT NULL AFTER `deposit_account_number`,
    ADD COLUMN `deposit_iban`           VARCHAR(191) NULL DEFAULT NULL AFTER `deposit_swift_code`,
    ADD COLUMN `deposit_bank_notes`     TEXT         NULL DEFAULT NULL AFTER `deposit_iban`;

-- ---------------------------------------------------------------------
-- 2) Multicurrency (already present on `users`) - reference only.
--    Uncomment ONLY if these columns are missing in your database.
-- ---------------------------------------------------------------------
-- ALTER TABLE `users`
--     ADD COLUMN `currency`   VARCHAR(255) NOT NULL DEFAULT '$'   AFTER `dob`,
--     ADD COLUMN `s_currency` VARCHAR(255) NOT NULL DEFAULT 'USD' AFTER `currency`;
