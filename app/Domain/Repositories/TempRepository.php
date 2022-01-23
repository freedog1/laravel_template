<?php

namespace App\Domain\Repositories;



interface TempRepository
{
  /**
   * store
   */
  public function store(string $word);

  /**
   * テーブルから全て取得
   *
   * @return void
   */
  public function getAll();



}