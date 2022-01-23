<?php

namespace App\Http\ViewComposers;

use App\Domain\Repositories\TempRepository;
use Illuminate\View\View;

class TempComposer
{
  public function __construct(
    TempRepository $tempRepo
  )
  {
    $this->tempRepo = $tempRepo;
  }
  public function compose(View $view)
  {
    $tempData = $this->tempRepo->getAll();

    $view->with([
      'tempData' => $tempData,
    ]);


  }
}