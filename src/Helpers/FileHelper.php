<?php

namespace FabioSchunig\Site\Helpers;

class FileHelper
{
    public static function imageFiles(string $path): array
    {
        return preg_grep('~\.(jpeg|jpg|png)$~i', scandir($path));
    }
}
