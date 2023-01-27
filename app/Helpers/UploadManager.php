<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;

class UploadManager
{
    public static function photo(UploadedFile $original): string
    {
        $name = time().rand(1,1000) . '.' . $original->getClientOriginalExtension();

        $original->storeAs('/public', $name);

        return $name;
    }
}
