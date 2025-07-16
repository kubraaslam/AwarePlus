<?php

class Database {
    public static function connect() {
        return new PDO('mysql:host=localhost;dbname=awareplus_db', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}
