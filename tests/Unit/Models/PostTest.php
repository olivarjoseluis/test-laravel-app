<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;

use App\Models\Post;

class PostTest extends TestCase
{
  public function test_set_name_in_lowercase()
  {
    $post = new Post;
    $post->name = "Project PHP";

    $this->assertEquals('project php', $post->name);
  }

  public function test_get_slug()
  {
    $post = new Post;
    $post->name = "Project PHP";

    $this->assertEquals('project-php', $post->slug);
  }

  public function test_get_href()
  {
    $post = new Post;
    $post->name = 'PHP Project';

    $this->assertEquals('blog/php-project', $post->href());
  }
}
