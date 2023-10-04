<?php
trait Publishable
{

  private int $publication_year;

  public function getPublicationYear()
  {
    return $this->publication_year;
  }

  private function setPublicationYear($year)
  {
    $this->publication_year = $year;
  }
}