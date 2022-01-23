<?php

namespace App\Infrastructure\Eloquents;

use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $text
 */
class EloquentTemp extends Model
{

  protected $table = 'tests';
  protected $primaryKey = 'id';

  public function getId(): int
  {
    return $this->id;
  }

}