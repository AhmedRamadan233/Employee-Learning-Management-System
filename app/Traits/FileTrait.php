<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

trait FileTrait
{
    final public function uploadFile($file, $folder, $oldFile = null)
    {
        if ($oldFile && File::exists(storage_path('app/public/' . $oldFile))) {
            File::delete(storage_path('app/public/' . $oldFile));
        }

        $rand = rand(999999, 1000000);
        $fileName = time() . '_' . $rand . '.' . $file->getClientOriginalExtension();

        $file->move(storage_path('app/public/' . $folder), $fileName);

        return $folder . '/' . $fileName;
    }

    final public function uploadMultipleFiles($files, $folder, $oldFiles = null)
    {
        if ($oldFiles) {
            foreach ($oldFiles as $oldFile) {
                if (File::exists(storage_path('app/public/' . $oldFile))) {
                    File::delete(storage_path('app/public/' . $oldFile));
                }
            }
        }

        $uploadedFiles = [];
        foreach ($files as $file) {
            $rand = rand(999999, 1000000);
            $fileName = time() . '_' . $rand . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/' . $folder), $fileName);
            $uploadedFiles[] = $folder . '/' . $fileName;
        }
        return $uploadedFiles;
    }

    final public function deleteFile($oldFile = null)
    {
        if ($oldFile && File::exists(storage_path('app/public/' . $oldFile))) {
            File::delete(storage_path('app/public/' . $oldFile));
        }
    }

    final public function deleteMultipleFiles($oldFiles = null)
    {
        if ($oldFiles) {
            foreach ($oldFiles as $oldFile) {
                if (File::exists(storage_path('app/public/' . $oldFile))) {
                    File::delete(storage_path('app/public/' . $oldFile));
                }
            }
        }
    }
}
