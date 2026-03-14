<?php

namespace MyProject\Agents\Sentinels;

use MyProject\Agents\Sentinel;

/**
 * Killjoy
 *
 * Represents the agent Killjoy, extending the Sentinel class.
 */

class Killjoy extends Sentinel {
    /**
     * @var int $nanoSwamp - the number of nano swamps Killjoy has
     */
    
    protected int $nanoSwamp = 2;
        /**
        * Create a new agent named Killjoy and health.
        * @param int $health - the health points for Killjoy
        */

    public function __construct( int $health = 100){
        parent::__construct("Killjoy", $health);
        $this->nanoSwamp = 2;
    }

    /**
     * Describe Killjoy with additional information about her playstyle and abilities.
     * @return void
     */

    public function describe(): void {
        echo "<p>" . $this->name . " is a tech-savvy Sentinel who       excels at controlling the battlefield with her gadgets. Killjoy can deploy turrets, nano swarms, and lockdown devices to defend key areas and support her team.</p>";
    }

     /**
     * Attack method specific to Killjoy
     *
     * @return void
     */

    public function attack(): void
    {
        parent::attack();
        echo "<p>" . $this->name . " sets up a turret to defend the site!</p>";
    }

    /**
     * Ability specific to Killjoy
     *
     * @return void
     */

    public function useAbility(): void
    {
        if ($this->nanoSwamp > 0) {
            echo "<p>" . $this->name . " deploys a nano swarm to zone the enemy!</p>";
            $this->nanoSwamp--;
        } else {
            echo "<p>" . $this->name . " has no nano swamps left!</p>";
        }
    }

    /**
     * Reload nano swamps for Killjoy    
     *
     * @return void
     */
    
    public function reloadNanoSwamp(): void
    {
        $this->nanoSwamp = 2;
        echo "<p>" . $this->name . " reloads nano swamps!</p>";
    }
}