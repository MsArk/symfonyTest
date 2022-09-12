<?php

// src/Entity/BlogPost.php

final class BlogPost {
  // ...

  /**
    * @ORM\Column(name="title", type="string")
    */
  private ?string $title = null;

  /**
    * @ORM\Column(name="body", type="text")
    */
  private ?string $body = null;

  /**
    * @ORM\Column(name="draft", type="boolean")
    */
  private bool $draft = false;

  /**
    * @ORM\ManyToOne(targetEntity="Category", inversedBy="blogPosts")
    */
  private ?Category $category = null;
}
