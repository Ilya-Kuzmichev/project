<?php

declare(strict_types=1);

use Phoenix\Migration\AbstractMigration;

final class Create_table_promo extends AbstractMigration
{
    protected function up(): void
    {
        $table = (new \models\Promo())->getTable();
        $this->execute("CREATE TABLE `{$table}` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `name` varchar(255) NOT NULL,
                `default_rating` int(11) NOT NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=innoDB DEFAULT CHARSET=utf8"
        );
    }

    protected function down(): void
    {
        $this->table((new \models\Promo())->getTable())
            ->drop();
    }
}
