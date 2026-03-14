<?php

namespace MyProject\Agents;

use MyProject\Agent;

/**
 * Duelist
 *
 * Represents a Duelist agent, extending the base Agent class.
 * Duelists are aggressive entry fraggers who lead the attack.
 */

class Duelist extends Agent {
    /**
     * Create a new Duelist agent with the given name and health.
     * @param string $name - the name of the Duelist agent.
     * @param int $health - the health points of the Duelist
     */

    public function __construct(string $name, int $health = 100) {
        parent::__construct($name, "Duelist", $health);
    }

    /**
     * Attack method specific to Duelists, representing their aggressive playstyle.
     *
     * @return void
     */
    public function attack(): void {
        echo "<p>" . $this->name . " rushes in to fire at the enemy!</p>";
    }

    /**
     * Use the ability to push
     *
     * @return void
     */

    public function useAbility(): void {
        echo "<p>" . $this->name . " uses their ability to push in site!</p>";
    }   
}