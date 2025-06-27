<?php

if (!function_exists('fileUpload')) {
/**
     * A custom helper function to store file and return fileName.
     *
     * @param string $name
     * @return string
     */
    function fileUpload($media, $folderName) {
        $file = $media;
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->storeAs($folderName, $fileName, 'public');
        return $fileName;
    }
}