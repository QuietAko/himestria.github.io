<?php

class TestTaskItem extends TaskItem
{
    private function __construct() {}
    private function __clone() {}

    protected static $table_name = 'test_task_item';
}

?>