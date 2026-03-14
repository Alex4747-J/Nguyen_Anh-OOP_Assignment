<?php

namespace MyProject\Agents;

use MyProject\Agent;

/**
 * Controller
 *
 * Represents a Controller agent, extending the base Agent class.
 * Controllers are supportive agents who provide cover and map control.
 */

class Controller extends Agent {
    /**
     * Create a new Controller agent with the given name and health.
     * @param string $name - the name of the Controller agent.
     * @param int $health - the health points of the Controller
     */

    public function __construct(string $name, int $health = 100) {
        parent::__construct($name, "Controller", $health);
    }

    /**
     * Attack method specific to Controllers, representing their supportive playstyle.
     *
     * @return void
     */
    public function attack(): void {
        echo "<p>" . $this->name . " is staying behind and provide covers for their teammates! </p>";
    }

    /**
     * Use the ability to gain map control and support teammates by blocking vision and area denial.
     *
     * @return void
     */
    
    public function useAbility(): void {
        echo "<p>" . $this->name . " uses their ability to gain map control!</p>";
    }   
}