<?php

namespace Tests\Unit\UseCase;

use App\Domain\Repositories\TempRepository;
use App\Domain\UseCases\TempStore;
use App\Infrastructure\RepositoriesImpl\TempRepositoryImpl;
use Tests\TestCase;


class TempTest extends TestCase
{


    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {

        $tempRepository = app()->make(TempRepositoryImpl::class);

        $tempStore = new TempStore($tempRepository);
        $tempStore('tests');

        $this->assertTrue(true);
    }
}
