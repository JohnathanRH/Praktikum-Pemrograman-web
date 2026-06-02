<?php
abstract class Controller {
    public static function redirectTo($url) {
        header("Location: http://localhost/prakwebmod5/$url");
        exit;
    }

    abstract public static function create(array $request);
    abstract public static function read(int $id);
    abstract public static function update(array $request);
    abstract public static function delete(int $id);
}
?>