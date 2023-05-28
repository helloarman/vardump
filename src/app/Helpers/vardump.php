<?php 

if (!function_exists('ar')) {
    function ar($variable)
    {
        if (is_array($variable)) {
            // If it is, print it as an array
            echo "<div style='background-color:#000; padding:10px; color:#ff0000;'>Output: (Array)";
            echo "<pre style='color:#fff'>";
            print_r($variable);
            echo "</pre></div>";
            die();
        } elseif (is_object($variable)) {
            // If it's not, assume it's an object and print it as an array
            echo "<div style='background-color:#000; padding:10px; color:#ff0000'>Output: (Object)";
            echo "<pre style='color:#fff'>";
            print_r($variable->toArray());
            echo "</pre></div>";
            die();
        } else {
            echo "<div style='background-color:#000; padding:10px; color:#ff0000'>Output:";
            echo "<pre>";
            var_dump($variable);
            echo "</pre></div>";
            die();
        }
    }
}