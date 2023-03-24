<?php

namespace Generating\Builder;

use Generating\Builder\Classes\BlogPostBuilder;
use Generating\Builder\Classes\BlogPostManager;
use JetBrains\PhpStorm\NoReturn;

class Controller
{
    private string $name = 'Строитель';

    #[NoReturn]
    public function builder(): void
    {
        $builder = new BlogPostBuilder();

        $posts[] = $builder
            ->setTitle('From builder')
            ->getBlogPost();

        $manager = new BlogPostManager();
        $manager->setBuilder($builder);

        $posts[] = $manager->createCleanPost();
        $posts[] = $manager->createNewPostIt();
        $posts[] = $manager->createPostCats();

        dd($posts);
    }
}
