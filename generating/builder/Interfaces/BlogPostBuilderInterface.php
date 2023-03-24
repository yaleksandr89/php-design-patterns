<?php

namespace Generating\Builder\Interfaces;

use Generating\Builder\Entity\BlogPost;

interface BlogPostBuilderInterface
{
    public function create(): BlogPostBuilderInterface;

    public function setTitle(string $title): BlogPostBuilderInterface;

    public function setBody(string $body): BlogPostBuilderInterface;

    public function setCategories(array $categories): BlogPostBuilderInterface;

    public function setTags(array $tags): BlogPostBuilderInterface;

    public function getBlogPost(): BlogPost;
}
