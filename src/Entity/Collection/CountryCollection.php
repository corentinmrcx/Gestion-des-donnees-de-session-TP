<?php
declare(strict_types=1);

namespace Entity\Collection;

use Database\MyPdo;
use Entity\Country;

class CountryCollection
{
    public static function findAll(): array{
        $stmt = MyPdo::getInstance()->prepare(
            <<<'SQL'
SELECT * FROM country ORDER BY name
SQL);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Country::class);
    }
}