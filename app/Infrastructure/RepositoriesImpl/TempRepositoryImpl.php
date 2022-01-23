<?php

namespace App\Infrastructure\RepositoriesImpl;

use App\Domain\Repositories\TempRepository;
use App\Infrastructure\Eloquents\EloquentTemp;

class TempRepositoryImpl implements TempRepository
{
  /**
   * データ永続化
   *
   * @param string $word
   * @return void
   */
  public function store(string $word)
  {
    $eloquentTemp = new EloquentTemp();
    $eloquentTemp->text = $word;
    $eloquentTemp->save();

    return $eloquentTemp;
  }
  
  public function getAll()
  {
    return EloquentTemp::all();
  }


}