<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
        return 'Страница список постов';
    }

    public function create() 
    {
        return 'Страница создание поста';
    }

    public function store() 
    {
        return 'Запрос создание поста';
    }

    public function show() 
    {
        return 'Страница просмотра поста';
    }

    public function edit() 
    {
        return 'Страница изменение поста';
    }

    public function update() 
    {
        return 'Страница обновление поста';
    }

    public function delete() 
    {
        return 'Страница удаление поста';
    }

    public function like() 
    {
        return 'Лайк + 1';
    }
}
