<?php

namespace MyProject\Agents\Controllers;

use MyProject\Agents\Controller;
use MyProject\Traits\HasSmokeTrait;

/**
 * Omen
 *
 * Represents the agent Omen, extending the Controller class.
 * Uses HasSmokeTrait for smoke ability.
 */

class Omen extends Controller {
    use HasSmokeTrait;

    /**
     * @var int $blindCharges - the number of blind charges Omen has
     */
    
    protected int $blindCharges = 2;
        /**
        * Create a new agent named Omen and health.
        * @param int $health - the health points for Omen
        */

    public function __construct( int $health = 100){
        parent::__construct("Omen", $health);
        $this->blindCharges = 2;
    }

    /**
     * Describe Omen's unique playstyle and abilities.
     * @return void
     */

    public function describe(): void {
        echo "<p>" . $this->name . " is a mysterious controller who excels at manipulating the battlefield with smokes and blinds. Omen can disorient enemies and create opportunities for his team to strike.</p>";
    }

     /**
     * Attack method specific to Omen
     *
     * @return void
     */

    public function attack(): void
    {
        parent::attack();
        echo "<p>" . $this->name . " sneak behind their back and give a surprise attack!</p>";
    }

    /**
     * Ability specific to Omen
     *
     * @return void
     */

    public function useAbility(): void
    {
        if ($this->blindCharges > 0) {
            echo "<p>" . $this->name . " blinds their enemy with a dark cloud!</p>";
            $this->blindCharges--;
        } else {
            echo "<p>" . $this->name . " has no blind charges left!</p>";
        }
    }

    /**
     * Reload blind charges for Omen    
     *
     * @return void
     */
    
    public function reloadBlind(): void
    {
        $this->blindCharges = 2;
        echo "<p>" . $this->name . " reloads blind charges!</p>";
    }
}