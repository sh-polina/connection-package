<?php

namespace Polina\ComposerPackages;
use PDO;

class Connection
{

    public function getConnection(string $dsn): PDO
    {

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        return new PDO($dsn, 'root', '', $options);
    }
}