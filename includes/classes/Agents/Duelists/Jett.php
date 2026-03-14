<?php

namespace MyProject\Agents\Duelists;

use MyProject\Agents\Duelist;
use MyProject\Traits\HasSmokeTrait;

/**
 * Jett
 *
 * Represents the agent Jett, extending the Duelist class.
 * Uses HasSmokeTrait for smoke ability.
 */

class Jett extends Duelist {
    use HasSmokeTrait;
    
    /**
     * @var int $dashCharges - the number of dash charges Jett has
     */
    
    protected int $dashCharges = 2;
        /**
        * Create a new agent named Jett and health.
        * @param int $health - the health points for Jett
        */

    public function __construct( int $health = 100){
        parent::__construct("Jett", $health);
        $this->dashCharges = 2;
    }

     /**
      * Describe Jett with additional information about her playstyle and abilities.
      */

     public function describe(): void
     {
        parent::describe();
        echo "<p>" . $this->name . " is a Duelist agent known for her agility and mobility, allowing her to quickly navigate the battlefield and surprise enemies with swift attacks.</p>";
     }

     /**
     * Attack method specific to Jett
     *
     * @return void
     */

    public function attack(): void
    {
        parent::attack();
        echo "<p>" . $this->name . " dashes forward and surprise her enemy, then shoot them!</p>";
    }

    /**
     * Ability specific to Jett
     *
     * @return void
     */

    public function useAbility(): void
    {
        if ($this->dashCharges > 0) {
            echo "<p>" . $this->name . " updrafts to glide through the air!</p>";
            $this->dashCharges--;
        } else {
            echo "<p>" . $this->name . " has no dash charges left!</p>";
        }
    }

    /**
     * Reload dash charges for Jett
     *
     * @return void
     */

    public function reloadDash(): void
    {
        $this->dashCharges = 2;
        echo "<p>" . $this->name . " reloads dash charges!</p>";
    }
}