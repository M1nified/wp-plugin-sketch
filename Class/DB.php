<?php namespace wp_plugin_sketch;

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class DB
{
    private $db;

    const TABLE_NAMES = [
        'table_1',
        'table_2'
    ];

    private $tableNames = null;

    function __constructor()
    {
        global $wpdb;
        $this->db = $wpdb;

        $this->tableNames = [];
        foreach (self::TABLE_NAMES as $table_name) {
            $this->tableNames[$table_name] = $wpdb->prefix.$table_name;
        }
    }
}
