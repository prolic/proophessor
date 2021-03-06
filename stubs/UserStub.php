<?php
/*
 * This file is part of prooph/proophessor.
 * (c) 2014-2015 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 5/5/15 - 7:01 PM
 */
namespace Prooph\Proophessor\Stub;

use Prooph\EventSourcing\AggregateRoot;

class UserStub extends AggregateRoot
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return string representation of the unique identifier of the aggregate root
     */
    protected function aggregateId()
    {
        return $this->id;
    }
}