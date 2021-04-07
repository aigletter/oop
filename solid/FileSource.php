<?php


namespace solid;


class FileSource implements SourceInterface
{
    public function load($id): ?array {
        $json = file_get_contents('orders.json');
        $array = json_decode($json, JSON_OBJECT_AS_ARRAY);
        $array = array_column($array, null, 'id');

        if (array_key_exists($id, $array)) {
            return  $array[$id];
        }

        return null;
    }
}