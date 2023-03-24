<?php

namespace Generating\Builder\Classes;

use Generating\Builder\Entity\BlogPost;
use Generating\Builder\Interfaces\BlogPostBuilderInterface;

class BlogPostManager
{
    private BlogPostBuilderInterface $builder;

    public function setBuilder(BlogPostBuilderInterface $builder): self
    {
        $this->builder = $builder;

        return $this;
    }

    public function createCleanPost(): BlogPost
    {
        return $this->builder->getBlogPost();
    }

    public function createNewPostIt(): BlogPost
    {
        return $this->builder
            ->setTitle('Заголовок: Новый пост про ИТ')
            ->setBody('Основной текст: Новый пост про ИТ')
            ->setCategories([
                'Категория ИТ 1',
                'Категория ИТ 2',
            ])
            ->setTags([
                'Тег ИТ 1',
                'Тег ИТ 2',
                'Тег ИТ 3',
            ])
            ->getBlogPost();
    }

    public function createPostCats(): BlogPost
    {
        return $this->builder
            ->setTitle('Заголовок: Новый пост про кошек')
            //->setBody('Основной текст: Новый пост про кошек')
            ->setCategories([
                'Категория Кошек 1',
                'Категория Кошек 2',
            ])
            ->setTags([
                'Тег Кошек 1',
                'Тег Кошек 2',
                'Тег Кошек 3',
            ])
            ->getBlogPost();
    }


}