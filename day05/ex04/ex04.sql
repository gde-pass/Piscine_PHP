UPDATE `ft_table`
SET `creation_date` = CONCAT(YEAR(`creation_date`)+20, '-', MONTH(`creation_date`), '-', DAY(`creation_date`))
WHERE `id` > 5;
