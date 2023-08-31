<?php

function getBlogImageUrl($blogId) {
    $extensions = ['jpeg', 'png', 'jpg', 'gif'];

    foreach ($extensions as $extension) {
        $imagePath = public_path('uploads/' . $blogId . '.' . $extension);
        if (File::exists($imagePath)) {
            return asset('uploads/' . $blogId . '.' . $extension);
        }
    }

    // If none of the specified extensions are found, return the default image URL
    return asset('uploads/default.jpg');
}

function getCategoryImageUrl($categoryId) {
    $extensions = ['jpeg', 'png', 'jpg', 'gif'];

    foreach ($extensions as $extension) {
        $imagePath = public_path('uploads/categories/' . $categoryId . '.' . $extension);
        if (File::exists($imagePath)) {
            return asset('uploads/categories/' . $categoryId . '.' . $extension);
        }
    }

    // If none of the specified extensions are found, you can provide a default image URL
    return asset('uploads/categories/default.jpg');
}