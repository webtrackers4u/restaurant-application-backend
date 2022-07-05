<?php
if (! function_exists('web_base_url')) {
    function web_base_url($relativePath = '' ): string
    {
        $uri = getenv("WEB_APP_URL");
        return $uri."/".$relativePath;
    }
}
