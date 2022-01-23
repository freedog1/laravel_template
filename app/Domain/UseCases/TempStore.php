<?php

namespace App\Domain\UseCases;

use DB;
use App\Domain\Repositories\TempRepository;

class TempStore
{
  /**
   * コンストラクタ
   */
  public function __construct(
    TempRepository $tempRepo
  )
  {
    $this->tempRepo = $tempRepo;
    
  }

  public function __invoke(string $word)
  {
    $this->tempRepo->store($word);
    

    //logWriter

    
  }


}