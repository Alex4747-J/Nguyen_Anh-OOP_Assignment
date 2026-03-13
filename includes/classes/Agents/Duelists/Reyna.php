<?php

namespace MyProject\Agents\Duelists;

use MyProject\Agents\Duelist;

/**
 * Reyna
 *
 * Represents the agent Reyna, extending the Duelist class.
 */

class Reyna extends Duelist {

    /**
    * @var int $takeSouls - the number of soul charges Reyna has
    */

    protected int $takeSouls = 2;
        /**
        * Create a new agent named Reyna and health.
        * @param int $health - the health points for Reyna
        */

    public function __construct( int $health = 100){
        parent::__construct("Reyna", $health);
        $this->takeSouls = 2;
    }

     /**
     * Attack method specific to Reyna
     *
     * @return void
     */

    public function attack(): void
    {
        parent::attack();
        echo "<p>" . $this->name . " blind them then swing to take advantage!</p>";
    }

    /**
     * Ability specific to Reyna
     *
     * @return void
     */

    public function useAbility(): void
    {
        if ($this->takeSouls > 0) {
            echo "<p>" . $this->name . " takes the souls of her fallen enemies!</p>";
            $this->takeSouls--;
        } else {
            echo "<p>" . $this->name . " has no souls left!</p>";
        }
    }

    /**
     * Reload soul charges for Reyna
     *
     * @return void
     */

    public function reloadSoul(): void
    {
        $this->takeSouls = 2;
        echo "<p>" . $this->name . " reloads soul charges!</p>";
    }
}