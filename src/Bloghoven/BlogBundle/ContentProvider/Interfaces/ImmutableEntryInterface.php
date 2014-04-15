<?php

namespace Bloghoven\BlogBundle\ContentProvider\Interfaces;

interface ImmutableEntryInterface
{
  public function getPermalinkId();

  public function getTitle();

  public function getExcerpt();

  public function getContent();

  public function getPostedAt();

  public function getModifiedAt();

  public function isDraft();

  public function getCategories();
}
