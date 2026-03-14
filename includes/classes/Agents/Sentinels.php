<?php

namespace MyProject\Agents;

use MyProject\Agent;

/**
 * Sentinel
 *
 * Represents a Sentinel agent, extending the base Agent class.
 * Sentinels are defensive agents who protect key areas and provide utility.
 */

class Sentinel extends Agent {
    /**
     * Create a new Sentinel agent with the given name and health.
     * @param string $name - the name of the Sentinel agent.
     * @param int $health - the health points of the Sentinel
     */

    public function __construct(string $name, int $health = 100) {
        parent::__construct($name, "Sentinel", $health);
    }

    /**
     * Attack method specific to Sentinels, representing their defensive playstyle.
     *
     * @return void
     */
    public function attack(): void {
        echo "<p>" . $this->name . " is holding their ground!</p>";
    }

    /**
     * Use their ability to fortify positions and protect key areas, providing utility for the team.
     *
     * @return void
     */
    
    public function useAbility(): void {
        echo "<p>" . $this->name . " uses their ability to fortify positions and protect key areas!</p>";
    }   
}