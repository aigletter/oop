<?php


namespace solid;


class ApiSource implements SourceInterface, TriggerInterface
{

    public function load($id): ?array {
        return [
            'id' => 1,
            'title' => 'Api order title'
        ];
    }

    public function trigger($event) {
        echo 'Send notification' . PHP_EOL;
    }
}