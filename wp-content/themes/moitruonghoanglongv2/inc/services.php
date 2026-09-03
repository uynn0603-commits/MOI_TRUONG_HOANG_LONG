<?php
/**
 * Load dịch vụ từ JSON
 *
 * @package MTRL
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * @return array<string, array<string, mixed>>
 */
function mtrl_get_services_data(): array
{
    static $cache = null;
    if ($cache !== null) {
        return $cache;
    }
    $path = MTRL_DIR . '/assets/data/services.json';
    if (! is_readable($path)) {
        $cache = [];
        return $cache;
    }
    $json = file_get_contents($path);
    $data = json_decode((string) $json, true);
    $cache = is_array($data) ? $data : [];
    return $cache;
}

/**
 * @return array<string, mixed>|null
 */
function mtrl_get_service(string $slug): ?array
{
    $all = mtrl_get_services_data();
    return $all[$slug] ?? null;
}

/**
 * @return array<string, string>
 */
function mtrl_service_titles(): array
{
    $all = mtrl_get_services_data();
    $out = [];
    foreach ($all as $slug => $row) {
        if (! empty($row['title'])) {
            $out[$slug] = (string) $row['title'];
        }
    }
    return $out;
}
