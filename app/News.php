<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GenericClassWithMedia;

class News extends Model
{
    // instanciar el trait creado
    use GenericClassWithMedia;

    protected $fillable = [
        'title',
        'abstract',
        'content',
        'status',
        'url_img',
        'order'
    ];
    protected $images_attr = ['url_img'];
    protected $folder_images = 'news_images';
}
